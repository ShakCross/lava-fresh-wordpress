<?php

Xirki::add_field(self::$config_id, array(
	'settings' => self::field_id('ajax_init'),
	'section' => self::section_id('general'),
	'label' => esc_html__('Force Ajax Initialization', 'woo-floating-cart'),
	'description' => esc_html__('Enable only if encountering caching issues / conflicts with your theme', 'woo-floating-cart'),
	'type'        => 'radio-buttonset',
	'choices'     => array(
		'0' => esc_html__('No', 'woo-floating-cart'),
		'1' => esc_html__('Yes', 'woo-floating-cart')
	),
	'default' => '0',
	'priority' => 10,
	'transport' => 'postMessage'
));

if(self::$parent->fs()->can_use_premium_code__premium_only()) {

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('position'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Trigger / Cart Position (Desktop)', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            'top-left' => esc_html__('Top Left', 'woo-floating-cart'),
            'top-right' => esc_html__('Top Right', 'woo-floating-cart'),
            'bottom-left' => esc_html__('Bottom Left', 'woo-floating-cart'),
            'bottom-right' => esc_html__('Bottom Right', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'class',
                'prefix' => 'xt_woofc-pos-',
                'media_query' => '@media (min-width: 769px)',
            ),
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-position',
                'media_query' => '@media (min-width: 769px)',
            )
        ),
        'default' => 'bottom-right'
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('position_tablet'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Trigger / Cart Position (Tablet)', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            'top-left' => esc_html__('Top Left', 'woo-floating-cart'),
            'top-right' => esc_html__('Top Right', 'woo-floating-cart'),
            'bottom-left' => esc_html__('Bottom Left', 'woo-floating-cart'),
            'bottom-right' => esc_html__('Bottom Right', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'class',
                'prefix' => 'xt_woofc-tablet-pos-',
                'media_query' => '@media (max-width: 768px)',
            ),
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-tablet_position',
                'media_query' => '@media (max-width: 768px)',
            )
        ),
        'default' => 'bottom-right'
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('position_mobile'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Trigger / Cart Position (Mobile)', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            'top-left' => esc_html__('Top Left', 'woo-floating-cart'),
            'top-right' => esc_html__('Top Right', 'woo-floating-cart'),
            'bottom-left' => esc_html__('Bottom Left', 'woo-floating-cart'),
            'bottom-right' => esc_html__('Bottom Right', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'class',
                'prefix' => 'xt_woofc-mobile-pos-',
                'media_query' => '@media (max-width: 480px)',
            ),
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-mobile_position',
                'media_query' => '@media (max-width: 480px)',
            )
        ),
        'default' => 'bottom-right'
    ));


    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('counter_position'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Product Counter Position (Desktop)', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            'top-left' => esc_html__('Top Left', 'woo-floating-cart'),
            'top-right' => esc_html__('Top Right', 'woo-floating-cart'),
            'bottom-left' => esc_html__('Bottom Left', 'woo-floating-cart'),
            'bottom-right' => esc_html__('Bottom Right', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'class',
                'prefix' => 'xt_woofc-counter-pos-',
                'media_query' => '@media (min-width: 769px)',
            )
        ),
        'default' => 'top-left'
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('counter_position_tablet'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Product Counter Position (Tablet)', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            'top-left' => esc_html__('Top Left', 'woo-floating-cart'),
            'top-right' => esc_html__('Top Right', 'woo-floating-cart'),
            'bottom-left' => esc_html__('Bottom Left', 'woo-floating-cart'),
            'bottom-right' => esc_html__('Bottom Right', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'class',
                'prefix' => 'xt_woofc-counter-tablet-pos-',
                'media_query' => '@media (max-width: 768px)',
            )
        ),
        'default' => 'top-left'
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('counter_position_mobile'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Product Counter Position (Mobile)', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            'top-left' => esc_html__('Top Left', 'woo-floating-cart'),
            'top-right' => esc_html__('Top Right', 'woo-floating-cart'),
            'bottom-left' => esc_html__('Bottom Left', 'woo-floating-cart'),
            'bottom-right' => esc_html__('Bottom Right', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'class',
                'prefix' => 'xt_woofc-counter-mobile-pos-',
                'media_query' => '@media (max-width: 480px)',
            )
        ),
        'default' => 'top-left'
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('trigger_size'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Trigger Size (Desktop)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '40',
            'max' => '100',
            'step' => '1',
        ),
        'default' => '72',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => array(
                    '.xt_woofc-is-desktop .xt_woofc-trigger',
                    '.xt_woofc-is-desktop .xt_woofc-inner .xt_woofc-wrapper'
                ),
                'property' => 'width',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop .xt_woofc-trigger',
                    '.xt_woofc-is-desktop .xt_woofc-inner .xt_woofc-wrapper',
                    '.xt_woofc-is-desktop .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-desktop .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon:before',
                    '.xt_woofc-is-desktop .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon:before'
                ),
                'property' => 'line-height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon:before',
                    '.xt_woofc-is-desktop .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon:before'
                ),
                'property' => 'font-size',
                'value_pattern' => 'calc($px * 0.55)'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop.xt_woofc-pos-bottom-left .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-desktop.xt_woofc-pos-top-left .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'margin-left',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop.xt_woofc-pos-bottom-right .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-desktop.xt_woofc-pos-top-right .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'margin-right',
                'value_pattern' => '$px'
            ),
	        array(
		        'element' => array(
			        '.xt_woofc-is-desktop .xt_woofc-inner .xt_woofc-body',
		        ),
		        'property' => 'height',
		        'value_pattern' => 'calc(100% - 40px - $px)'
	        )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('trigger_size_tablet'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Trigger Size (Tablet)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '40',
            'max' => '100',
            'step' => '1',
        ),
        'default' => '72',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => array(
                    '.xt_woofc-is-tablet .xt_woofc-trigger',
                    '.xt_woofc-is-tablet .xt_woofc-inner .xt_woofc-wrapper'
                ),
                'property' => 'width',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-tablet .xt_woofc-trigger',
                    '.xt_woofc-is-tablet .xt_woofc-inner .xt_woofc-wrapper',
                    '.xt_woofc-is-tablet .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-tablet .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-tablet .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon:before',
                    '.xt_woofc-is-tablet .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon:before'
                ),
                'property' => 'line-height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-tablet .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon:before',
                    '.xt_woofc-is-tablet .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon:before'
                ),
                'property' => 'font-size',
                'value_pattern' => 'calc($px * 0.55)'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-tablet.xt_woofc-tablet-pos-bottom-left .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-tablet.xt_woofc-tablet-pos-top-left .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'margin-left',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-tablet.xt_woofc-tablet-pos-bottom-right .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-tablet.xt_woofc-tablet-pos-top-right .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'margin-right',
                'value_pattern' => '$px'
            ),
	        array(
		        'element' => array(
			        '.xt_woofc-is-tablet .xt_woofc-inner .xt_woofc-body',
		        ),
		        'property' => 'height',
		        'value_pattern' => 'calc(100% - 40px - $px)'
	        )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('trigger_size_mobile'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Trigger Size (Mobile)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '40',
            'max' => '100',
            'step' => '1',
        ),
        'default' => '72',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => array(
                    '.xt_woofc-is-mobile .xt_woofc-trigger',
                    '.xt_woofc-is-mobile .xt_woofc-inner .xt_woofc-wrapper'
                ),
                'property' => 'width',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-mobile .xt_woofc-trigger',
                    '.xt_woofc-is-mobile .xt_woofc-inner .xt_woofc-wrapper',
                    '.xt_woofc-is-mobile .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-mobile .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-mobile .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon:before',
                    '.xt_woofc-is-mobile .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon:before'
                ),
                'property' => 'line-height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-mobile .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-close-icon:before',
                    '.xt_woofc-is-mobile .xt_woofc-trigger.xt_woofc-icontype-font .xt_woofc-trigger-cart-icon:before'
                ),
                'property' => 'font-size',
                'value_pattern' => 'calc($px * 0.55)'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-mobile.xt_woofc-mobile-pos-bottom-left .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-mobile.xt_woofc-mobile-pos-top-left .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'margin-left',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-mobile.xt_woofc-mobile-pos-bottom-right .xt_woofc-inner a.xt_woofc-checkout',
                    '.xt_woofc-is-mobile.xt_woofc-mobile-pos-top-right .xt_woofc-inner a.xt_woofc-checkout'
                ),
                'property' => 'margin-right',
                'value_pattern' => '$px'
            ),
	        array(
		        'element' => array(
			        '.xt_woofc-is-mobile .xt_woofc-inner .xt_woofc-body',
		        ),
		        'property' => 'height',
		        'value_pattern' => 'calc(100% - 40px - $px)'
	        )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('counter_size'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Product Counter Size (Desktop)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '20',
            'max' => '40',
            'step' => '1',
        ),
        'default' => '25',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(

            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-trigger .xt_woofc-count',
                'property' => 'width',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-trigger .xt_woofc-count',
                'property' => 'height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-trigger .xt_woofc-count-big',
                'property' => 'width',
                'value_pattern' => 'calc($px * 1.3)'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-trigger .xt_woofc-count-big',
                'property' => 'height',
                'value_pattern' => 'calc($px * 1.3)'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('counter_size_tablet'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Product Counter Size (Tablet)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '20',
            'max' => '40',
            'step' => '1',
        ),
        'default' => '25',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(

            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-trigger .xt_woofc-count',
                'property' => 'width',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-trigger .xt_woofc-count',
                'property' => 'height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-trigger .xt_woofc-count-big',
                'property' => 'width',
                'value_pattern' => 'calc($px * 1.3)'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-trigger .xt_woofc-count-big',
                'property' => 'height',
                'value_pattern' => 'calc($px * 1.3)'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('counter_size_mobile'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Product Counter Size (Mobile)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '20',
            'max' => '40',
            'step' => '1',
        ),
        'default' => '25',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(

            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-trigger .xt_woofc-count',
                'property' => 'width',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-trigger .xt_woofc-count',
                'property' => 'height',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-trigger .xt_woofc-count-big',
                'property' => 'width',
                'value_pattern' => 'calc($px * 1.3)'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-trigger .xt_woofc-count-big',
                'property' => 'height',
                'value_pattern' => 'calc($px * 1.3)'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('hoffset'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Horizontal Offset (Desktop)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '300',
            'step' => '1',
        ),
        'priority' => 10,
        'default' => '20',
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'margin-left',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'margin-right',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'max-width',
                'value_pattern' => 'calc(100vw - ($px * 2))'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('hoffset_tablet'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Horizontal Offset (Tablet)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '300',
            'step' => '1',
        ),
        'priority' => 10,
        'default' => '20',
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'margin-left',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'margin-right',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'max-width',
                'value_pattern' => 'calc(100vw - ($px * 2))'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('hoffset_mobile'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Horizontal Offset (Mobile)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '300',
            'step' => '1',
        ),
        'priority' => 10,
        'default' => '20',
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'margin-left',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'margin-right',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'max-width',
                'value_pattern' => 'calc(100vw - ($px * 2))'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('voffset'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Vertical Offset (Desktop)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '300',
            'step' => '1',
        ),
        'default' => '20',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'margin-top',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'margin-bottom',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - ($px * 2))'
            ),
            array(
                'element' => '.admin-bar .xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - (($px * 2)) - 46px)'
            ),
            array(
                'element' => '.admin-bar .xt_woofc-is-desktop .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - (($px * 2)) - 32px)',
                'media_query' => '@media (min-width: 783px)',
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('voffset_tablet'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Vertical Offset (Tablet)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '300',
            'step' => '1',
        ),
        'default' => '20',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'margin-top',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'margin-bottom',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - ($px * 2))'
            ),
            array(
                'element' => '.admin-bar .xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - (($px * 2)) - 46px)'
            ),
            array(
                'element' => '.admin-bar .xt_woofc-is-tablet .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - (($px * 2)) - 32px)',
                'media_query' => '@media (min-width: 783px)',
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('voffset_mobile'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Vertical Offset (Mobile)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '300',
            'step' => '1',
        ),
        'default' => '20',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'margin-top',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'margin-bottom',
                'value_pattern' => '$px!important'
            ),
            array(
                'element' => '.xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - ($px * 2))'
            ),
            array(
                'element' => '.admin-bar .xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - (($px * 2)) - 46px)'
            ),
            array(
                'element' => '.admin-bar .xt_woofc-is-mobile .xt_woofc-inner',
                'property' => 'max-height',
                'value_pattern' => 'calc(100vh - (($px * 2)) - 32px)',
                'media_query' => '@media (min-width: 783px)',
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('cart_width'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Cart Width', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '340',
            'max' => '1000',
            'step' => '5',
        ),
        'default' => '440',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-inner',
                'property' => 'width',
                'value_pattern' => '$px'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('cart_height'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Cart Height', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '240',
            'max' => '1000',
            'step' => '5',
        ),
        'default' => '400',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-inner',
                'property' => 'height',
                'value_pattern' => '$px'
            )
        )
    ));


    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('border_radius'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Border Radius', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '35',
            'step' => '1',
        ),
        'default' => '6',
        'priority' => 10,
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-inner .xt_woofc-header',
                'property' => 'border-radius',
                'value_pattern' => '$px $px 0 0'
            ),
            array(
                'element' => '.xt_woofc-inner .xt_woofc-wrapper, .xt_woofc-trigger',
                'property' => 'border-radius',
                'value_pattern' => '$px'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop.xt_woofc-cart-open.xt_woofc-pos-top-right .xt_woofc-trigger',
                    '.xt_woofc-is-desktop.xt_woofc-cart-open.xt_woofc-pos-bottom-right .xt_woofc-trigger',

                    '.xt_woofc-is-tablet.xt_woofc-cart-open.xt_woofc-tablet-pos-top-right .xt_woofc-trigger',
                    '.xt_woofc-is-tablet.xt_woofc-cart-open.xt_woofc-tablet-pos-bottom-right .xt_woofc-trigger',

                    '.xt_woofc-is-mobile.xt_woofc-cart-open.xt_woofc-mobile-pos-top-right .xt_woofc-trigger',
                    '.xt_woofc-is-mobile.xt_woofc-cart-open.xt_woofc-mobile-pos-bottom-right .xt_woofc-trigger'
                ),
                'property' => 'border-radius',
                'value_pattern' => '0 0 $px 0'
            ),
            array(
                'element' => array(
                    '.xt_woofc-is-desktop.xt_woofc-cart-open.xt_woofc-pos-top-left .xt_woofc-trigger',
                    '.xt_woofc-is-desktop.xt_woofc-cart-open.xt_woofc-pos-bottom-left .xt_woofc-trigger',

                    '.xt_woofc-is-tablet.xt_woofc-cart-open.xt_woofc-tablet-pos-top-left .xt_woofc-trigger',
                    '.xt_woofc-is-tablet.xt_woofc-cart-open.xt_woofc-tablet-pos-bottom-left .xt_woofc-trigger',

                    '.xt_woofc-is-mobile.xt_woofc-cart-open.xt_woofc-mobile-pos-top-left .xt_woofc-trigger',
                    '.xt_woofc-is-mobile.xt_woofc-cart-open.xt_woofc-mobile-pos-bottom-left .xt_woofc-trigger'
                ),
                'property' => 'border-radius',
                'value_pattern' => '0 0 0 $px'
            ),
            array(
                'element' => '.xt_woofc-inner .xt_woofc-footer',
                'property' => 'border-radius',
                'value_pattern' => '$px'
            ),
            array(
                'element' => '.xt_woofc-cart-open .xt_woofc-inner .xt_woofc-footer',
                'property' => 'border-radius',
                'value_pattern' => '0 0 $px $px'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('flytocart_animation'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Enable Fly To Cart animation', 'woo-floating-cart'),
        'type' => 'toggle',
        'default' => '1',
        'priority' => 10
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('flytocart_animation_duration'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Fly To Cart animation Duration (ms)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '300',
            'max' => '2000',
            'step' => '10',
        ),
        'priority' => 10,
        'default' => 650,
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-flyduration'
            )
        ),
        'active_callback'    => array(
	        array(
		        'setting'  => self::field_id('flytocart_animation'),
		        'operator' => '==',
		        'value'    => '1',
	        ),
        )
    ));

	Xirki::add_field(self::$config_id, array(
		'settings' => self::field_id('active_cart_body_lock_scroll'),
		'section' => self::section_id('general'),
		'label' => esc_html__('Lock Scroll when Active', 'woo-floating-cart'),
		'description' => esc_html__('When the floating cart is open, lock main site body scroll', 'woo-floating-cart'),
		'type' => 'toggle',
		'default' => '1',
		'priority' => 10
	));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('shake_trigger'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Shake Trigger after adding products', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            '' => esc_html__('No Shake', 'woo-floating-cart'),
            'horizontal' => esc_html__('Horizontal Shake', 'woo-floating-cart'),
            'vertical' => esc_html__('Vertical Shake', 'woo-floating-cart'),
        ),
        'default' => 'vertical',
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-shaketrigger'
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('open_cart_on_product_add'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Open cart after adding products', 'woo-floating-cart'),
        'type'        => 'radio-buttonset',
        'choices' => array(
            '0' => esc_html__('No', 'woo-floating-cart'),
            '1' => esc_html__('Yes', 'woo-floating-cart')
        ),
        'default' => '0',
        'priority' => 10,
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-opencart-onadd'
            )
        )
    ));

	Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('loading_spinner'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Loading Spinner', 'woo-floating-cart'),
        'type' => 'radio',
        'priority' => 10,
        'choices' => array(
            '0' => esc_html__('No Spinner', 'woo-floating-cart'),
            '1-rotating-plane' => esc_html__('Rotating Plane', 'woo-floating-cart'),
            '2-double-bounce' => esc_html__('Double Bounce', 'woo-floating-cart'),
            '3-wave' => esc_html__('Wave', 'woo-floating-cart'),
            '4-wandering-cubes' => esc_html__('Wandering Cubes', 'woo-floating-cart'),
            '5-pulse' => esc_html__('Pulse', 'woo-floating-cart'),
            '6-chasing-dots' => esc_html__('Chasing Dots', 'woo-floating-cart'),
            '7-three-bounce' => esc_html__('Three Bounce', 'woo-floating-cart'),
            '8-circle' => esc_html__('Circle', 'woo-floating-cart'),
            '9-cube-grid' => esc_html__('Cube Grid', 'woo-floating-cart'),
            '10-fading-circle' => esc_html__('Fading Circle', 'woo-floating-cart'),
            '11-folding-cube' => esc_html__('Folding Cube', 'woo-floating-cart'),
            'loading-text' => esc_html__('Boring Loading Text', 'woo-floating-cart')
        ),
        'transport' => 'postMessage',
        'default' => '7-three-bounce'
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('loading_spinner_color'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Loading Spinner Color', 'woo-floating-cart'),
        'type' => 'color',
        'priority' => 10,
        'default' => '#2c97de',
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => array(
                    '.xt_woofc-spinner-rotating-plane',
                    '.xt_woofc-spinner-double-bounce .xt_woofc-spinner-child',
                    '.xt_woofc-spinner-wave .xt_woofc-spinner-rect',
                    '.xt_woofc-spinner-wandering-cubes .xt_woofc-spinner-cube',
                    '.xt_woofc-spinner-spinner-pulse',
                    '.xt_woofc-spinner-chasing-dots .xt_woofc-spinner-child',
                    '.xt_woofc-spinner-three-bounce .xt_woofc-spinner-child',
                    '.xt_woofc-spinner-circle .xt_woofc-spinner-child:before',
                    '.xt_woofc-spinner-cube-grid .xt_woofc-spinner-cube',
                    '.xt_woofc-spinner-fading-circle .xt_woofc-spinner-circle:before',
                    '.xt_woofc-spinner-folding-cube .xt_woofc-spinner-cube:before',
                ),
                'property' => 'background-color',
            ),
            array(
                'element' => '.xt_woofc-spinner-loading-text',
                'property' => 'color',
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('loading_overlay_color'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Loading Overlay Color', 'woo-floating-cart'),
        'type' => 'color',
        'priority' => 10,
        'default' => 'rgba(255,255,255,0.5)',
        'transport' => 'auto',
        'output' => array(
            array(
                'element' => '.xt_woofc-spinner-wrap',
                'property' => 'background-color',
            )
        )
    ));

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('loading_timeout'),
        'section' => self::section_id('general'),
        'label' => esc_html__('Loading Spinner Extra Delay (ms)', 'woo-floating-cart'),
        'type' => 'slider',
        'choices' => array(
            'min' => '0',
            'max' => '2000',
            'step' => '10',
        ),
        'priority' => 10,
        'default' => 300,
        'transport' => 'postMessage',
        'js_vars' => array(
            array(
                'element' => '.xt_woofc',
                'function' => 'html',
                'attr' => 'data-loadingtimeout'
            )
        )
    ));

}else{

    Xirki::add_field(self::$config_id, array(
        'settings' => self::field_id('general_features'),
        'section' => self::section_id('general'),
        'type'  => 'xt-premium',
        'default' => array(
            'type' => 'image',
            'value' => self::$parent->plugin_url(). 'includes/customizer/assets/images/general.png',
            'link' => self::$parent->fs()->get_upgrade_url()
        )
    ));
}