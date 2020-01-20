<?php

if(self::$parent->fs()->can_use_premium_code__premium_only()) {

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('hidden_on_pages'),
        'section' => self::section_id('visibility'),
        'label' => esc_html__('Hide cart on these pages', 'woo-floating-cart'),
        'description' => esc_html__('Note: The cart is automatically disabled on WooCommerce native cart / checkout pages', 'woo-floating-cart'),
        'type' => 'select',
        'multiple' => 999,
        'choices' => self::get_page_options(),
        'priority' => 10,
        'default' => ''
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('visible_on_empty'),
        'section' => self::section_id('visibility'),
        'label' => esc_html__('Keep visible on empty', 'woo-floating-cart'),
        'type' => 'toggle',
        'default' => '0',
        'priority' => 10
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('visibility'),
        'section' => self::section_id('visibility'),
        'label' => esc_html__('Device Visibility', 'woo-floating-cart'),
        'type' => 'radio',
        'choices' => array(
            'show-on-mobile-only' => esc_attr__('Show on mobile only', 'woo-floating-cart'),
            'show-on-tablet-mobile' => esc_attr__('Show on tablet and mobile', 'woo-floating-cart'),
            'show-on-tablet-desktop' => esc_attr__('Show on tablet and desktop', 'woo-floating-cart'),
            'show-on-desktop-only' => esc_attr__('Show on desktop only', 'woo-floating-cart'),
            'show-on-all' => esc_attr__('Show on all', 'woo-floating-cart'),
        ),
        'default' => 'show-on-all',
        'priority' => 10
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('visibility_features'),
        'section'     => self::section_id('visibility'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/visibility.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}