<?php

/**
 * Features customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$priority = 400;

return [
    'features-ft' => [
        'title'       => __('apollon.ct.features.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.ct.features.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,

        'sections'    => [
// CORE
            'ft-core' => array_merge($this->contents['section_title'], [
                'title'             => __('apollon.ct.features.core.title', OL_APOLLON_DICTIONARY),
                'description'       => __('apollon.ct.features.core.desc', OL_APOLLON_DICTIONARY),
                'priority'          => ++$priority,
            ]),

// SEARCH FORM
            'ft-searchform' => [
                'title'       => __('apollon.ct.features.searchform.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'searchform_enable' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'searchform_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.searchform.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'searchform_posttypes' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.optimisation.posttypes.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.optimisation.posttypes.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'searchform_titleonly' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.optimisation.titleonly.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.optimisation.titleonly.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_titleonly'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'searchform_postsperpage' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.optimisation.postsperpage.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.optimisation.postsperpage.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_postsperpage'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ]
                        ],
                    ],
                    'searchform_livesearch' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.optimisation.livesearch.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.optimisation.livesearch.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_livesearch'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'searchform_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.searchform.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'searchform_headerlayout' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.layout.headerlayout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.layout.headerlayout.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'overlay'     => __(
                                'apollon.ct.features.searchform.layout.headerlayout.overlay',
                                OL_APOLLON_DICTIONARY
                            ),
                            'drop'     => __(
                                'apollon.ct.features.searchform.layout.headerlayout.drop',
                                OL_APOLLON_DICTIONARY
                            ),
                            'dropdown' => __(
                                'apollon.ct.features.searchform.layout.headerlayout.dropdown',
                                OL_APOLLON_DICTIONARY
                            ),
                            'justify' => __(
                                'apollon.ct.features.searchform.layout.headerlayout.justify',
                                OL_APOLLON_DICTIONARY
                            ),
                            'dropbar' => __(
                                'apollon.ct.features.searchform.layout.headerlayout.dropbar',
                                OL_APOLLON_DICTIONARY
                            ),
                            'modal'    => __(
                                'apollon.ct.features.searchform.layout.headerlayout.modal',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_headerlayout'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'searchform_dropbar' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.layout.dropbar.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.layout.dropbar.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'slide' => __(
                                'apollon.ct.features.searchform.layout.dropbar.slide',
                                OL_APOLLON_DICTIONARY
                            ),
                            'push'  => __(
                                'apollon.ct.features.searchform.layout.dropbar.push',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_dropbar'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'searchform_pagelayout' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.layout.pagelayout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.layout.pagelayout.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_pagelayout'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'searchform_posttypesdropdown' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.layout.posttypesdropdown.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.layout.posttypesdropdown.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_posttypesdropdown'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'searchform_submitbutton' => [
                        'label'       => __(
                            'apollon.ct.features.searchform.layout.submitbutton.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.searchform.layout.submitbutton.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('searchform_submitbutton'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// SIDEBAR
            'ft-sidebar' => [
                'title'       => __('apollon.ct.features.sidebar.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'sidebar_enable' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'sidebar_1' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout1.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'sidebar_1_mobile' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout1.mobile.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout1.mobile.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_1_mobile'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'sidebar_1_sticky' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout1.sticky.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout1.sticky.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_1_sticky'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'sidebar_1_size' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout1.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout1.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
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
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_1_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'sidebar_1_background' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout1.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout1.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'transparent' => __('apollon._.none', OL_APOLLON_DICTIONARY),
                            'primary'     => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                            'secondary'   => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                            'muted'       => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_1_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'sidebar_2' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout2.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'sidebar_2_mobile' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout2.mobile.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout2.mobile.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_2_mobile'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'sidebar_2_sticky' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout2.sticky.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout2.sticky.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_2_sticky'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'sidebar_2_size' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout2.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout2.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
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
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_2_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'sidebar_2_background' => [
                        'label'       => __(
                            'apollon.ct.features.sidebar.layout2.background.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.sidebar.layout2.background.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'transparent' => __('apollon._.none', OL_APOLLON_DICTIONARY),
                            'primary'     => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                            'secondary'   => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                            'muted'       => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('sidebar_2_background'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// COMMENTS
            'ft-comments' => [
                'title'       => __('apollon.ct.features.comments.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'comments_enable' => [
                        'label'       => __(
                            'apollon.ct.features.comments.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'comments_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.comments.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'comments_avatar' => [
                        'label'       => __(
                            'apollon.ct.features.comments.optimisation.avatar.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.optimisation.avatar.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_avatar'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'comments_website' => [
                        'label'       => __(
                            'apollon.ct.features.comments.optimisation.website.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.optimisation.website.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_website'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'comments_htmltags' => [
                        'label'       => __(
                            'apollon.ct.features.comments.optimisation.htmltags.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.optimisation.htmltags.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_htmltags'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'comments_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'comments_header' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.header.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.header.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_header'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'comments_listlayout' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.listlayout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.listlayout.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'facebook' => __(
                                'apollon.ct.features.comments.layout._.facebook',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_listlayout'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'comments_formlayout' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.formlayout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.formlayout.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'facebook' => __(
                                'apollon.ct.features.comments.layout._.facebook',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_formlayout'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'comments_formstacked' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.formstacked.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.formstacked.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_formstacked'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'comments_labels' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.labels.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.labels.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_labels'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'comments_highlight' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.highlight.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.highlight.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_highlight'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'comments_formposition' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.formposition.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.formposition.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'top'    => __(
                                'apollon.ct.features.comments.layout.formposition.top',
                                OL_APOLLON_DICTIONARY
                            ),
                            'bottom' => __(
                                'apollon.ct.features.comments.layout.formposition.bottom',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_formposition'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'comments_navsposition' => [
                        'label'       => __(
                            'apollon.ct.features.comments.layout.navsposition.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.comments.layout.navsposition.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'top'    => __(
                                'apollon.ct.features.comments.layout.navsposition.top',
                                OL_APOLLON_DICTIONARY
                            ),
                            'bottom' => __(
                                'apollon.ct.features.comments.layout.navsposition.bottom',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('comments_navsposition'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],



// THEME
            'ft-theme' => array_merge($this->contents['section_title'], [
                'title'             => __('apollon.ct.features.theme.title', OL_APOLLON_DICTIONARY),
                'description'       => __('apollon.ct.features.theme.desc', OL_APOLLON_DICTIONARY),
                'priority'          => ++$priority,
            ]),

// SOCIAL
            'ft-social' => [
                'title'       => __('apollon.ct.features.social.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'social_enable' => [
                        'label'       => __(
                            'apollon.ct.features.social.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.social.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('social_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'social_icons' => [
                        'label'       => __(
                            'apollon.ct.features.social.icons.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.social.icons.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'choices'     => [
                            'twitter'     => __('apollon.ct.features.social.icons.twitter', OL_APOLLON_DICTIONARY),
                            'facebook'    => __('apollon.ct.features.social.icons.facebook', OL_APOLLON_DICTIONARY),
                            'google-plus' => __('apollon.ct.features.social.icons.google-plus', OL_APOLLON_DICTIONARY),
                            'pinterest'   => __('apollon.ct.features.social.icons.pinterest', OL_APOLLON_DICTIONARY),
                            'linkedin'    => __('apollon.ct.features.social.icons.linkedin', OL_APOLLON_DICTIONARY),
                            'reddit'      => __('apollon.ct.features.social.icons.reddit', OL_APOLLON_DICTIONARY),
                            'tumblr'      => __('apollon.ct.features.social.icons.tumblr', OL_APOLLON_DICTIONARY),
                            'whatsapp'    => __('apollon.ct.features.social.icons.whatsapp', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('social_icons'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                ],
            ],

// BACK TO TOP
            'ft-backtotop' => [
                'title'       => __('apollon.ct.features.backtotop.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'backtotop_enable' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'backtotop_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.backtotop.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'backtotop_label' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.optimisation.label.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.optimisation.label.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.features.backtotop.optimisation.label.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_label'),
                                'sanitize_callback' => [$this, 'zeusSanitizeText'],
                            ]
                        ],
                    ],
                    'backtotop_icon' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.optimisation.icon.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.optimisation.icon.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_icon'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'backtotop_mobile' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.optimisation.mobile.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.optimisation.mobile.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_mobile'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'backtotop_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.backtotop.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'backtotop_margin' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.layout.margin.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.layout.margin.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'small' => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large' => __('apollon._.large', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_margin'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'backtotop_position' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.layout.position.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.layout.position.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_position'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'backtotop_style' => [
                        'label'       => __(
                            'apollon.ct.features.backtotop.layout.style.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.backtotop.layout.style.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'muted'     => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                            'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                            'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                            'link'      => __('apollon._.link', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('backtotop_style'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// PAGINATION
            'ft-pagination' => [
                'title'       => __('apollon.ct.features.pagination.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'pagination_enable' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'pagination_optimisation' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'pagination_first' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.first.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.first.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_first'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'pagination_previous' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.previous.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.previous.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_previous'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'pagination_next' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.next.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.next.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_next'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'pagination_last' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.last.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.last.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_last'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'pagination_icons' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.icons.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.icons.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_icons'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'pagination_range' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.range.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.range.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'number',
                        'input_attrs' => [
                            'min'  => 1,
                            'max'  => 10,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_range'),
                                'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                            ]
                        ],
                    ],
                    'pagination_separator' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.separator.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.separator.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.features.pagination.optimisation.separator.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_separator'),
                                'sanitize_callback' => [$this, 'zeusSanitizeHtml'],
                            ]
                        ],
                    ],
                    'pagination_nums' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.optimisation.nums.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.optimisation.nums.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_nums'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],

                    'pagination_layout' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.features.pagination.layout.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'pagination_template' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.layout.template.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.layout.template.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.wpdefault', OL_APOLLON_DICTIONARY),
                            'numbers'  => __(
                                'apollon.ct.features.pagination.layout.template.numbers',
                                OL_APOLLON_DICTIONARY
                            ),
                            'seemore'  => __(
                                'apollon.ct.features.pagination.layout.template.seemore',
                                OL_APOLLON_DICTIONARY
                            ),
                            'infinite' => __(
                                'apollon.ct.features.pagination.layout.template.infinite',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_template'),
                                'sanitize_callback' => [$this, 'zeusSanitizeText'],
                            ]
                        ],
                    ],
                    'pagination_position' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.layout.position.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.layout.position.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_position'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'pagination_title' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.layout.title.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.layout.title.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'text',
                        'input_attrs' => [
                            'placeholder' => __(
                                'apollon.ct.features.pagination.layout.title.placeholder',
                                OL_APOLLON_DICTIONARY
                            ),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_title'),
                                'sanitize_callback' => [$this, 'zeusSanitizeText'],
                            ]
                        ],
                    ],
                    'pagination_infinitelabel' => [
                        'label'       => __(
                            'apollon.ct.features.pagination.layout.infinitelabel.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.pagination.layout.infinitelabel.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('pagination_infinitelabel'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// EXTRA
            'ft-extra' => array_merge($this->contents['section_title'], [
                'title'             => __('apollon.ct.features.extra.title', OL_APOLLON_DICTIONARY),
                'description'       => __('apollon.ct.features.extra.desc', OL_APOLLON_DICTIONARY),
                'priority'          => ++$priority,
            ]),

// NAVS
            'ft-navs' => [
                'title'       => __('apollon.ct.features.nav.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'navs_enable' => [
                        'label'       => __(
                            'apollon.ct.features.nav.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.nav.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('navs_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// ADS
            'ft-ads' => [
                'title'       => __('apollon.ct.features.ads.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'ads_enable' => [
                        'label'       => __(
                            'apollon.ct.features.ads.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.ads.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('ads_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// ADBLOCKER
            'ft-adblocker' => [
                'title'       => __('apollon.ct.features.adblocker.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'adblocker_enable' => [
                        'label'       => __(
                            'apollon.ct.features.adblocker.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.features.adblocker.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('adblocker_enable'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
];
