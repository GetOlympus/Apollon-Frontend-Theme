<?php

/**
 * Footer customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$priority = 700;

$_contents = $this->contents['navs_contents'];
unset($_contents['custom']);
unset($_contents['menu']);

return [
    'footer-ft' => [
        'title'       => __('apollon.ct.footer.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.ct.footer.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,

        'sections'    => [
// TOP LEVEL
            'ft-topsection' => [
                'title'       => __('apollon.ct.footer.topsection.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'topsection_enable' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.enable.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.enable.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'topsection_contents' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.footer.topsection.contents.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'topsection_content_1' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.contents.content_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.contents.content_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_content_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_content_2' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.contents.content_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.contents.content_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_content_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_content_3' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.contents.content_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.contents.content_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_content_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_content_4' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.contents.content_4.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.contents.content_4.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_content_4'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'topsection_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'topsection_size_1' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.size_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.size_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_size_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_size_2' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.size_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.size_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_size_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_size_3' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.size_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.size_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_size_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_size_4' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.size_4.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.size_4.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_size_4'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'topsection_fullwidth' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.fullwidth.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.fullwidth.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_fullwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'topsection_background' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('topsection_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ]
                        ],
                    ],
                    'topsection_fontsize' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.fontsize.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.fontsize.desc',
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
                                'default'           => apollonGetDefault('topsection_fontsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'topsection_lineheight' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.lineheight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.lineheight.desc',
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
                                'default'           => apollonGetDefault('topsection_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'topsection_padding' => [
                        'label'       => __(
                            'apollon.ct.footer.topsection.layout.padding.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.topsection.layout.padding.desc',
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
                                'default'           => apollonGetDefault('topsection_padding'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],

// MAIN NAV
            'ft-mainsection' => [
                'title'       => __('apollon.ct.footer.mainsection.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'mainsection_enable' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.enable.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.enable.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'mainsection_contents' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.contents.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'mainsection_content_1' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.contents.content_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.contents.content_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_content_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_content_2' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.contents.content_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.contents.content_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_content_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_content_3' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.contents.content_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.contents.content_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_content_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_content_4' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.contents.content_4.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.contents.content_4.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_content_4'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'mainsection_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'mainsection_size_1' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.size_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.size_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_size_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_size_2' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.size_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.size_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_size_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_size_3' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.size_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.size_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_size_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_size_4' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.size_4.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.size_4.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_size_4'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'mainsection_fullwidth' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.fullwidth.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.fullwidth.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_fullwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'mainsection_background' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('mainsection_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ]
                        ],
                    ],
                    'mainsection_fontsize' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.fontsize.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.fontsize.desc',
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
                                'default'           => apollonGetDefault('mainsection_fontsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'mainsection_lineheight' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.lineheight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.lineheight.desc',
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
                                'default'           => apollonGetDefault('mainsection_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'mainsection_padding' => [
                        'label'       => __(
                            'apollon.ct.footer.mainsection.layout.padding.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.mainsection.layout.padding.desc',
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
                                'default'           => apollonGetDefault('mainsection_padding'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],

// SUB NAV
            'ft-subsection' => [
                'title'       => __('apollon.ct.footer.subsection.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'subsection_enable' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.enable.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.enable.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'subsection_contents' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.footer.subsection.contents.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'subsection_content_1' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.contents.content_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.contents.content_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_content_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_content_2' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.contents.content_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.contents.content_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_content_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_content_3' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.contents.content_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.contents.content_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_content_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_content_4' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.contents.content_4.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.contents.content_4.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => $_contents,
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_content_4'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'subsection_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'subsection_size_1' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.size_1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.size_1.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_size_1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_size_2' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.size_2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.size_2.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_size_2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_size_3' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.size_3.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.size_3.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_size_3'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_size_4' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.size_4.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.size_4.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_size_4'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'subsection_fullwidth' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.fullwidth.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.fullwidth.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_fullwidth'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'subsection_background' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'color',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('subsection_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                            ]
                        ],
                    ],
                    'subsection_fontsize' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.fontsize.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.fontsize.desc',
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
                                'default'           => apollonGetDefault('subsection_fontsize'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'subsection_lineheight' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.lineheight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.lineheight.desc',
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
                                'default'           => apollonGetDefault('subsection_lineheight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                    'subsection_padding' => [
                        'label'       => __(
                            'apollon.ct.footer.subsection.layout.padding.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.footer.subsection.layout.padding.desc',
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
                                'default'           => apollonGetDefault('subsection_padding'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
