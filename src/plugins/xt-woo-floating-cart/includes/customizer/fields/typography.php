<?php

if(self::$parent->fs()->can_use_premium_code__premium_only()) {

    $default_font = 'Source Sans Pro';

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_counter'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Product Counter Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '700',
            'font-size'      => '15px',
            'subsets'        => array( 'latin-ext' )
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-trigger .xt_woofc-count',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_header_title'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Header Title Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '700',
            'font-size'      => '16px',
            'letter-spacing' => '1.4px',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'uppercase'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-title',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_header_msg'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Header Message Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '700',
            'font-size'      => '10px',
            'letter-spacing' => '1.4',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'uppercase'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => array('.xt_woofc-inner .xt_woofc-undo', '.xt_woofc-inner .xt_woofc-coupon'),
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_header_error_msg'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Header Error Message Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '700',
            'font-size'      => '10px',
            'letter-spacing' => '1.4',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'uppercase'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-cart-error',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_header_no_products_msg'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'No Products Message Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => 'regular',
            'font-size'      => '12px',
            'letter-spacing' => '1.4',
            'text-align' 	 => 'left',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'none'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-empty .xt_woofc-inner .xt_woofc-no-product',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_product_title'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Product Title / Price Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '700',
            'font-size'      => '18px',
            'letter-spacing' => '0',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'capitalize'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => array('.xt_woofc-inner .xt_woofc-product-title','.xt_woofc-inner .xt_woofc-price'),
            ),
            array(
                'element' => array('.xt_woofc-inner .xt_woofc-product-title','.xt_woofc-inner .xt_woofc-price'),
                'media_query' => '@media (max-width: 479px)',
                'property' => 'font-size',
                'choice' => 'font-size',
                'value_pattern' => 'calc($ * 0.75)',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_product_attributes_labels'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Product Attributes Label Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '600',
            'font-size'      => '10px',
            'letter-spacing' => '0',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'capitalize'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => array(
                	'.xt_woofc-inner .xt_woofc-product-variations dl dt',
	                '.xt_woofc-inner .xt_woofc-product-attributes dl dt',
	                '.xt_woofc-inner .xt_woofc-sku dl dt'
                ),
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_product_attributes_values'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Product Attributes Values Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => 'regular',
            'font-size'      => '10px',
            'letter-spacing' => '0',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'capitalize'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => array(
                	'.xt_woofc-inner .xt_woofc-product-variations dl dd',
	                '.xt_woofc-inner .xt_woofc-product-attributes dl dd',
	                '.xt_woofc-inner .xt_woofc-sku dl dd'
                ),
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_product_action_link'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Product Remove Link Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => 'regular',
            'font-size'      => '14px',
            'letter-spacing' => '0',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'capitalize'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-actions',
            ),
            array(
                'element' => '.xt_woofc-inner .xt_woofc-actions',
                'media_query' => '@media (max-width: 479px)',
                'property' => 'font-size',
                'choice' => 'font-size',
                'value_pattern' => 'calc($ * 0.85)',
            ),
        )
    ));


    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_product_quantity_input'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Product Quantity Input Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => 'regular',
            'font-size'      => '14px',
            'letter-spacing' => '1.2px',
            'subsets'        => array( 'latin-ext' )
        ),
        'priority'    => 10,
        'transport'	  => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-quantity input',
            ),
            array(
                'element' => '.xt_woofc-inner .xt_woofc-quantity input',
                'media_query' => '@media (max-width: 479px)',
                'property' => 'font-size',
                'choice' => 'font-size',
                'value_pattern' => 'calc($ * 0.85)',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('typo_footer_checkout_button'),
        'section'     => self::section_id('typography'),
        'label'       => esc_attr__( 'Footer Checkout Button Typography', 'woo-floating-cart' ),
        'type'        => 'typography',
        'default'     => array(
            'font-family'    => $default_font,
            'variant'        => '600italic',
            'font-size'      => '24px',
            'letter-spacing' => '0',
            'subsets'        => array( 'latin-ext' ),
            'text-transform' => 'none'
        ),
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => array(
            array(
                'element' => '.xt_woofc-inner a.xt_woofc-checkout',
            ),
            array(
                'element' => '.xt_woofc-inner a.xt_woofc-checkout',
                'media_query' => '@media (max-width: 479px)',
                'property' => 'font-size',
                'choice' => 'font-size',
                'value_pattern' => 'calc($ * 0.75)',
            ),
        )
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('typography_features'),
        'section'     => self::section_id('typography'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/typography.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}