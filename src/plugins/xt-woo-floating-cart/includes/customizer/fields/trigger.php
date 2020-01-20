<?php

if(self::$parent->fs()->can_use_premium_code__premium_only()) {

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('trigger_event_type'),
        'section'     => self::section_id('trigger'),
        'label'       => esc_html__( 'Trigger Event Type', 'woo-floating-cart' ),
        'type'        => 'radio-buttonset',
        'choices'     => array(
            'vclick'	  => esc_attr__( 'Click Only', 'woo-floating-cart' ),
            'mouseenter'  => esc_attr__( 'Mouse Over Or Click', 'woo-floating-cart' )
        ),
        'default'     => 'vclick',
        'priority'    => 10
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('trigger_hover_delay'),
        'section'     => self::section_id('trigger'),
        'label'       => esc_html__( 'Mouse Over delay before trigger (ms)', 'woo-floating-cart' ),
        'type'        => 'slider',
        'choices'     => array(
            'min'  => '0',
            'max'  => '1500',
            'step' => '10',
        ),
        'priority'    	=> 10,
        'default'	  	=> 200,
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_event_type'),
                'operator' => '==',
                'value'    => 'mouseenter',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('trigger_hide_view_cart'),
        'section'     => self::section_id('trigger'),
        'label'       => esc_html__( 'Hide WooCommerce View Cart Link after trigger', 'woo-floating-cart' ),
        'type'        => 'toggle',
        'default'     => '0',
        'priority'    => 10
    ));

    Xirki::add_field( self::$config_id, array(
        'settings'    => self::field_id('trigger_icon_type'),
        'section'     => self::section_id('trigger'),
        'label'       => esc_html__( 'Trigger Icon Type', 'woo-floating-cart' ),
        'type'        => 'radio-buttonset',
        'choices'     => array(
            'image' => esc_attr__( 'Image / SVG', 'woo-floating-cart' ),
            'font' 	=> esc_attr__( 'Font Icon', 'woo-floating-cart' )
        ),
        'default'     => 'image',
        'priority'    => 10,
        'js_vars' => array(
            array(
                'element'  => '.xt_woofc-trigger',
                'function' =>'class',
                'prefix'   => 'xt_woofc-icontype-'
            )
        ),

    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_icon'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Icon', 'woo-floating-cart' ),
        'type'     => 'woofcicons',
        'choices'  => array('types' => array('cart')),
        'priority' => 10,
        'default'  => 'xt_woofcicon-groceries-store',
        'transport'=>'postMessage',
        'js_vars' => array(
            array(
                'element'  => '.xt_woofc-trigger-cart-icon',
                'function' =>'class'
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_icon_type'),
                'operator' => '==',
                'value'    => 'font',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_close_icon'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Close Icon', 'woo-floating-cart' ),
        'type'     => 'woofcicons',
        'choices'  => array('types' => array('close')),
        'priority' => 10,
        'default'  => 'xt_woofcicon-close-2',
        'transport'=>'postMessage',
        'js_vars' => array(
            array(
                'element'  => '.xt_woofc-trigger-close-icon',
                'function' =>'class'
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_icon_type'),
                'operator' => '==',
                'value'    => 'font',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' 		=> self::field_id('cart_trigger_icon_image'),
        'section'     	=> self::section_id('trigger'),
        'label'    		=> esc_html__( 'Cart Trigger Icon Image', 'woo-floating-cart' ),
        'type'        	=> 'image',
        'default'  		=> self::$parent->plugin_url('public/assets/img', 'open.svg'),
        'priority'    	=> 10,
        'transport'	 	=>'auto',
        'output' 		=> array(
            array(
                'element'  => '.xt_woofc-trigger.xt_woofc-icontype-image .xt_woofc-trigger-cart-icon',
                'property' => 'background-image',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_icon_type'),
                'operator' => '==',
                'value'    => 'image',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' 		=> self::field_id('cart_trigger_close_icon_image'),
        'section'     	=> self::section_id('trigger'),
        'label'    		=> esc_html__( 'Cart Trigger Close Icon Image', 'woo-floating-cart' ),
        'type'        	=> 'image',
        'default'  		=> self::$parent->plugin_url('public/assets/img', 'close.svg'),
        'priority'    	=> 10,
        'transport'	 	=>'auto',
        'output' 		=> array(
            array(
                'element'  => '.xt_woofc-trigger.xt_woofc-icontype-image .xt_woofc-trigger-close-icon',
                'property' => 'background-image',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_icon_type'),
                'operator' => '==',
                'value'    => 'image',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_icon_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Icon Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#000000',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon::before',
                'property' => 'color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_icon_type'),
                'operator' => '==',
                'value'    => 'font',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_close_icon_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Close Icon Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#000000',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon::before',
                'property' => 'color',
            )
        ),
        'active_callback'    => array(
            array(
                'setting'  => self::field_id('trigger_icon_type'),
                'operator' => '==',
                'value'    => 'font',
            ),
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_bg_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-trigger',
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_bg_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-trigger',
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_hover_bg_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Hover Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => array('.xt_woofc-no-touchevents .xt_woofc:not(.xt_woofc-cart-open) .xt_woofc-trigger:hover', '.xt_woofc-touchevents .xt_woofc:not(.xt_woofc-cart-open) .xt_woofc-trigger:focus'),
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('cart_trigger_active_bg_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Cart Trigger Active Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#ffffff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-cart-open .xt_woofc-trigger',
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('counter_bg_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Product Counter Bg Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#e94b35',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-trigger .xt_woofc-count',
                'property' => 'background',
            )
        )
    ));

    Xirki::add_field( self::$config_id, array(
        'settings' => self::field_id('counter_text_color'),
        'section'  => self::section_id('trigger'),
        'label'    => esc_html__( 'Product Counter Text Color', 'woo-floating-cart' ),
        'type'     => 'color',
        'priority' => 10,
        'default'  => '#fff',
        'transport'=>'auto',
        'output' => array(
            array(
                'element'  => '.xt_woofc-trigger .xt_woofc-count',
                'property' => 'color',
            )
        )
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('trigger_features'),
        'section'     => self::section_id('trigger'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/trigger.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}