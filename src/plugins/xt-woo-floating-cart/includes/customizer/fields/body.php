<?php

if(self::$parent->fs()->can_use_premium_code__premium_only()) {

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_body_bg_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Body Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-inner .xt_woofc-list, .xt_woofc-cart-totals'),
                'property' => 'background-color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_body_text_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Body Text Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#666666',
        'transport'=>'auto',
        'output' => array(
            array(
	            'element'  => array('.xt_woofc-inner .xt_woofc-list, .xt_woofc-cart-totals'),
                'property' => 'color',
            )
        )
    ));

	Xirki::add_field( self::$config_id, array(
		'settings' => self::field_id('cart_body_link_color'),
		'section'  => self::section_id('body'),
		'label'    => esc_html__( 'Cart Body Link Color', 'woo-floating-cart' ),
		'type'     => 'color-alpha',
		'priority' => 10,
		'default'  => '#2b3e51',
		'transport'=>'auto',
		'output' => array(
			array(
				'element'  => array('.xt_woofc-inner .xt_woofc-list a, .xt_woofc-cart-totals a'),
				'property' => 'color',
			)
		)
	));

	Xirki::add_field( self::$config_id, array(
		'settings' => self::field_id('cart_body_link_hover_color'),
		'section'  => self::section_id('body'),
		'label'    => esc_html__( 'Cart Body Link Hover Color', 'woo-floating-cart' ),
		'type'     => 'color-alpha',
		'priority' => 10,
		'default'  => '#2b3e51',
		'transport'=>'auto',
		'output' => array(
			array(
				'element'  => array('.xt_woofc-no-touchevents .xt_woofc-inner .xt_woofc-list a:hover, .xt_woofc-no-touchevents .xt_woofc-cart-totals a:hover'),
				'property' => 'color',
			)
		)
	));

	Xirki::add_field( self::$config_id, array(
		'settings' => self::field_id('cart_body_border_color'),
		'section'  => self::section_id('body'),
		'label'    => esc_html__( 'Cart Body Border Color', 'woo-floating-cart' ),
		'type'     => 'color',
		'priority' => 10,
		'default'  => '#e6e6e6',
		'transport'=>'auto',
		'output' => array(
			array(
				'element'  => array(
					'.xt_woofc-cart-totals table tr th',
					'.xt_woofc-cart-totals table tr td',
					'.xt_woofc-inner .xt_woofc-quantity input',
					'.xt_woofc-inner .xt_woofc-quantity .xt_woofc-quantity-button',
					'.xt_woofc-inner .xt_woofc-body .xt_woofc-checkout-form',
					'.xt_woofc-inner .xt_woofc-body .xt_woofc-body-footer',
					'.xt_woofc-inner .xt_woofc-body form.woocommerce-form-login',
					'.xt_woofc-inner .xt_woofc-body .xt_woofc-cart-totals'
				),
				'property' => 'border-color',
				'value_pattern' => '$!important',
			)
		)
	));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_title_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Title Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2b3e51',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-inner .xt_woofc-product-title a', '.xt_woofc-inner .xt_woofc-product-title > span'),
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_title_hover_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Title Hover Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2c97de',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc-inner .xt_woofc-product-title a:hover', '.xt_woofc-touchevents .xt_woofc-inner .xt_woofc-product-title a:focus'),
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_price_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Price Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-price',
                'property' => 'color',
            )
        )
    ));


    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_delete_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Remove Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2b3e51',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-delete-item',
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_delete_hover_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Remove Hover Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2c97de',
        'transport'=>'auto',
        'output' => array(

            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc-inner .xt_woofc-delete-item:hover', '.xt_woofc-touchevents .xt_woofc-inner .xt_woofc-delete-item:focus'),
                'property' => 'color',
            )
        )
    ));


    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_qty_plus_minus_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Qty Plus Minus Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#808B94',
        'transport'=>'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-quantity .xt_woofc-quantity-button',
                'property' => 'color',
            )
        )
    ));
    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_qty_plus_minus_hover_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Qty Plus Minus Hover Color', 'woo-floating-cart' ),
        'type'     => 'color-alpha',
        'priority' => 10,
        'default'  => '#2c97de',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc-inner .xt_woofc-quantity .xt_woofc-quantity-button:hover', '.xt_woofc-touchevents .xt_woofc-inner .xt_woofc-quantity .xt_woofc-quantity-button:focus'),
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_qty_input_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Qty Input Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-quantity input',
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_qty_plus_minus_size'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Qty Plus Minus Size', 'woo-floating-cart' ),
        'type'     => 'slider',
        'choices'     => array(
            'min'  => '10',
            'max'  => '18',
            'step' => '1',
        ),
        'default'  => '10',
        'priority' => 10,
        'transport'=>'auto',
        'output'   => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-quantity .xt_woofc-quantity-button',
                'property' => 'font-size',
                'media_query' => '@media (min-width: 480px)',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-inner .xt_woofc-quantity .xt_woofc-quantity-button',
                'property' => 'font-size',
                'media_query' => '@media (max-width: 479px)',
                'value_pattern' => 'calc($px * 0.85)'
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_product_qty_input_size'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Qty Input Size', 'woo-floating-cart' ),
        'type'     => 'slider',
        'choices'     => array(
            'min'  => '10',
            'max'  => '24',
            'step' => '1',
        ),
        'default'  => '16',
        'priority' => 10,
        'transport'=>'auto',
        'output'   => array(
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-quantity input',
                'property' => 'font-size',
                'media_query' => '@media (min-width: 480px)',
                'value_pattern' => '$px'
            ),
            array(
                'element'  => '.xt_woofc-inner .xt_woofc-quantity input',
                'property' => 'font-size',
                'media_query' => '@media (max-width: 479px)',
                'value_pattern' => 'calc($px * 0.85)'
            )
        )
    ));

	Xirki::add_field( self::$config_id, array(
		'settings'    => self::field_id('cart_product_show_sku'),
		'section'  	  => self::section_id('body'),
		'label'       => esc_html__( 'Show Product Sku', 'woo-floating-cart' ),
		'type'        => 'toggle',
		'default'     => '0',
		'priority'    => 10,
		'transport'	  =>'postMessage'
	));

	Xirki::add_field( self::$config_id, array(
		'settings'    => self::field_id('cart_product_show_attributes'),
		'section'  	  => self::section_id('body'),
		'label'       => esc_html__( 'Show Product Attributes', 'woo-floating-cart' ),
		'type'        => 'toggle',
		'default'     => '0',
		'priority'    => 10,
		'transport'	  =>'postMessage'
	));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('cart_product_show_bundled_products'),
        'section'  	  => self::section_id('body'),
        'label'       => esc_html__( 'Show Bundled Products Items', 'woo-floating-cart' ),
        'type'        => 'toggle',
        'default'     => '1',
        'priority'    => 10,
        'transport'	  =>'postMessage'
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('cart_product_show_composite_products'),
        'section'  	  => self::section_id('body'),
        'label'       => esc_html__( 'Show Composite Products Items', 'woo-floating-cart' ),
        'type'        => 'toggle',
        'default'     => '1',
        'priority'    => 10,
        'transport'	  =>'postMessage'
    ));


	Xirki::add_field( self::$config_id, array(
		'settings'    => self::field_id('cart_product_link_to_single'),
		'section'  	  => self::section_id('body'),
		'label'       => esc_html__( 'Link Product to Single Page', 'woo-floating-cart' ),
		'type'        => 'radio-buttonset',
		'choices'     => array(
			'0'  => esc_attr__( 'No', 'woo-floating-cart' ),
			'1'	  => esc_attr__( 'Yes', 'woo-floating-cart' ),
		),
		'default'     => '1',
		'priority'    => 10,
		'transport'	  =>'postMessage'
	));

	Xirki::add_field( self::$config_id, array(
		'settings'    => self::field_id('cart_product_hide_thumb'),
		'section'  	  => self::section_id('body'),
		'label'       => esc_html__( 'Hide Product Thumb', 'woo-floating-cart' ),
		'type'        => 'radio-buttonset',
		'choices'     => array(
			'show-thumbs'  => esc_attr__( 'No', 'woo-floating-cart' ),
			'hide-thumbs'	  => esc_attr__( 'Yes', 'woo-floating-cart' ),
		),
		'default'     => '0',
		'priority'    => 10,
		'transport'	  =>'postMessage',
		'js_vars' => array(
			array(
				'element'  => '.xt_woofc',
				'function' => 'class',
				'prefix' => 'xt_woofc-'
			)
		)
	));

	Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('cart_product_attributes_display'),
        'section'  	  => self::section_id('body'),
        'label'       => esc_html__( 'Product Attributes Display Type', 'woo-floating-cart' ),
        'type'        => 'radio-buttonset',
        'choices'     => array(
            'body'	  => esc_attr__( 'List', 'woo-floating-cart' ),
            'inline'  => esc_attr__( 'Inline', 'woo-floating-cart' )
        ),
        'default'     => 'body',
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('cart_product_show_attributes'),
                'operator' => '==',
                'value'    => '1',
            ),
        ),
        'transport'=>'postMessage',
        'js_vars' => array(
            array(
                'element'  => '.xt_woofc-variation',
                'function' => 'class',
                'prefix' => 'xt_woofc-variation-'
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('cart_product_attributes_hide_label'),
        'section'  => self::section_id('body'),
        'label'       => esc_html__( 'Hide attribute labels, show values only', 'woo-floating-cart' ),
        'type'        => 'radio-buttonset',
        'choices'     => array(
            '0'  => esc_attr__( 'No', 'woo-floating-cart' ),
            '1'	  => esc_attr__( 'Yes', 'woo-floating-cart' ),
        ),
        'default'     => '0',
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('cart_product_show_attributes'),
                'operator' => '==',
                'value'    => '1',
            ),
        ),
        'transport'=>'postMessage'
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('cart_product_attributes_color'),
        'section'  => self::section_id('body'),
        'label'    => esc_html__( 'Cart Product Attributes Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#666666',
        'transport'=>'auto',
        'output' => array(
            array(
                'element' => array('.xt_woofc-inner .xt_woofc-product-attributes dl'),
                'property' => 'color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('cart_product_show_attributes'),
                'operator' => '==',
                'value'    => '1',
            ),
        )
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('list_features'),
        'section'     => self::section_id('body'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/list.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}