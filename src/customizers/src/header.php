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
unset($_contents['copyright']);
unset($_contents['sidebar']);

$headers = [
    'header-hd' => [
        'title'       => __('apollon.ct.header.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.ct.header.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,

        'sections'    => [
// GLOBAL OPTIONS
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
                ],
            ],

// NAVBARS OPTIONS
            'hd-navbars' => array_merge($this->contents['section_title'], [
                'title'    => __('apollon.ct.header.navbars.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),

        ],
    ],
];

// Build CPT configurations
foreach (['top', 'main', 'sub'] as $nav) {
    $prependtitle = 'apollon.ct.header.'.$nav.'nav.';

    $headers['header-hd']['sections']['hd-'.$nav.'nav'] = [
        'title'    => __($prependtitle.'title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,

        'controls' => [
            $nav.'nav_enable' => [
                'label'       => __($prependtitle.'enable.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'enable.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_enable'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],

            $nav.'nav_contents' => array_merge($this->contents['control_title'], [
                'label'       => __($prependtitle.'contents.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
            ]),
            $nav.'nav_customtext' => [
                'label'       => __($prependtitle.'contents.customtext.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'contents.customtext.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'textarea',
                'input_attrs' => [
                    'placeholder' => __($prependtitle.'contents.customtext.placeholder', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_customtext'),
                        'sanitize_callback' => [$this, 'zeusSanitizeTextarea'],
                    ]
                ],
            ],
            $nav.'nav_content_1' => [
                'label'       => __($prependtitle.'contents.content_1.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'contents.content_1.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_content_1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $nav.'nav_content_2' => [
                'label'       => __($prependtitle.'contents.content_2.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'contents.content_2.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_content_2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $nav.'nav_content_3' => [
                'label'       => __($prependtitle.'contents.content_3.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'contents.content_3.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => $_contents,
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_content_3'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],

            $nav.'nav_optimisation' => array_merge($this->contents['control_title'], [
                'label'       => __($prependtitle.'optimisation.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
            ]),
            $nav.'nav_mobile' => [
                'label'       => __($prependtitle.'optimisation.mobile.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'optimisation.mobile.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_mobile'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],

            $nav.'nav_layout' => array_merge($this->contents['control_title'], [
                'label'       => __($prependtitle.'layout.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
            ]),
            $nav.'nav_template' => [
                'label'       => __($prependtitle.'layout.template.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'layout.template.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'left'   => __($prependtitle.'layout.template.left', OL_APOLLON_DICTIONARY),
                    'right'  => __($prependtitle.'layout.template.right', OL_APOLLON_DICTIONARY),
                    'center' => __($prependtitle.'layout.template.center', OL_APOLLON_DICTIONARY),
                    'expand' => __($prependtitle.'layout.template.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_template'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $nav.'nav_fullwidth' => [
                'label'       => __($prependtitle.'layout.fullwidth.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'layout.fullwidth.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_fullwidth'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            $nav.'nav_background' => [
                'label'       => __($prependtitle.'layout.background.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'layout.background.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'none'      => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'muted'     => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                    'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            $nav.'nav_fontsize' => [
                'label'       => __($prependtitle.'layout.fontsize.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'layout.fontsize.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 1,
                    'max'  => 100,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_fontsize'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            $nav.'nav_lineheight' => [
                'label'       => __($prependtitle.'layout.lineheight.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'layout.lineheight.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 1,
                    'max'  => 100,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_lineheight'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            $nav.'nav_padding' => [
                'label'       => __($prependtitle.'layout.padding.title', OL_APOLLON_DICTIONARY),
                'description' => __($prependtitle.'layout.padding.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault($nav.'nav_padding'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ];
}

return $headers;
