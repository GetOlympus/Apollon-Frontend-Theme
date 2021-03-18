<?php

/**
 * Homepage options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.layout.homepage.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        'homepage-posttypes' => [
            'label'      => __('apollon.cz.layout.default.posttypes.title', OL_APOLLON_DICTIONARY),
            'priority'   => ++$priority,
            'type'       => 'apollon-multicheck',
            '_classname' => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
            'choices'    => $this->contents['posttypes'],
            'settings'   => [
                [
                    'default'           => apollonGetDefault('homepage-posttypes'),
                    'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                ],
            ],
        ],
        'homepage-container' => [
            'label'    => __('apollon.cz.layout.default.container.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('homepage-container'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ],
            ],
        ],
        'homepage-content' => [
            'label'    => __('apollon.cz.layout.default.content.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                '2-5'    => __('apollon._.2-5', OL_APOLLON_DICTIONARY),
                '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                '3-5'    => __('apollon._.3-5', OL_APOLLON_DICTIONARY),
                '2-3'    => __('apollon._.2-3', OL_APOLLON_DICTIONARY),
                '3-4'    => __('apollon._.3-4', OL_APOLLON_DICTIONARY),
                '4-5'    => __('apollon._.4-5', OL_APOLLON_DICTIONARY),
                '5-6'    => __('apollon._.5-6', OL_APOLLON_DICTIONARY),
                '1-1'    => __('apollon._.1-1', OL_APOLLON_DICTIONARY),
                'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('homepage-content'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ],
            ],
        ],
        'homepage-gridgap' => [
            'label'    => __('apollon.cz.layout.default.gridgap.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('homepage-gridgap'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ],
            ],
        ],
        'homepage-columns' => [
            'label'       => __('apollon.cz.layout.default.columns.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'max'         => 5,
                'min'         => 1,
                'step'        => 1,
                'placeholder' => apollonGetDefault('homepage-columns'),
            ],
            'settings'    => [
                [
                    'default'           => apollonGetDefault('homepage-columns'),
                    'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                ],
            ],
        ],
        'homepage-sidebarpos' => [
            'label'    => __('apollon.cz.layout.default.sidebarpos.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'radio',
            'choices'  => [
                'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('homepage-sidebarpos'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ],
            ],
        ],
        'homepage-sidebar1' => [
            'label'    => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
            'settings' => [
                [
                    'default'           => apollonGetDefault('homepage-sidebar1'),
                    'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                ],
            ],
        ],
        'homepage-sidebar2' => [
            'label'    => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
            'settings' => [
                [
                    'default'           => apollonGetDefault('homepage-sidebar2'),
                    'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                ],
            ],
        ],
    ],
];
