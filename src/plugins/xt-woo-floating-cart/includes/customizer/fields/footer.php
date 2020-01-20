<?php

if(self::$parent->fs()->can_use_premium_code__premium_only()) {


	Xirki::add_field( self::$config_id, array(
		'settings'    => self::field_id('cart_checkout_form'),
		'section'     => self::section_id('footer'),
		'label'       => esc_html__( 'Enable Checkout Form', 'woo-floating-cart' ),
		'description' => sprintf(esc_html__( 'This option will load the checkout form below the cart list and will transform the %1$sCheckout%2$s button into a %1$sPlace Order%2$s button. If checkout registration is disabled and not logged in, this option will be disabled.', 'woo-floating-cart' ), '<strong>', '</strong>'),
		'type'        => 'radio-buttonset',
		'choices'     => array(
			'1'	  => esc_attr__( 'Enable', 'woo-floating-cart' ),
			'0'  => esc_attr__( 'Disable', 'woo-floating-cart' )
		),
		'default'     => '0',
		'priority'    => 10
	));

	Xirki::add_field(self::$config_id, array(
		'settings' => self::field_id('enable_totals'),
		'section' => self::section_id('footer'),
		'label' => esc_html__('Enable Totals', 'woo-floating-cart'),
		'type'        => 'radio-buttonset',
		'choices'     => array(
			'0' => esc_html__('No', 'woo-floating-cart'),
			'1' => esc_html__('Yes', 'woo-floating-cart')
		),
		'default' => '0',
		'priority' => 10,
		'active_callback'    => array(
			array(
				'setting'  => self::field_id('cart_checkout_form'),
				'operator' => '==',
				'value'    => '0',
			),
		),
	));

	Xirki::add_field( self::$config_id, array(
		'settings'    => self::field_id('cart_checkout_link'),
		'section'     => self::section_id('footer'),
		'label'       => esc_html__( 'Cart Checkout Action', 'woo-floating-cart' ),
		'type'        => 'radio-buttonset',
		'choices'     => array(
			'checkout'	  => esc_attr__( 'Go to Checkout Page', 'woo-floating-cart' ),
			'cart'  => esc_attr__( 'Go to Cart Page', 'woo-floating-cart' )
		),
		'default'     => 'checkout',
		'priority'    => 10,
		'active_callback'    => array(
			array(
				'setting'  => self::field_id('cart_checkout_form'),
				'operator' => '==',
				'value'    => '0',
			),
		),
	));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_checkout_button_bg_color'),
        'section'  => self::section_id('footer'),
        'label'    => esc_html__( 'Cart Checkout Button Bg Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2c97de',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner a.xt_woofc-checkout',
                'property' => 'background',
            )
        )
    ));
    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_checkout_button_bg_hover_color'),
        'section'  => self::section_id('footer'),
        'label'    => esc_html__( 'Cart Checkout Button Bg Hover Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2c97de',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc-inner a.xt_woofc-checkout:hover', '.xt_woofc-touchevents .xt_woofc-inner a.xt_woofc-checkout:focus'),
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_checkout_button_text_color'),
        'section'  => self::section_id('footer'),
        'label'    => esc_html__( 'Cart Checkout Button Text Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-cart-open .xt_woofc-inner a.xt_woofc-checkout',
                'property' => 'color',
            )
        )
    ));
    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_checkout_button_text_hover_color'),
        'section'  => self::section_id('footer'),
        'label'    => esc_html__( 'Cart Checkout Button Text Hover Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc-cart-open .xt_woofc-inner a.xt_woofc-checkout:hover', '.xt_woofc-touchevents .xt_woofc-cart-open .xt_woofc-inner a.xt_woofc-checkout:focus'),
                'property' => 'color',
            )
        )
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('footer_features'),
        'section'     => self::section_id('footer'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/footer.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}