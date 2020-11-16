<?php

/**
 * Layouts customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$priority = 600;

$layouts = [
    'layouts-lt' => [
        'title'       => __('apollon.ct.layouts.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'sections'    => [

// HOMEPAGE
            'lt-homepage' => [
                'title'       => __('apollon.ct.layouts.homepage.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'layout_posttypes' => [
                        'label'       => __(
                            'apollon.ct.layouts.homepage.posttypes.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.homepage.posttypes.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.homepage.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.homepage.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layout_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.homepage.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.homepage.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// DEFAULT
            'lt-default' => array_merge($this->contents['section_title'], [
                'title'    => __('apollon.ct.layouts.default.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),

// POSTS
            'lt-df-posts' => [
                'title'       => __('apollon.ct.layouts.default.posts.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'layoutposts_list' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.list.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'layoutposts_posttypes' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.posttypes.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.posts.posttypes.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutposts_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layoutposts_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.posts.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layoutposts_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutposts_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.posts.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutposts_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutposts_template' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.template.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.posts.template.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'dribbble' => __('apollon._.tpl.dribbble', OL_APOLLON_DICTIONARY),
                            'text'     => __('apollon._.tpl.text', OL_APOLLON_DICTIONARY),
                            'vertical' => __('apollon._.tpl.vertical', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutposts_template'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],

                    'layoutpost_detail' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.detail.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'layoutpost_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.posts.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layoutpost_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutpost_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.posts.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.posts.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutpost_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// MEDIAS
            'lt-df-medias' => [
                'title'    => __('apollon.ct.layouts.default.medias.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layoutmedia_detail' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.layouts.default.medias.detail.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'layoutmedia_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.medias.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.medias.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layoutmedia_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutmedia_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.medias.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.medias.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutmedia_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// PAGES
            'lt-df-pages' => [
                'title'    => __('apollon.ct.layouts.default.pages.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layoutpage_detail' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.layouts.default.pages.detail.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'layoutpage_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.pages.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.pages.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layoutpage_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutpage_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.pages.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.pages.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutpage_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// SEARCH RESULTS
            'lt-df-search' => [
                'title'    => __('apollon.ct.layouts.default.search.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layoutsearch_list' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.layouts.default.search.list.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'layoutsearch_posttypes' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.search.posttypes.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.search.posttypes.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutsearch_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layoutsearch_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.search.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.search.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layoutsearch_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutsearch_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.search.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.search.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutsearch_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layoutsearch_template' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.search.template.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.search.template.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                            'dribbble' => __('apollon._.tpl.dribbble', OL_APOLLON_DICTIONARY),
                            'text'     => __('apollon._.tpl.text', OL_APOLLON_DICTIONARY),
                            'vertical' => __('apollon._.tpl.vertical', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layoutsearch_template'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// ERROR 404
            'lt-df-404' => [
                'title'    => __('apollon.ct.layouts.default.404.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layout404_detail' => array_merge($this->contents['control_title'], [
                        'label'       => __(
                            'apollon.ct.layouts.default.404.detail.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                    ]),
                    'layout404_container' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.404.container.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.404.container.desc',
                            OL_APOLLON_DICTIONARY
                        ),
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
                                'default'           => apollonGetDefault('layout404_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout404_size' => [
                        'label'       => __(
                            'apollon.ct.layouts.default.404.size.title',
                            OL_APOLLON_DICTIONARY
                        ),
                        'description' => __(
                            'apollon.ct.layouts.default.404.size.desc',
                            OL_APOLLON_DICTIONARY
                        ),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                            '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                            '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                            '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                            '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout404_size'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// CUSTOM POST TYPES
            'lt-cpt' => array_merge($this->contents['section_title'], [
                'title'    => __('apollon.ct.layouts.cpt.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),

        ],
    ],
];

$to_avoid = ['post', 'page', 'attachment', 'media', 'nav_menu_item', 'customize_changeset', 'revision'];

// Build CPT configurations
foreach ($this->contents['posttypes'] as $type => $name) {
    if (in_array($type, $to_avoid)) {
        continue;
    }

    $title = str_replace('_', ' ', ucfirst($type));
    $type  = str_replace('_', '', $type);

    $layouts['layouts-lt']['sections']['lt-'.$type] = [
        'title'    => $title,
        'priority' => ++$priority,

        'controls' => [
            'layout'.$type.'_detail' => array_merge($this->contents['control_title'], [
                'label'       => __('apollon.ct.layouts.cpt._.detail.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
            ]),
            'layout'.$type.'_container' => [
                'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
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
                        'default'           => apollonGetDefault('layoutpost_container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout'.$type.'_size' => [
                'label'       => __('apollon.ct.layouts.cpt._.size.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.size.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                    '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                    '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                    '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                    '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layoutpost_size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
        ],
    ];
}

unset($to_avoid);

return $layouts;
