<?php

/**
 * Foundations options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// FOUNDATIONS
    $slug.'-foundations' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.foundations.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// TYPOGRAPHY
    $slug.'-typography' => [
        'title'    => __('apollon.cz.design.typography.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            $slug.'-globals-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.global', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'global-font-family' => [
                'label'    => __('apollon.cz.design.global.font-family.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-font-family'),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('global-font-family'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-font-size' => [
                'label'       => __('apollon.cz.design.global.font-size.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-font-size'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-font-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-line-height' => [
                'label'       => __('apollon.cz.design.global.line-height.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-line-height'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-line-height'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-small-font-size' => [
                'label'       => __('apollon.cz.design.global.small-font-size.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-small-font-size'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-small-font-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-medium-font-size' => [
                'label'       => __('apollon.cz.design.global.medium-font-size.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-medium-font-size'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-medium-font-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-large-font-size' => [
                'label'       => __('apollon.cz.design.global.large-font-size.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-large-font-size'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-large-font-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-xlarge-font-size' => [
                'label'       => __('apollon.cz.design.global.xlarge-font-size.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-xlarge-font-size'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-xlarge-font-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-2xlarge-font-size' => [
                'label'       => __('apollon.cz.design.global.2xlarge-font-size.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-2xlarge-font-size'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-2xlarge-font-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],

            $slug.'-headings-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.design.heading.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'heading-font-family' => [
                'label'       => __('apollon.cz.design.heading.font-family.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('heading-font-family'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('heading-font-family'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'heading-font-weight' => [
                'label'       => __('apollon.cz.design.heading.font-weight.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('heading-font-weight'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('heading-font-weight'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'heading-font-style' => [
                'label'    => __('apollon.cz.design.heading.font-style.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'inherit' => __('apollon._.inherit', OL_APOLLON_DICTIONARY),
                    'initial' => __('apollon._.initial', OL_APOLLON_DICTIONARY),
                    'italic'  => __('apollon._.italic', OL_APOLLON_DICTIONARY),
                    'normal'  => __('apollon._.normal', OL_APOLLON_DICTIONARY),
                    'oblique' => __('apollon._.oblique', OL_APOLLON_DICTIONARY),
                    'revert'  => __('apollon._.revert', OL_APOLLON_DICTIONARY),
                    'unset'   => __('apollon._.unset', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('heading-font-style'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'heading-letter-spacing' => [
                'label'       => __('apollon.cz.design.heading.letter-spacing.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('heading-letter-spacing'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('heading-letter-spacing'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'heading-text-transform' => [
                'label'    => __('apollon.cz.design.heading.text-transform.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'capitalize' => __('apollon._.capitalize', OL_APOLLON_DICTIONARY),
                    'inherit'    => __('apollon._.inherit', OL_APOLLON_DICTIONARY),
                    'initial'    => __('apollon._.initial', OL_APOLLON_DICTIONARY),
                    'lowercase'  => __('apollon._.lowercase', OL_APOLLON_DICTIONARY),
                    'none'       => __('apollon._.none', OL_APOLLON_DICTIONARY),
                    'revert'     => __('apollon._.revert', OL_APOLLON_DICTIONARY),
                    'unset'      => __('apollon._.unset', OL_APOLLON_DICTIONARY),
                    'uppercase'  => __('apollon._.uppercase', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('heading-text-transform'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ],

// COLORS
    $slug.'-colors' => [
        'title'    => __('apollon.cz.design.colors.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'global-color' => [
                'label'       => __('apollon.cz.design.global.color.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-color'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-color'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-emphasis-color' => [
                'label'       => __('apollon.cz.design.global.emphasis-color.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-emphasis-color'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-emphasis-color'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-muted-color' => [
                'label'       => __('apollon.cz.design.global.muted-color.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-muted-color'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-muted-color'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-link-color' => [
                'label'       => __('apollon.cz.design.global.link-color.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-link-color'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-link-color'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-link-hover-color' => [
                'label'       => __('apollon.cz.design.global.link-hover-color.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-link-hover-color'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-link-hover-color'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-inverse-color' => [
                'label'       => __('apollon.cz.design.global.inverse-color.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-inverse-color'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-inverse-color'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
        ],
    ],

// BACKGROUNDS
    $slug.'-backgrounds' => [
        'title'       => __('apollon.cz.design.backgrounds.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'controls'    => [
            'global-background' => [
                'label'       => __('apollon.cz.design.global.background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-muted-background' => [
                'label'       => __('apollon.cz.design.global.muted-background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-muted-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-muted-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-primary-background' => [
                'label'       => __('apollon.cz.design.global.primary-background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-primary-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-primary-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-secondary-background' => [
                'label'       => __('apollon.cz.design.global.secondary-background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-secondary-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-secondary-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-success-background' => [
                'label'       => __('apollon.cz.design.global.success-background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-success-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-success-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-warning-background' => [
                'label'       => __('apollon.cz.design.global.warning-background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-warning-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-warning-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
            'global-danger-background' => [
                'label'       => __('apollon.cz.design.global.danger-background.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'color',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-danger-background'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-danger-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                    ],
                ],
            ],
        ],
    ],
];
