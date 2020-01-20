<?php

/**
 * Fired during plugin activation
 *
 * @link       http://xplodedthemes.com
 * @since      1.0.0
 *
 * @package    XT_Woo_Floating_Cart
 * @subpackage XT_Woo_Floating_Cart/includes
 */
/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    XT_Woo_Floating_Cart
 * @subpackage XT_Woo_Floating_Cart/includes
 * @author     XplodedThemes <helpdesk@xplodedthemes.com>
 */
class XT_Woo_Floating_Cart_Bootstrap
{
    public static  $_instance ;
    public  $plugin ;
    public  $sdk ;
    /**
     * Boot SDK
     *
     * @since    1.0.0
     * @param $plugin
     * @return mixed
     */
    public function __construct( $plugin )
    {
        $this->plugin = $plugin;
        
        if ( !isset( $this->sdk ) ) {
            
            if ( $this->plugin->market !== 'freemius' ) {
                $this->sdk = $this->local__premium_only();
            }
            // Signal that SDK was initiated.
            do_action( 'xt_woofc_fs_loaded' );
            $this->base_hooks();
            $this->include_files();
        }
        
        return $this->sdk;
    }
    
    
    /**
     * Boot Local SDK
     *
     * @since    1.0.0
     * @return mixed
     */
    public function local__premium_only()
    {
        // Include License Checker
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/license/start.php';
        return xt_woofc_license_init( $this->plugin );
    }
    
    
    /**
     * Plugin main icon
     *
     * @return string Plugin icon
     */
    public function plugin_icon()
    {
        return dirname( $this->plugin->file ) . '/admin/assets/images/icon.png';
    }
    
    /**
     * Plugin base hooks to handle activation, deactivation and uninstall
     */
    public function base_hooks()
    {
        register_activation_hook( $this->plugin->file, array( $this, 'activate' ) );
        register_deactivation_hook( $this->plugin->file, array( $this, 'deactivate' ) );
        $this->sdk->add_action( 'after_uninstall', array( $this, 'uninstall' ) );
    }
    
    /**
     * The code that runs during plugin activation.
     * This action is documented in includes/class-activator.php
     */
    public function activate()
    {
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/class-activator.php';
        XT_Woo_Floating_Cart_Activator::activate();
    }
    
    /**
     * The code that runs during plugin deactivation.
     * This action is documented in includes/class-deactivator.php
     */
    public function deactivate()
    {
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/class-deactivator.php';
        XT_Woo_Floating_Cart_Deactivator::deactivate();
    }
    
    /**
     * The code that runs after plugin uninstall.
     * This action is documented in includes/class-uninstall.php
     */
    function uninstall()
    {
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/class-uninstaller.php';
        XT_Woo_Floating_Cart_Uninstaller::uninstall();
    }
    
    /**
     * Include plugin files
     */
    public function include_files()
    {
        /**
         * Global functions used to access multiple class public methods.
         */
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/global-functions.php';
        /**
         * WooCommerce Hooks, Filters and function overrides
         */
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/woocommerce.php';
        /**
         * Plugin support
         */
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/support/paypal-for-woocommerce.php';
        /**
         * The core plugin class that is used to define internationalization,
         * admin-specific hooks, and public-facing site hooks.
         */
        require_once plugin_dir_path( $this->plugin->file ) . 'includes/class-core.php';
    }
    
    /**
     * Main XT_Woo_Floating_Cart_Bootstrap Instance
     *
     * Ensures only one instance of XT_Woo_Floating_Cart_Bootstrap is loaded or can be loaded.
     *
     * @since 1.0.0
     * @static
     * @see XT_Woo_Floating_Cart_Bootstrap()
     * @return XT_Woo_Floating_Cart_Bootstrap instance
     */
    public static function boot( $plugin )
    {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self( $plugin );
        }
        return self::$_instance;
    }

}