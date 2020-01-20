<?php

if(!class_exists('XT_Woo_Floating_Cart_License_Manager')) {

    require_once 'class-license.php';

    class XT_Woo_Floating_Cart_License_Manager {

        #region Singleton
        private static $_instance;

        public $license;
        public $product;

        private function __construct($product)
        {

        	$this->product = $product;

            if(!empty($this->license) && $this->license instanceof XT_Woo_Floating_Cart_License) {
                return $this->license;
            }

            $refreshLicense = !empty($_REQUEST['xt-license-refresh']);
            $this->license = new XT_Woo_Floating_Cart_License($this, $this->product->premium_slug, $this->product->market, $refreshLicense);

            if(!empty($_REQUEST['xt-license-revoke']) && !empty($_REQUEST['id'])) {

                $id = intval($_REQUEST['id']);

                $license = new XT_Woo_Floating_Cart_License($this, $id, $this->product->market);

                $purchase_code = $license->getLocalLicenseInfo('purchase_code');
                $domain = $license->getLocalLicenseInfo('domain');

                if(!empty($purchase_code)) {
                    $license->revoke($purchase_code, $domain);
                }

                $license->deleteLocalLicense();
                die();
            }

            return $this;
        }

        public static function instance($product)
        {
            if (!isset(self::$_instance)) {
                self::$_instance = new self($product);
            }
            return self::$_instance;
        }
        #endregion

        /**
         * Check if running premium plugin code.

         * @since  1.0.5
         *
         * @return bool
         */
        function is_premium() {
            return true;
        }

        /**
         * Check if the user has an activated and valid paid license on current plugin's install.
         *
         * @return bool
         */
        function is_paying_active() {
            return $this->is_paying() && $this->license->isActivated();
        }

        /**
         * Check if the user has a valid paid license on current plugin's install.
         *
         * @return bool
         */
        function is_paying() {
            return $this->license->isFound();
        }

        /**
         * Check if user in trial or in free plan (not paying).
         *
         * @return bool
         */
        function is_not_paying() {
            return ( $this->is_trial() || $this->is_free_plan() );
        }

        /**
         * Check if the user is paying or in trial.
         *
         * @return bool
         */
        function is_paying_or_trial() {
            return ( $this->is_paying() || $this->is_trial() );
        }

        /**
         * Check if user in a trial or have feature enabled license.

         * @return bool
         */
        function can_use_premium_code() {
            return $this->is_paying();
        }

        #----------------------------------------------------------------------------------
        #region Premium Only
        #----------------------------------------------------------------------------------

        /**
         * Returns true when running premium plugin code.
         *
         * @return bool
         */
        function is__premium_only() {
            return $this->is_premium();
        }

        /**
         * Check if the user has an activated and valid paid license on current plugin's install.
         *
         * @return bool
         *
         */
        function is_paying__premium_only() {
            return ( $this->is__premium_only() && $this->is_paying() );
        }

        /**
         * Check if the user is paying or in trial.
         *
         * All code wrapped in this statement will be only included in the premium code.
         *
         *
         * @return bool
         */
        function is_paying_or_trial__premium_only() {
            return $this->is_premium() && $this->is_paying_or_trial();
        }


        /**
         * Check if user in a trial or have feature enabled license.
         *
         * All code wrapped in this statement will be only included in the premium code.
         *
         * @return bool
         */
        function can_use_premium_code__premium_only() {
            return true;
        }

        #endregion

        #----------------------------------------------------------------------------------
        #region Trial
        #----------------------------------------------------------------------------------

        /**
         * Check if the user in a trial.
         *
         * @return bool
         */
        function is_trial() {
            return false;
        }

        /**
         * Check if trial already utilized.
         *
         *
         * @return bool
         */
        function is_trial_utilized() {
            return false;
        }

        #endregion

        #----------------------------------------------------------------------------------
        #region Plans
        #----------------------------------------------------------------------------------

        /**
         * Check if the user is on the free plan of the product.
         *
         * @return bool
         */
        function is_free_plan() {
            return false;
        }

        /**
         * Check if module has any release on Freemius,
         * or all plugin's code is on WordPress.org (Serviceware).
         *
         * @return bool
         */
        function has_release_on_freemius() {
            return false;
        }

        /**
         * Checks if it's a freemium plugin.
         *
         * @return bool
         */
        function is_freemium() {
            return false;
        }

	    /**
	     * Get plugin's upgrade URL.
	     *
	     * @return bool
	     */
	    function get_upgrade_url() {

		    $product = $this->license->product();
		    if(!empty($product->buy_url)) {
			    return $product->buy_url;
		    }
		    return '';
	    }

	    /**
	     * Get plugin's license URL.
	     *
	     * @return string
	     */
	    function get_account_url( $action = false, $params = array(), $add_action_nonce = true ) {

		    if(!empty($this->product->license_section_slug)) {
			    return admin_url('admin.php?page='.$this->product->license_section_slug);
		    }

		    return '';
	    }

	    #----------------------------------------------------------------------------------
        #dummy freemius wrapper functions to avoid errors
        #----------------------------------------------------------------------------------

        function add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1) {

            add_action($tag, $function_to_add, $priority, $accepted_args);
        }

        function add_filter($tag, $function_to_add, $priority = 10, $accepted_args = 1) {

            add_filter($tag, $function_to_add, $priority, $accepted_args);
        }

        function apply_filters($tag, $value) {

            return apply_filters($tag, $value);
        }
    }
}