<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class XT_Woo_Floating_Cart_License {

	protected static $version = '1.0.1';

	protected $manager = null;

	protected $url = "https://license.xplodedthemes.com/process.php";
	protected $repo_url = "https://repo.xplodedthemes.com/{market}.php";
	protected $product;
	protected $market;
	protected $is_fake = false;
	protected $option_key;
	protected $option_key_check;
	protected $prefix = '';

	public function __construct (&$manager, $product, $market, $refreshLicense = false ) {

		$this->manager = $manager;
		$this->market = $market;
		$this->repo_url = str_replace('{market}', $this->market, $this->repo_url);

		$this->product = $this->get_market_product($product);

		if(empty($this->product->id)) {

			$this->is_fake = true;

		}else {

			$this->option_key       = 'xt-license-' . $this->product->id;
			$this->option_key_check = 'xt-license-check-' . $this->product->id;

			$this->prefix = 'xt_license_' . $this->product->id . '_';

			add_action( 'wp_ajax_' . $this->prefix( 'activation' ), array( $this, 'ajax_activate' ) );
			add_action( 'wp_ajax_' . $this->prefix( 'revoke' ), array( $this, 'ajax_revoke' ) );

			if ( ! empty( $_REQUEST[ 'xt-' . $this->market . '-refresh' ] ) ) {

				$this->deleteLocalLicense();

				$this->getLocalLicense();
			}

			if ( $refreshLicense || $this->refreshNeeded() ) {
				$license = $this->getLocalLicense();

				if ( ! empty( $license ) ) {
					$this->activate(
						$license->license->purchase_code,
						$license->license->domain,
						$license->license->installation_url
					);
				}
			}

			add_filter( 'xt_woofc_welcome_sections', array( $this, 'welcome_section_license' ), 1, 1 );
		}

		return $this;
	}

	public function enqueue_scripts() {

		$dir_url = plugin_dir_url(__FILE__).'../';

		wp_enqueue_style( 'xt-license', $dir_url.'assets/css/license.css', array(), self::$version, 'all' );
		wp_enqueue_script( 'xt-license', $dir_url.'assets/js/license-min.js', array( 'jquery' ), self::$version, false );
	}

	public function welcome_section_license($sections) {

		if (!$this->manager->is_paying()) {
			$action_title = esc_html__('Activate License', 'woo-floating-cart');
			$action_color = "#a00;";
		} else {
			$action_title = esc_html__('License Activated', 'woo-floating-cart');
			$action_color = "green;";
		}

		return array_merge(array(
			array(
				'id' => 'license',
				'title' => esc_html__( 'License', 'woo-floating-cart' ),
				'show_menu' => true,
				'action_link' => array(
					'title' => $action_title,
					'color' => $action_color
				),
				'content' => array(
					'type' => 'function',
					'function' => array($this, 'form'),
				),
                'callback' => array($this, 'enqueue_scripts')
			)
		), $sections);
	}

	public function prefix($key) {

		return $this->prefix.$key;
	}

	public function product() {

		return $this->product;
	}

	public function ajax_activate() {

		$nonce = $_POST['wpnonce'];
		if ( ! wp_verify_nonce( $nonce, $this->prefix('activation') ) ) {

			die( 'invalid nonce' );

		} else {

			$domain = !empty($_POST['domain']) ? $_POST['domain'] : '';
			$installation_url = !empty($_POST['installation_url']) ? $_POST['installation_url'] : '';
			$purchase_code = !empty($_POST['purchase_code']) ? $_POST['purchase_code'] : '';
			$email = !empty($_POST['email']) ? $_POST['email'] : '';
			$first_name = !empty($_POST['first_name']) ? $_POST['first_name'] : '';
			$last_name = !empty($_POST['last_name']) ? $_POST['last_name'] : '';

			$response = $this->activate($purchase_code, $domain, $installation_url, $email, $first_name, $last_name);

			die(json_encode($response));
		}
	}

	public function ajax_revoke() {

		$nonce = $_POST['wpnonce'];
		if ( ! wp_verify_nonce( $nonce, $this->prefix('revoke') ) ) {

			die( 'invalid nonce' );

		} else {

			$local = !empty($_POST['local']) ? true : false;
			$purchase_code = !empty($_POST['purchase_code']) ? $_POST['purchase_code'] : '';
			$domain = !empty($_POST['domain']) ? $_POST['domain'] : '';
			$response = $this->revoke($purchase_code, $domain, $local);

			die(json_encode($response));
		}
	}


	public function activate($purchase_code, $domain, $installation_url, $email = null, $first_name = null, $last_name = null) {

		$response = $this->process(array(
			'product_id' => $this->product->id,
			'purchase_code' => $purchase_code,
			'domain' => $domain,
			'installation_url' => $installation_url,
			'email' => $email,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'action' => 'activate',
			'market' => $this->market
		));

		if(!empty($response) && in_array($response->code, array("valid", "expired"))) {

			$this->saveLocalLicense($response);

		}else{

			$this->deleteLocalLicense();
		}

		return $response;
	}

	public function revoke($purchase_code, $domain = null, $local = false) {

		$response = $this->process(array(
			'purchase_code' => $purchase_code,
			'domain' => $domain,
			'action' => 'revoke'
		));

		if($local) {
			$license = $this->getLocalLicense();
			$this->deleteLocalLicense($license->license->product_id);
		}

		return $response;
	}

	public function process($data) {

		$data['t'] = time();
		$data['version'] = self::$version;
		$url = add_query_arg($data, $this->url);

		$response = $this->remote_get($url);

		if(!empty($response)) {
			return json_decode($response);
		}
		return false;
	}

	public function getLocalLicenseInfo($type) {

		$license = $this->getLocalLicense();

		if(!empty($license->license->$type)) {
			return $license->license->$type;
		}
		return "";
	}

	public function getLocalLicenseSummary() {

		$license = $this->getLocalLicense();

		if(!empty($license) && empty($license->license->email)) {

			list($email, $first_name, $last_name) = $this->getUserInfo();

			$this->revoke($license->license->purchase_code, $license->license->domain);
			$this->activate($license->license->purchase_code, $license->license->domain, $license->license->installation_url, $email, $first_name, $last_name);
			$license = $this->getLocalLicense();
		}

		return $license->license_summary;
	}

	public function getLocalLicense() {

		return $this->get_option($this->option_key);
	}

	public function refreshNeeded() {

		return $this->get_transient($this->option_key_check) === false;
	}

	public function saveLocalLicense($license) {

		$this->add_option($this->option_key, $license);
		$this->set_transient($this->option_key_check, time(), DAY_IN_SECONDS);
	}

	public function deleteLocalLicense($product_id = null) {

		if(!empty($product_id)) {

			$option_key = 'xt-license-'.$product_id;
			$option_key_check = 'xt-license-check-'.$product_id;

			$this->delete_option($option_key);
			$this->delete_transient($option_key_check);

		}

		$this->delete_option($this->option_key);
		$this->delete_transient($this->option_key_check);
	}

	public function isActivated() {
		return true;
	}

	public function isFound() {
		return true;
	}

	public function getUserInfo() {

		$email = '';
		$first_name = '';
		$last_name = '';
		$current_user = wp_get_current_user();

		if ( $current_user->exists() ) {
			$email = $current_user->user_email;
			$display_name = $current_user->display_name;
			$first_name = $current_user->user_firstname;
			$last_name = $current_user->user_lastname;

			if(empty($first_name) && empty($last_name)) {
				$first_name = $display_name;
			}
		}

		return array(
			$email,
			$first_name,
			$last_name
		);
	}

	public function form() {

		list($email, $first_name, $last_name) = $this->getUserInfo();

		$domain = "";
		if(is_multisite() && function_exists('get_current_site')) {
			$domain = get_current_site()->domain;
		}

		$isActivated = $this->isActivated();
		$isFound = $this->isFound();

		$license_key_label = ($this->market === 'envato') ? "Purchase Code" : 'License Key';

		?>
        <div id="xt-license-activation-<?php echo esc_attr($this->product->id);?>" data-id="<?php echo esc_attr($this->product->id);?>" data-ajaxurl="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" data-homeurl="<?php echo esc_url(network_site_url('/'));?>" data-domain="<?php echo $domain;?>" class="xt-license-activation">

            <div id="xt-license-activation-form" class="xt-license-form<?php if($isFound):?> xt-license-hide<?php endif;?>">
                <p class="xt-license-status">
				    <span class="xt-license-msg">
					    <?php
					    echo apply_filters(
						    $this->prefix('msg_activate'),
						    sprintf(
							    esc_html__( 'Your license of %1$s is %2$s.', 'woo-floating-cart'),
							    "<strong>".$this->product->name."</strong>",
							    "<span class='xt-license-status xt-license-invalid'><strong>".esc_html__('Not Activated', 'woo-floating-cart')."</strong></span>"
						    ),
						    $this->product
					    );
					    ?>
				    </span>
                    <span class="xt-license-submsg">
						<?php
						echo apply_filters(
							$this->prefix('submsg_activate'),
							sprintf(
								esc_html('Activate your %1$s to enable premium features and automated updates', 'woo-floating-cart'),
								$license_key_label,
								"<strong>".$this->product->name."</strong>"
							),
							$this->product
						);
						?>
					</span>
                    <span class="xt-license-submsg xt-license-revoke-info"></span>
                </p>
                <input type="hidden" name="action" value="<?php echo $this->prefix('activation');?>">
                <input type="hidden" name="wpnonce" value="<?php echo wp_create_nonce($this->prefix('activation'));?>">
                <input type="hidden" name="domain" value="">
                <input type="hidden" name="installation_url" value="">
                <input type="hidden" name="email" value="<?php echo esc_attr($email);?>">
                <input type="hidden" name="first_name" value="<?php echo esc_attr($first_name);?>">
                <input type="hidden" name="last_name" value="<?php echo esc_attr($last_name);?>">
                <input type="hidden" name="product_id" value="<?php echo esc_attr($this->product->id);?>">
                <input class="regular-text" placeholder="<?php echo $license_key_label;?>..." name="purchase_code" value="">
                <input type="submit" class="button button-primary" value="<?php echo esc_html__('Validate', 'woo-floating-cart'); ?>">
            </div>

            <div id="xt-license-revoke-form" class="xt-license-form xt-license-hide">

                <p class="xt-license-status">
                    <span class="xt-license-msg xt-license-invalid"><?php echo apply_filters($this->prefix('msg_active_invalid'), sprintf(esc_html__( 'This %1$s is activated somewhere else.', 'woo-floating-cart'), $license_key_label), $this->product);?></span>
                    <span class="xt-license-submsg"><?php echo apply_filters($this->prefix('submsg_active_invalid'), esc_html('You can either revoke the below license then re-activate it here or buy a new license.', 'woo-floating-cart'), $this->product);?></span>
                </p>

                <input type="hidden" name="action" value="<?php echo $this->prefix('revoke');?>">
                <input type="hidden" name="wpnonce" value="<?php echo wp_create_nonce($this->prefix('revoke'));?>">
                <input type="hidden" name="purchase_code" value="">
                <input type="hidden" name="domain" value="">
                <input type="button" class="button button xt-license-revoke-cancel" value="<?php echo esc_html__('Cancel', 'woo-floating-cart'); ?>">

                <a href="<?php echo $this->product->buy_url;?>" class="button" target="_blank"><?php echo esc_html__('Buy License', 'woo-floating-cart'); ?></a>
                <input type="submit" class="button button-primary" value="<?php echo esc_html__('Revoke', 'woo-floating-cart'); ?>">
            </div>

            <div id="xt-license-invalid" class="xt-license-hide">
                <p class="xt-license-status">
				    <span class="xt-license-msg">
				    <?php
				    echo apply_filters(
					    $this->prefix('msg_invalid'),
					    sprintf(
						    esc_html__( 'This %1$s is %2$s.', 'woo-floating-cart'),
						    $license_key_label,
						    "<span class='xt-license-status xt-license-invalid'><strong>".esc_html__('Invalid', 'woo-floating-cart')."</strong></span>"
					    ),
					    $this->product
				    );
				    ?>
				    </span>
                    <span class="xt-license-timer"></span>
                </p>
            </div>

            <div id="xt-license-activated" class="<?php if(!$isFound):?>xt-license-hide<?php endif;?>">
                <div class="xt-license-status">
                    <div class="xt-license-status-active<?php if(!$isActivated):?> xt-license-hide<?php endif;?>">
                        <span class="xt-license-msg">
                            <?php
                            echo apply_filters(
	                            $this->prefix('msg_activated'),
	                            sprintf(
		                            esc_html__( 'Your license of %1$s is %2$s.', 'woo-floating-cart'),
		                            "<strong>".$this->product->name."</strong>",
		                            "<span class='xt-license-status xt-license-valid'><strong>".esc_html__('Activated', 'woo-floating-cart')."</strong></span>"
	                            ),
	                            $this->product
                            );
                            ?>
                        </span>
                        <span class="xt-license-submsg">
                            <?php
                            echo apply_filters(
	                            $this->prefix('submsg_activated'),
	                            sprintf(
		                            esc_html__( 'Automated updates are now %1$s', 'woo-floating-cart'),
		                            "<strong>".esc_html__('Enabled', 'woo-floating-cart')."</strong>"
	                            ),
	                            $this->product
                            );
                            ?>
                        </span>
                    </div>
                    <div class="xt-license-status-expired<?php if($isActivated):?> xt-license-hide<?php endif;?>">
                        <span class="xt-license-msg">
                            <?php
                            echo apply_filters(
	                            $this->prefix('msg_expired'),
	                            sprintf(
		                            esc_html__( 'Your license of %1$s is %2$s.', 'woo-floating-cart'),
		                            "<strong>".$this->product->name."</strong>",
		                            "<span class='xt-license-status xt-license-invalid'><strong>".esc_html__('Expired', 'woo-floating-cart')."</strong></span>"
	                            ),
	                            $this->product
                            );
                            ?>
                        </span>
                        <span class="xt-license-submsg">
                            <?php
                            echo apply_filters(
	                            $this->prefix('submsg_expired'),
	                            sprintf(
		                            esc_html__( 'Automated updates are %1$s', 'woo-floating-cart'),
		                            "<strong>".esc_html__('Disabled', 'woo-floating-cart')."</strong>"
	                            ),
	                            $this->product
                            );
                            ?>
                        </span>
                    </div>
                </div>
            </div>

			<?php if($isFound):?>
                <div class="xt-license-info">
					<?php echo $this->getLocalLicenseSummary();?>
                </div>
			<?php else: ?>
                <div class="xt-license-info"></div>
			<?php endif;?>

            <div id="xt-license-local-revoke-form" class="xt-license-form<?php if(!$isFound):?> xt-license-hide<?php endif;?>">

                <input type="hidden" name="action" value="<?php echo $this->prefix('revoke');?>">
                <input type="hidden" name="wpnonce" value="<?php echo wp_create_nonce($this->prefix('revoke'));?>">
                <input type="hidden" name="purchase_code" value="<?php echo $this->getLocalLicenseInfo('purchase_code'); ?>">
                <input type="hidden" name="domain" value="<?php echo $this->getLocalLicenseInfo('domain'); ?>">
                <input type="hidden" name="local" value="1">
                <a href="<?php echo $this->product->buy_url;?>" class="button" target="_blank"><?php echo esc_html__('Buy License', 'woo-floating-cart'); ?></a>
                <input type="submit" class="button button-primary" value="<?php echo esc_html__('Revoke License', 'woo-floating-cart'); ?>">
            </div>
        </div>

		<?php
	}

	public function get_market_product($product) {

		$default = array(
			'id' => 0,
			'name' => '',
			'url' => '#',
			'buy_url' => '#'
		);

		if(is_int($product)) {

			$default['id'] = $product;
			return (object)$default;

		}else if(is_array($product)) {

			return (object)$product;
		}

		$cache_key = 'xt_'.$this->market.'_'.$product;

		if(!empty($_REQUEST['xt-'.$this->market.'-refresh'])) {

			$this->delete_transient($cache_key);
		}

		if ( false === ( $data = $this->get_transient( $cache_key ) ) ) {

			$url = $this->repo_url.'?id='.$product;
			$data = $this->remote_get($url);

			if(!empty($data) && is_array($data) && !empty($data['id'])) {

				// Store remote HTML file in transient, expire after 24 hours
				$this->set_transient( $cache_key, $data, 24 * WEEK_IN_SECONDS );
			}
		}

		if(empty($data)) {
			$data = $default;
		}

		return (object)$data;
	}

	public function remote_get($url) {

		$data = null;

		// First, we try to use wp_remote_get
		$response = wp_remote_get( $url, array(
			'timeout' => 120,
			'user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:20.0) Gecko/20100101 Firefox/20.0'
		));

		if( is_wp_error( $response ) || (!empty($response["response"]["code"]) && $response["response"]["code"] === 403 )) {

			if(function_exists('curl_init')) {

				// And if that doesn't work, then we'll try curl
				$curl = curl_init( $url );

				curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
				curl_setopt( $curl, CURLOPT_HEADER, 0 );
				curl_setopt( $curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:20.0) Gecko/20100101 Firefox/20.0' );
				curl_setopt( $curl, CURLOPT_TIMEOUT, 10 );

				$response = curl_exec( $curl );
				if( 0 !== curl_errno( $curl ) || 200 !== curl_getinfo( $curl, CURLINFO_HTTP_CODE ) ) {

					// If that doesn't work, then we'll try file_get_contents
					$response = @file_get_contents( $url );

				} // end if
				curl_close( $curl );

			}else{

				// If curl is not availaible try file_get_contents
				$response = @file_get_contents( $url );

			}// end if

			if( null == $response ) {
				$response = null;
			}

			if(!empty($response)) {
				$data = maybe_unserialize($response);
			}

		}else{

			// Parse remote HTML file
			$data = wp_remote_retrieve_body( $response );

			// Check for error
			if ( !is_wp_error( $data ) ) {
				$data = maybe_unserialize($data);
			}
		}

		return $data;
	}

	function set_transient($key, $value, $expiration = 0) {

		if(is_multisite()) {
			set_site_transient($key, $value, $expiration);
		}else{
			set_transient($key, $value, $expiration);
		}
	}

	function get_transient($key) {

		if(is_multisite()) {
			return get_site_transient($key);
		}else{
			return get_transient($key);
		}
	}

	function delete_transient($key) {

		if(is_multisite()) {
			delete_site_transient($key);
		}else{
			delete_transient($key);
		}
	}

	function add_option($key, $value) {

		if(is_multisite()) {
			add_site_option($key, $value);
		}else{
			add_option($key, $value, '', 'no');
		}
	}

	function get_option($key) {

		$option = $this->get_transient($key);

		if($option === false) {

			if(is_multisite()) {
				return get_site_option($key);
			}else{
				return get_option($key);
			}
		}

		return $option;
	}

	function delete_option($key) {

		$this->delete_transient($key);

		if(is_multisite()) {
			delete_site_option($key);
		}else{
			delete_option($key);
		}
	}

}
