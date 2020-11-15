<?php

/**
 * General customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$priority = 300;

return [
    'general-gl' => [
        'title'       => __('apollon.ct.general.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,

        'sections'    => [

// STYLESHEET
            'gl-stylesheet' => [
                'title'       => __('apollon.ct.general.stylesheet.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'css_location' => [
                        'label'       => __('apollon.ct.general.stylesheet.location.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'radio',
                        'choices'     => [
                            'inline' => __('apollon.ct.general.stylesheet.location.inline', OL_APOLLON_DICTIONARY),
                            'css'    => __('apollon.ct.general.stylesheet.location.css', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('css_location'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ],
                        ],
                    ],
                ],
            ],

// OPENGRAPH PROTOCOL
            'gl-opengraph' => [
                'title'       => __('apollon.ct.general.opengraph.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.general.opengraph.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'og_enable' => [
                        'label'       => __('apollon.ct.general.opengraph.enable.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.opengraph.enable.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('og_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'og_twitter' => [
                        'label'       => __('apollon.ct.general.opengraph.twitter.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __('apollon.ct.general.opengraph.twitter.placeholder', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('og_twitter'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNoHtml'],
                            ]
                        ],
                    ],
                    'og_facebook' => [
                        'label'       => __('apollon.ct.general.opengraph.facebook.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __('apollon.ct.general.opengraph.facebook.placeholder', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('og_facebook'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNoHtml'],
                            ]
                        ],
                    ],
                    'og_facebookapp' => [
                        'label'       => __('apollon.ct.general.opengraph.facebookapp.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __('apollon.ct.general.opengraph.facebookapp.placeholder', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('og_facebookapp'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNoHtml'],
                            ]
                        ],
                    ],
                ],
            ],

// DESIGN SYSTEM
            'gl-design_system' => array_merge($this->contents['section_title'], [
                'title'             => __('apollon.ct.general.designsystem.title', OL_APOLLON_DICTIONARY),
                'description'       => __('apollon.ct.general.designsystem.desc', OL_APOLLON_DICTIONARY),
                'priority'          => ++$priority,
            ]),

// COLOR
            'gl-color' => [
                'title'       => __('apollon.ct.general.color.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.general.color.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
    // PRIMARY
                    'main_header' => array_merge($this->contents['control_title'], [
                        'label'       => __('apollon.ct.general.color.main.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.main.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),

                    'color_primary' => [
                        'label'       => __('apollon.ct.general.color.main.primary.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.main.primary.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_primary'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_neutral' => [
                        'label'       => __('apollon.ct.general.color.main.neutral.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.main.neutral.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_neutral'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_background' => [
                        'label'       => __('apollon.ct.general.color.main.background.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.main.background.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

    // SECONDARY
                    'secondary_header' => array_merge($this->contents['control_title'], [
                        'label'       => __('apollon.ct.general.color.secondary.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),

                    'color_red' => [
                        'label'       => __('apollon.ct.general.color.secondary.red.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.red.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_red'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_yellow' => [
                        'label'       => __('apollon.ct.general.color.secondary.yellow.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.yellow.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_yellow'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_green' => [
                        'label'       => __('apollon.ct.general.color.secondary.green.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.green.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_green'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_blue' => [
                        'label'       => __('apollon.ct.general.color.secondary.blue.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.blue.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_blue'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_teal' => [
                        'label'       => __('apollon.ct.general.color.secondary.teal.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.teal.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_teal'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_purple' => [
                        'label'       => __('apollon.ct.general.color.secondary.purple.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.secondary.purple.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_purple'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

    // EXTENDED
                    'extended_header' => array_merge($this->contents['control_title'], [
                        'label'       => __('apollon.ct.general.color.extended.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.color.extended.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),

                    'neutral_palette' => array_merge($this->contents['control_subtitle'], [
                        'label'       => __('apollon.ct.general.color.extended.neutral.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),
                    'color_darkneutral_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.darkneutral.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_darkneutral_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_darkneutral_light' => [
                        'label'       => __('apollon.ct.general.color.extended.darkneutral.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_darkneutral_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_midneutral_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.midneutral.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_midneutral_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_midneutral_light' => [
                        'label'       => __('apollon.ct.general.color.extended.midneutral.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_midneutral_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_lightneutral_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.lightneutral.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_lightneutral_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_lightneutral_light' => [
                        'label'       => __('apollon.ct.general.color.extended.lightneutral.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_lightneutral_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

                    'secondary_palette' => array_merge($this->contents['control_subtitle'], [
                        'label'       => __('apollon.ct.general.color.extended.secondary.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),
                    'color_red_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.red.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_red_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_red_light' => [
                        'label'       => __('apollon.ct.general.color.extended.red.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_red_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

                    'color_yellow_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.yellow.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_yellow_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_yellow_light' => [
                        'label'       => __('apollon.ct.general.color.extended.yellow.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_yellow_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

                    'color_green_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.green.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_green_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_green_light' => [
                        'label'       => __('apollon.ct.general.color.extended.green.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_green_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

                    'color_blue_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.blue.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_blue_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_blue_light' => [
                        'label'       => __('apollon.ct.general.color.extended.blue.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_blue_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

                    'color_teal_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.teal.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_teal_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_teal_light' => [
                        'label'       => __('apollon.ct.general.color.extended.teal.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_teal_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],

                    'color_purple_dark' => [
                        'label'       => __('apollon.ct.general.color.extended.purple.dark.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_purple_dark'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                    'color_purple_light' => [
                        'label'       => __('apollon.ct.general.color.extended.purple.light.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('color_purple_light'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ],
                        ],
                    ],
                ],
            ],

// GRID
            'gl-grid' => [
                'title'       => __('apollon.ct.general.grid.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.general.grid.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'grid_container' => [
                        'label'       => __('apollon.ct.general.grid.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.grid.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall'  => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium'  => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge'  => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand'  => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('grid_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'grid_columngap' => [
                        'label'       => __('apollon.ct.general.grid.columngap.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.grid.columngap.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('grid_columngap'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'grid_rowgap' => [
                        'label'       => __('apollon.ct.general.grid.rowgap.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.grid.rowgap.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('grid_rowgap'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'grid_divider' => [
                        'label'       => __('apollon.ct.general.grid.divider.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.grid.divider.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('grid_divider'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'grid_matchheight' => [
                        'label'       => __('apollon.ct.general.grid.matchheight.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.grid.matchheight.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('grid_matchheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// LOGOS
            'gl-logos' => [
                'title'       => __('apollon.ct.general.logos.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.general.logos.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'logos_default' => [
                        'label'       => __('apollon.ct.general.logos.default.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'image',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('logos_default'),
                                'sanitize_callback' => [$this, 'zeusSanitizeImage'],
                            ]
                        ],
                    ],
                    'logos_retina' => [
                        'label'       => __('apollon.ct.general.logos.retina.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'image',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('logos_retina'),
                                'sanitize_callback' => [$this, 'zeusSanitizeImage'],
                            ]
                        ],
                    ],
                    'logos_maxwidth' => [
                        'label'       => __('apollon.ct.general.logos.maxwidth.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.logos.maxwidth.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 10,
                            'max'  => 800,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('logos_maxwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ]
                        ],
                    ],
                    'logos_maxheight' => [
                        'label'       => __('apollon.ct.general.logos.maxheight.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.logos.maxheight.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'min'  => 0,
                            'max'  => 800,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('logos_maxheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ]
                        ],
                    ],
                    'logos_slogan' => [
                        'label'       => __('apollon.ct.general.logos.slogan.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.logos.slogan.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('logos_slogan'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// TYPOGRAPHY
            'gl-typography' => [
                'title'       => __('apollon.ct.general.typography.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.general.typography.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
    // FONTS
                    'fontstacks_header' => array_merge($this->contents['control_title'], [
                        'label'       => __('apollon.ct.general.typography.fontstacks.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.typography.fontstacks.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),

                    'typo_mainfont' => [
                        'label'       => __('apollon.ct.general.typography.fontstacks.mainfont.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.typography.fontstacks.mainfont.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_mainfont'),
                                'sanitize_callback' => [$this, 'zeusSanitizeText'],
                            ],
                        ],
                    ],
                    'typo_secondaryfont' => [
                        'label'       => __('apollon.ct.general.typography.fontstacks.secondaryfont.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.typography.fontstacks.secondaryfont.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_secondaryfont'),
                                'sanitize_callback' => [$this, 'zeusSanitizeText'],
                            ],
                        ],
                    ],
                    'typo_alternativefont' => [
                        'label'       => __('apollon.ct.general.typography.fontstacks.alternativefont.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.typography.fontstacks.alternativefont.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_alternativefont'),
                                'sanitize_callback' => [$this, 'zeusSanitizeText'],
                            ],
                        ],
                    ],

    // FORMATTING
                    'formatting_header' => array_merge($this->contents['control_title'], [
                        'label'       => __('apollon.ct.general.typography.formatting.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.typography.formatting.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),

                    'typo_bodysize' => [
                        'label'       => __('apollon.ct.general.typography.formatting.bodysize.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_bodysize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_lineheight' => [
                        'label'       => __('apollon.ct.general.typography.formatting.lineheight.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_smallsize' => [
                        'label'       => __('apollon.ct.general.typography.formatting.smallsize.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_smallsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_listsize' => [
                        'label'       => __('apollon.ct.general.typography.formatting.listsize.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_listsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_listlineheight' => [
                        'label'       => __('apollon.ct.general.typography.formatting.listlineheight.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_listlineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],

    // HEADINGS
                    'headings_header' => array_merge($this->contents['control_title'], [
                        'label'       => __('apollon.ct.general.typography.headings.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.general.typography.headings.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),

                    'headings_headerfont' => array_merge($this->contents['control_subtitle'], [
                        'label'       => __('apollon.ct.general.typography.headings.font.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),
                    'typo_headingfont' => [
                        'label'       => __('apollon.ct.general.typography.headings.headingfont.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'main'        => __('apollon._.mainfont', OL_APOLLON_DICTIONARY),
                            'secondary'   => __('apollon._.secondaryfont', OL_APOLLON_DICTIONARY),
                            'alternative' => __('apollon._.alternativefont', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_headingfont'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ],
                        ],
                    ],

                    'headings_headersizes' => array_merge($this->contents['control_subtitle'], [
                        'label'       => __('apollon.ct.general.typography.headings.sizes.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                    ]),
                    'typo_h1size' => [
                        'label'       => __('apollon.ct.general.typography.headings.h1size.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_h1size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_h2size' => [
                        'label'       => __('apollon.ct.general.typography.headings.h2size.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_h2size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_h3size' => [
                        'label'       => __('apollon.ct.general.typography.headings.h3size.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_h3size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_h4size' => [
                        'label'       => __('apollon.ct.general.typography.headings.h4size.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_h4size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_h5size' => [
                        'label'       => __('apollon.ct.general.typography.headings.h5size.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_h5size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'typo_h6size' => [
                        'label'       => __('apollon.ct.general.typography.headings.h6size.title', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('typo_h6size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],

// BUTTONS & LINKS
/**
 * @todo
 */

        ],
    ],
];
