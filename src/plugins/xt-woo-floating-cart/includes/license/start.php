<?php

if ( ! class_exists( 'XT_Woo_Floating_Cart_License_Manager' ) ) {

    require_once plugin_dir_path( __FILE__ ) . 'includes/class-license-manager.php';
    require_once plugin_dir_path( __FILE__ ) . 'includes/plugin-update-checker/plugin-update-checker.php';
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-updater.php';

    /**
     * @param array <string,string> $module Plugin or Theme details.
     *
     * @return XT_Woo_Floating_Cart_License_Manager
     * @throws Exception
     */
    function xt_woofc_license_init( $plugin ) {

        $license_manager = XT_Woo_Floating_Cart_License_Manager::instance( $plugin );

        if(is_admin()) {

            new XT_Woo_Floating_Cart_Plugin_Updater($plugin->file, $plugin->premium_slug, $plugin->market, $license_manager->license);
        }

        return $license_manager;
    }

}