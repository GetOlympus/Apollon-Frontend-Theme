<?php

/**
 * Navbars options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.design.navbars.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        // Default
        $slug.'-navbars-default-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'navbar-nav-item-font-size' => [
            'label'       => __('apollon.cz.design.global.navbar-font-size.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
        ],
        'navbar-nav-item-height' => [
            'label'       => __('apollon.cz.design.global.navbar-height.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'placeholder' => apollonGetDefault('navbar-nav-item-height'),
            ],
        ],

        // Small
        $slug.'-navbars-small-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'navbar-nav-item-small-font-size' => [
            'label'       => __('apollon.cz.design.global.navbar-font-size.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
        ],
        'navbar-nav-item-small-height' => [
            'label'       => __('apollon.cz.design.global.navbar-height.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'placeholder' => apollonGetDefault('navbar-nav-item-height'),
            ],
        ],

        // Large
        $slug.'-navbars-large-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'navbar-nav-item-large-font-size' => [
            'label'       => __('apollon.cz.design.global.navbar-font-size.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
        ],
        'navbar-nav-item-large-height' => [
            'label'       => __('apollon.cz.design.global.navbar-height.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'placeholder' => apollonGetDefault('navbar-nav-item-height'),
            ],
        ],
    ],
];
