<?php

/**
 * Header customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$priority = 500;

$_contents = $this->contents['navs_contents'];
unset($_contents['sidebar']);

return [
    'header-hd' => [
        'title'       => __('apollon.ct.header.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.ct.header.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,

        'sections'    => [
// TOP LEVEL
            'hd-topnav' => [
                'title'       => __('apollon.ct.header.topnav.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'topnav_enable' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.enable.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.enable.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'topnav_contents' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.topnav.contents.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'topnav_customtext' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.contents.customtext.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.contents.customtext.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'textarea',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.header.topnav.contents.customtext.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_customtext'),
                                'sanitize_callback' => [$this, 'zeusSanitizeTextarea'],
                            ]
                        ],
                    ],
                    'topnav_content_1' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.contents.content_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.contents.content_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_content_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topnav_content_2' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.contents.content_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.contents.content_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_content_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topnav_content_3' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.contents.content_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.contents.content_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_content_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'topnav_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.topnav.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'topnav_mobile' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.optimisation.mobile.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.optimisation.mobile.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_mobile'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'topnav_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'topnav_template' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.template.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.layout.template.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'left'   => __(
                                'apollon.ct.header.topnav.layout.template.left',
                                OL_APOLLON_DICTIONARY
                            ),
                            'right'  => __(
                                'apollon.ct.header.topnav.layout.template.right',
                                OL_APOLLON_DICTIONARY
                            ),
                            'center' => __(
                                'apollon.ct.header.topnav.layout.template.center',
                                OL_APOLLON_DICTIONARY
                            ),
                            'expand' => __(
                                'apollon.ct.header.topnav.layout.template.expand',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_template'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topnav_fullwidth' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.fullwidth.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.layout.fullwidth.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_fullwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'topnav_background' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.layout.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ]
                        ],
                    ],
                    'topnav_fontsize' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.fontsize.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.layout.fontsize.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_fontsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'topnav_lineheight' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.lineheight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.layout.lineheight.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'topnav_padding' => [
                        'label'       => __(
                            'apollon.ct.header.topnav.layout.padding.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.topnav.layout.padding.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topnav_padding'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],

// MAIN NAV
            'hd-mainnav' => [
                'title'       => __('apollon.ct.header.mainnav.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'mainnav_enable' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'mainnav_contents' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.mainnav.contents.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'mainnav_customtext' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.contents.customtext.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.contents.customtext.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'textarea',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.header.mainnav.contents.customtext.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_customtext'),
                                'sanitize_callback' => [$this, 'zeusSanitizeTextarea'],
                            ]
                        ],
                    ],
                    'mainnav_content_1' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.contents.content_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.contents.content_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_content_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainnav_content_2' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.contents.content_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.contents.content_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_content_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainnav_content_3' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.contents.content_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.contents.content_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_content_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'mainnav_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.mainnav.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'mainnav_mobile' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.optimisation.mobile.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.optimisation.mobile.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_mobile'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'mainnav_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'mainnav_template' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.template.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.layout.template.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'left'   => __(
                                'apollon.ct.header.mainnav.layout.template.left',
                                OL_APOLLON_DICTIONARY
                            ),
                            'right'  => __(
                                'apollon.ct.header.mainnav.layout.template.right',
                                OL_APOLLON_DICTIONARY
                            ),
                            'center' => __(
                                'apollon.ct.header.mainnav.layout.template.center',
                                OL_APOLLON_DICTIONARY
                            ),
                            'expand' => __(
                                'apollon.ct.header.mainnav.layout.template.expand',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_template'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainnav_fullwidth' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.fullwidth.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.layout.fullwidth.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_fullwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'mainnav_background' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.layout.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ]
                        ],
                    ],
                    'mainnav_fontsize' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.fontsize.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.layout.fontsize.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_fontsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'mainnav_lineheight' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.lineheight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.layout.lineheight.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'mainnav_padding' => [
                        'label'       => __(
                            'apollon.ct.header.mainnav.layout.padding.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.mainnav.layout.padding.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainnav_padding'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],

// SUB NAV
            'hd-subnav' => [
                'title'       => __('apollon.ct.header.subnav.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'subnav_enable' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'subnav_contents' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.subnav.contents.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'subnav_customtext' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.contents.customtext.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.contents.customtext.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'textarea',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.header.subnav.contents.customtext.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_customtext'),
                                'sanitize_callback' => [$this, 'zeusSanitizeTextarea'],
                            ]
                        ],
                    ],
                    'subnav_content_1' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.contents.content_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.contents.content_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_content_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subnav_content_2' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.contents.content_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.contents.content_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_content_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subnav_content_3' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.contents.content_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.contents.content_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_content_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'subnav_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.subnav.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'subnav_mobile' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.optimisation.mobile.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.optimisation.mobile.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_mobile'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'subnav_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'subnav_template' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.template.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.layout.template.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'left'   => __(
                                'apollon.ct.header.subnav.layout.template.left',
                                OL_APOLLON_DICTIONARY
                            ),
                            'right'  => __(
                                'apollon.ct.header.subnav.layout.template.right',
                                OL_APOLLON_DICTIONARY
                            ),
                            'center' => __(
                                'apollon.ct.header.subnav.layout.template.center',
                                OL_APOLLON_DICTIONARY
                            ),
                            'expand' => __(
                                'apollon.ct.header.subnav.layout.template.expand',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_template'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subnav_fullwidth' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.fullwidth.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.layout.fullwidth.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_fullwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'subnav_background' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.layout.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ]
                        ],
                    ],
                    'subnav_fontsize' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.fontsize.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.layout.fontsize.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_fontsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'subnav_lineheight' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.lineheight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.layout.lineheight.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'subnav_padding' => [
                        'label'       => __(
                            'apollon.ct.header.subnav.layout.padding.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.subnav.layout.padding.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 100,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subnav_padding'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],

// GLOBAL OPTIONS
            'hd-global' => array_merge($this->contents['section_title'], [
                'title'    => __('apollon.ct.header.global.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),

            'hd-nav' => [
                'title'       => __('apollon.ct.header.nav.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'nav_menulabel' => [
                        'label'       => __(
                            'apollon.ct.header.nav.menulabel.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.nav.menulabel.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.header.nav.menulabel.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('nav_menulabel'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNoHtml'],
                            ]
                        ],
                    ],
                    'nav_shadow' => [
                        'label'       => __(
                            'apollon.ct.header.nav.shadow.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.nav.shadow.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'none'   => __('apollon._.none', OL_APOLLON_DICTIONARY),
                            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium' => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('nav_shadow'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'nav_sticky' => [
                        'label'       => __(
                            'apollon.ct.header.nav.sticky.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.nav.sticky.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'static'   => __('apollon._.static', OL_APOLLON_DICTIONARY),
                            'sticky'   => __(
                                'apollon.ct.header.nav.sticky.sticky',
                                OL_APOLLON_DICTIONARY
                            ),
                            'scrollup' => __(
                                'apollon.ct.header.nav.sticky.scrollup',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('nav_sticky'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

            'hd-dropdown' => [
                'title'       => __('apollon.ct.header.dropdown.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'dropdown_click' => [
                        'label'       => __(
                            'apollon.ct.header.dropdown.click.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.dropdown.click.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('dropdown_click'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'dropdown_position' => [
                        'label'       => __(
                            'apollon.ct.header.dropdown.position.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.dropdown.position.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'left'    => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center'  => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'   => __('apollon._.right', OL_APOLLON_DICTIONARY),
                            //'justify' => __('apollon._.justify', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('dropdown_position'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'dropdown_dropbar' => [
                        'label'       => __(
                            'apollon.ct.header.dropdown.dropbar.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.header.dropdown.dropbar.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'none'  => __('apollon._.none', OL_APOLLON_DICTIONARY),
                            'slide' => __(
                                'apollon.ct.header.dropdown.dropbar.slide',
                                OL_APOLLON_DICTIONARY
                            ),
                            'push'  => __(
                                'apollon.ct.header.dropdown.dropbar.push',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('dropdown_dropbar'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
];
