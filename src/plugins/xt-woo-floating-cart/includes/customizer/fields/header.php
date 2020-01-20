<?php

if(self::$parent->fs()->can_use_premium_code__premium_only()) {

	Xirki::add_field(self::$config_id, array(
		'settings' => self::field_id('enable_coupon_form'),
		'section' => self::section_id('header'),
		'label' => esc_html__('Enable Coupons', 'woo-floating-cart'),
		'type'        => 'radio-buttonset',
		'choices'     => array(
			'0' => esc_html__('No', 'woo-floating-cart'),
			'1' => esc_html__('Yes', 'woo-floating-cart')
		),
		'default' => '0',
		'priority' => 10
	));

	Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_bg_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-header, .xt_woofc-inner .xt_woofc-body .xt_woofc-body-header',
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_bottom_border_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Bottom Border Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#e6e6e6',
        'transport'=>'auto',
        'output' => array(
            array(
	            'element'  => '.xt_woofc-inner .xt_woofc-header, .xt_woofc-inner .xt_woofc-body .xt_woofc-body-header',
                'property' => 'border-color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_title_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Title Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#181818',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-title',
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Text Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#808b97',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-inner .xt_woofc-undo', '.xt_woofc-inner .xt_woofc-coupon', '.xt_woofc-inner .xt_woofc-body .xt_woofc-body-header'),
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_link_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Link Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2b3e51',
        'transport'=>'auto',
        'output' => array(
            array(
	            'element'  => array('.xt_woofc-inner .xt_woofc-undo a', '.xt_woofc-inner .xt_woofc-coupon a', '.xt_woofc-inner .xt_woofc-body .xt_woofc-body-header a'),
                'property' => 'color',
            )
        )
    ));
    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_link_hover_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Link Hover Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2b3e51',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc-inner .xt_woofc-undo a:hover', '.xt_woofc-touchevents .xt_woofc-inner .xt_woofc-undo a:focus', '.xt_woofc-no-touchevents .xt_woofc-inner .xt_woofc-coupon a:hover', '.xt_woofc-touchevents .xt_woofc-inner .xt_woofc-coupon a:focus', '.xt_woofc-touchevents .xt_woofc-inner .xt_woofc-body .xt_woofc-body-header a:hover'),
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_header_error_color'),
        'section'  => self::section_id('header'),
        'label'    => esc_html__( 'Cart Header Error Message Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#dd3333',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-cart-error',
                'property' => 'color',
            )
        )
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('header_features'),
        'section'     => self::section_id('header'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/header.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}