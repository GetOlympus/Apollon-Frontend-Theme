<?php

/**
 * Buttons options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// BUTTONS
    $slug.'-buttons' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.buttons.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// BORDERS
    $slug.'-borders' => [
        'title'       => __('apollon.cz.design.borders.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'controls'    => [
            'global-border' => [
                'label'       => __('apollon.cz.design.global.border.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-border'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-border'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-border-radius' => [
                'label'       => __('apollon.cz.design.global.border-radius.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-border-radius'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-border-radius'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-border-width' => [
                'label'       => __('apollon.cz.design.global.border-width.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-border-width'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-border-width'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],

// BOX-SHADOWS
    $slug.'-boxshadows' => [
        'title'       => __('apollon.cz.design.boxshadows.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'controls'    => [
            'global-small-box-shadow' => [
                'label'       => __('apollon.cz.design.global.small-box-shadow.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-small-box-shadow'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-small-box-shadow'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-medium-box-shadow' => [
                'label'       => __('apollon.cz.design.global.medium-box-shadow.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-medium-box-shadow'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-medium-box-shadow'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-large-box-shadow' => [
                'label'       => __('apollon.cz.design.global.large-box-shadow.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-large-box-shadow'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-large-box-shadow'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-xlarge-box-shadow' => [
                'label'       => __('apollon.cz.design.global.xlarge-box-shadow.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-xlarge-box-shadow'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-xlarge-box-shadow'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],

// CONTROLS
    $slug.'-controls' => [
        'title'       => __('apollon.cz.design.controls.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'controls'    => [
            'global-control-height' => [
                'label'       => __('apollon.cz.design.global.control-height.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-control-height'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-control-height'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-control-small-height' => [
                'label'       => __('apollon.cz.design.global.control-small-height.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-control-small-height'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-control-small-height'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-control-large-height' => [
                'label'       => __('apollon.cz.design.global.control-large-height.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-control-large-height'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-control-large-height'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],
];
