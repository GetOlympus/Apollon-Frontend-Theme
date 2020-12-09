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
                    'layout_default_posttypes' => [
                        'label'       => __('apollon.ct.layouts.cpt._.posttypes.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.posttypes.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                    'layout_default_container' => [
                        'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_default_content' => [
                        'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_content'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_default_gridgap' => [
                        'label'       => __('apollon.ct.layouts.cpt._.gridgap.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.gridgap.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices' => [
                            'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_gridgap'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_default_columns' => [
                        'label'       => __('apollon.ct.layouts.cpt._.columns.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.columns.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'range',
                        'input_attrs' => [
                            'max'  => 5,
                            'min'  => 1,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_columns'),
                                'sanitize_callback' => [$this, 'zeusSanitizeRange'],
                            ]
                        ],
                    ],
                    'layout_default_sidebarpos' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebarpos.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebarpos.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'radio',
                        'choices'     => [
                            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebarpos'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_default_sidebar1' => [
                        'label'       => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar1.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_default_sidebar2' => [
                        'label'       => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar2.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// LIST
            'lt-list' => array_merge($this->contents['section_title'], [
                'title'    => __('apollon.ct.layouts.list.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),

// ARCHIVES
            'lt-ls-archives' => [
                'title'       => __('apollon.ct.layouts.list.archives.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,

                'controls'    => [
                    'layout_archives_posttypes' => [
                        'label'       => __('apollon.ct.layouts.cpt._.posttypes.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.posttypes.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                    'layout_archives_container' => [
                        'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_archives_content' => [
                        'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_content'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_archives_gridgap' => [
                        'label'       => __('apollon.ct.layouts.cpt._.gridgap.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.gridgap.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices' => [
                            'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_gridgap'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_archives_columns' => [
                        'label'       => __('apollon.ct.layouts.cpt._.columns.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.columns.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'range',
                        'input_attrs' => [
                            'max'  => 5,
                            'min'  => 1,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_columns'),
                                'sanitize_callback' => [$this, 'zeusSanitizeRange'],
                            ]
                        ],
                    ],
                    'layout_archives_sidebarpos' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebarpos.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebarpos.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'radio',
                        'choices'     => [
                            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebarpos'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_archives_sidebar1' => [
                        'label'       => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar1.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_archives_sidebar2' => [
                        'label'       => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar2.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_archives_sidebars' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebars.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebars.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebars'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                ],
            ],

// SEARCH RESULTS
            'lt-ls-search' => [
                'title'    => __('apollon.ct.layouts.list.search.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layout_search_posttypes' => [
                        'label'       => __('apollon.ct.layouts.cpt._.posttypes.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.posttypes.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'choices'     => $this->contents['posttypes'],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_posttypes'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                    'layout_search_container' => [
                        'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_search_content' => [
                        'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_content'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_search_gridgap' => [
                        'label'       => __('apollon.ct.layouts.cpt._.gridgap.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.gridgap.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices' => [
                            'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                            'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_gridgap'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_search_columns' => [
                        'label'       => __('apollon.ct.layouts.cpt._.columns.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.columns.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'range',
                        'input_attrs' => [
                            'max'  => 5,
                            'min'  => 1,
                            'step' => 1,
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_columns'),
                                'sanitize_callback' => [$this, 'zeusSanitizeRange'],
                            ]
                        ],
                    ],
                    'layout_search_sidebarpos' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebarpos.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebarpos.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'radio',
                        'choices'     => [
                            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebarpos'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_search_sidebar1' => [
                        'label'       => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar1.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_search_sidebar2' => [
                        'label'       => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar2.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_search_sidebars' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebars.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebars.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebars'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
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

// PAGES
            'lt-df-page' => [
                'title'    => __('apollon.ct.layouts.default.page.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layout_page_container' => [
                        'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_page_content' => [
                        'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_content'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_page_feature' => [
                        'label'       => __('apollon.ct.layouts.cpt._.feature.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.feature.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_feature'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_page_extend' => [
                        'label'       => __('apollon.ct.layouts.cpt._.extend.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.extend.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_extend'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_page_header' => [
                        'label'       => __('apollon.ct.layouts.cpt._.header.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.header.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'choices'     => [
                            'thumbnail'   => __('apollon._.cpt.thumbnail', OL_APOLLON_DICTIONARY),
                            'title'       => __('apollon._.cpt.title', OL_APOLLON_DICTIONARY),
                            'categories'  => __('apollon._.cpt.categories', OL_APOLLON_DICTIONARY),
                            'author'      => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                            'comments'    => __('apollon._.cpt.comments', OL_APOLLON_DICTIONARY),
                            'readingtime' => __('apollon._.cpt.readingtime', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_header'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                    'layout_page_elements' => [
                        'label'       => __('apollon.ct.layouts.cpt._.elements.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.elements.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'input_attrs' => [
                            'sortable' => true,
                        ],
                        'choices'     => [
                            'thumbnail'  => __('apollon._.cpt.thumbnail', OL_APOLLON_DICTIONARY),
                            'title'      => __('apollon._.cpt.title', OL_APOLLON_DICTIONARY),
                            'categories' => __('apollon._.cpt.categories', OL_APOLLON_DICTIONARY),
                            'metas'      => __('apollon._.cpt.metas', OL_APOLLON_DICTIONARY),
                            'excerpt'    => __('apollon._.cpt.excerpt', OL_APOLLON_DICTIONARY),
                            'content'    => __('apollon._.cpt.content', OL_APOLLON_DICTIONARY),
                            'tags'       => __('apollon._.cpt.tags', OL_APOLLON_DICTIONARY),
                            'social'     => __('apollon._.cpt.social', OL_APOLLON_DICTIONARY),
                            'nextprev'   => __('apollon._.cpt.nextprev', OL_APOLLON_DICTIONARY),
                            'author'     => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                            'related'    => __('apollon._.cpt.related', OL_APOLLON_DICTIONARY),
                            'comments'   => __('apollon._.cpt.comments', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_elements'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                    'layout_page_metas' => [
                        'label'       => __('apollon.ct.layouts.cpt._.metas.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.metas.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'apollon-multicheck',
                        '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                        'input_attrs' => [
                            'sortable' => true,
                        ],
                        'choices'     => [
                            'author'      => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                            'date'        => __('apollon._.cpt.date', OL_APOLLON_DICTIONARY),
                            'comments'    => __('apollon._.cpt.comments', OL_APOLLON_DICTIONARY),
                            'readingtime' => __('apollon._.cpt.readingtime', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_metas'),
                                'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                            ]
                        ],
                    ],
                    'layout_page_sidebarpos' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebarpos.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebarpos.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'radio',
                        'choices'     => [
                            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebarpos'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_page_sidebar1' => [
                        'label'       => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar1.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar1'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_page_sidebar2' => [
                        'label'       => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebar2.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebar2'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                            ]
                        ],
                    ],
                    'layout_page_sidebars' => [
                        'label'       => __('apollon.ct.layouts.cpt._.sidebars.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.sidebars.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'checkbox',
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_sidebars'),
                                'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
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
                    'layout_404_container' => [
                        'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall'  => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge'  => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand'  => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_404_content' => [
                        'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_content'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],

// MEDIAS
            'lt-df-media' => [
                'title'    => __('apollon.ct.layouts.default.media.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,

                'controls' => [
                    'layout_media_container' => [
                        'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                        'priority'    => ++$priority,
                        'type'        => 'select',
                        'choices'     => [
                            'xsmall'  => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                            'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                            'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                            'xlarge'  => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                            'expand'  => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_container'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                    'layout_media_content' => [
                        'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                        'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                        ],
                        'settings'    => [
                            [
                                'default'           => apollonGetDefault('layout_default_content'),
                                'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
];

// Build CPT configurations
foreach ($this->contents['posttypes'] as $type) {
    if ('page' === $type) {
        continue;
    }

    $title = str_replace('_', ' ', ucfirst($type));
    $type  = str_replace('_', '', $type);

    $layouts['layouts-lt']['sections']['lt-cpt-'.$type] = array_merge($this->contents['section_title'], [
        'title'    => $title,
        'priority' => ++$priority,
    ]);

    $layouts['layouts-lt']['sections']['lt-cpt-'.$type.'-list'] = [
        'title'    => __('apollon.ct.layouts.cpt._.list.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,

        'controls' => [
            'layout_'.$type.'s_template' => [
                'label'       => __('apollon.ct.layouts.cpt._.template.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.template.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'default'    => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'cover'      => __('apollon._.tpl.cover', OL_APOLLON_DICTIONARY),
                    'text'       => __('apollon._.tpl.text', OL_APOLLON_DICTIONARY),
                    'horizontal' => __('apollon._.tpl.horizontal', OL_APOLLON_DICTIONARY),
                    'vertical'   => __('apollon._.tpl.vertical', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_template'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'s_thumbnail' => [
                'label'       => __('apollon.ct.layouts.cpt._.thumbnail.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.thumbnail.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'thumbnail' => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'medium'    => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                    'large'     => __('apollon._.large', OL_APOLLON_DICTIONARY),
                    'full'      => __('apollon._.full', OL_APOLLON_DICTIONARY),
                    'cover'     => 'Cover',
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_thumbnail'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'s_titletag' => [
                'label'       => __('apollon.ct.layouts.cpt._.titletag.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.titletag.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'h1'   => __('apollon._.h1', OL_APOLLON_DICTIONARY),
                    'h2'   => __('apollon._.h2', OL_APOLLON_DICTIONARY),
                    'h3'   => __('apollon._.h3', OL_APOLLON_DICTIONARY),
                    'h4'   => __('apollon._.h4', OL_APOLLON_DICTIONARY),
                    'h5'   => __('apollon._.h5', OL_APOLLON_DICTIONARY),
                    'h6'   => __('apollon._.h6', OL_APOLLON_DICTIONARY),
                    'span' => __('apollon._.span', OL_APOLLON_DICTIONARY),
                    'div'  => __('apollon._.div', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_titletag'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'s_titledisplay' => [
                'label'       => __('apollon.ct.layouts.cpt._.titledisplay.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.titledisplay.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'h1' => __('apollon._.h1', OL_APOLLON_DICTIONARY),
                    'h2' => __('apollon._.h2', OL_APOLLON_DICTIONARY),
                    'h3' => __('apollon._.h3', OL_APOLLON_DICTIONARY),
                    'h4' => __('apollon._.h4', OL_APOLLON_DICTIONARY),
                    'h5' => __('apollon._.h5', OL_APOLLON_DICTIONARY),
                    'h6' => __('apollon._.h6', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_titledisplay'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'s_excerpt' => [
                'label'       => __('apollon.ct.layouts.cpt._.excerpt.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.excerpt.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 0,
                    'max'  => 100,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_excerpt'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ]
                ],
            ],
            'layout_'.$type.'s_usecontent' => [
                'label'       => __('apollon.ct.layouts.cpt._.usecontent.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.usecontent.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_usecontent'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'s_categorylink' => [
                'label'       => __('apollon.ct.layouts.cpt._.categorylink.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.categorylink.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_categorylink'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'s_readmoretitle' => [
                'label'       => __('apollon.ct.layouts.cpt._.readmoretitle.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.readmoretitle.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => __('apollon._.cpt.readmore', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_readmoretitle'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ]
                ],
            ],
            'layout_'.$type.'s_readmorestyle' => [
                'label'       => __('apollon.ct.layouts.cpt._.readmorestyle.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.readmorestyle.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                    'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'danger'    => __('apollon._.danger', OL_APOLLON_DICTIONARY),
                    'text'      => __('apollon._.text', OL_APOLLON_DICTIONARY),
                    'link'      => __('apollon._.link', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_readmorestyle'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'s_readmoreicon' => [
                'label'       => __('apollon.ct.layouts.cpt._.readmoreicon.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.readmoreicon.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_readmoreicon'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'s_elements' => [
                'label'       => __('apollon.ct.layouts.cpt._.elements.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.elements.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'thumbnail'  => __('apollon._.cpt.thumbnail', OL_APOLLON_DICTIONARY),
                    'title'      => __('apollon._.cpt.title', OL_APOLLON_DICTIONARY),
                    'categories' => __('apollon._.cpt.categories', OL_APOLLON_DICTIONARY),
                    'metas'      => __('apollon._.cpt.metas', OL_APOLLON_DICTIONARY),
                    'excerpt'    => __('apollon._.cpt.excerpt', OL_APOLLON_DICTIONARY),
                    'readmore'   => __('apollon._.cpt.readmore', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_elements'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ]
                ],
            ],
            'layout_'.$type.'s_metas' => [
                'label'       => __('apollon.ct.layouts.cpt._.metas.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.metas.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'author'      => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                    'date'        => __('apollon._.cpt.date', OL_APOLLON_DICTIONARY),
                    'comments'    => __('apollon._.cpt.comments', OL_APOLLON_DICTIONARY),
                    'readingtime' => __('apollon._.cpt.readingtime', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_metas'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ]
                ],
            ],
            'layout_'.$type.'s_coverstyle' => [
                'label'       => __('apollon.ct.layouts.cpt._.coverstyle.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.coverstyle.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    ''        => __('apollon.ct.layouts.cpt._.coverstyle.none', OL_APOLLON_DICTIONARY),
                    'default' => __('apollon.ct.layouts.cpt._.coverstyle.default', OL_APOLLON_DICTIONARY),
                    'primary' => __('apollon.ct.layouts.cpt._.coverstyle.primary', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_coverstyle'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'s_coverpos' => [
                'label'       => __('apollon.ct.layouts.cpt._.coverpos.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.coverpos.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'top'    => __('apollon.ct.layouts.cpt._.coverpos.top', OL_APOLLON_DICTIONARY),
                    'center' => __('apollon.ct.layouts.cpt._.coverpos.center', OL_APOLLON_DICTIONARY),
                    'bottom' => __('apollon.ct.layouts.cpt._.coverpos.bottom', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_coverpos'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
        ],
    ];

    $layouts['layouts-lt']['sections']['lt-cpt-'.$type.'-detail'] = [
        'title'    => __('apollon.ct.layouts.cpt._.detail.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,

        'controls' => [
            'layout_'.$type.'_container' => [
                'label'       => __('apollon.ct.layouts.cpt._.container.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.container.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'select',
                'choices'     => [
                    'xsmall'  => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                    'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
                    'xlarge'  => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                    'expand'  => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'_content' => [
                'label'       => __('apollon.ct.layouts.cpt._.content.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.content.desc', OL_APOLLON_DICTIONARY),
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
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_content'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'_contents' => [
                'label'       => __('apollon.ct.layouts.cpt._.elements.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.elements.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'thumbnail'   => __('apollon._.cpt.thumbnail', OL_APOLLON_DICTIONARY),
                    'title'       => __('apollon._.cpt.title', OL_APOLLON_DICTIONARY),
                    'categories'  => __('apollon._.cpt.categories', OL_APOLLON_DICTIONARY),
                    'metas'       => __('apollon._.cpt.metas', OL_APOLLON_DICTIONARY),
                    'excerpt'     => __('apollon._.cpt.excerpt', OL_APOLLON_DICTIONARY),
                    'content'     => __('apollon._.cpt.content', OL_APOLLON_DICTIONARY),
                    'tags'        => __('apollon._.cpt.tags', OL_APOLLON_DICTIONARY),
                    'social'      => __('apollon._.cpt.social', OL_APOLLON_DICTIONARY),
                    'nextprev'    => __('apollon._.cpt.nextprev', OL_APOLLON_DICTIONARY),
                    'author'      => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                    'related'     => __('apollon._.cpt.related', OL_APOLLON_DICTIONARY),
                    'commentform' => __('apollon._.cpt.commentform', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_contents'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ]
                ],
            ],
            'layout_'.$type.'_metas' => [
                'label'       => __('apollon.ct.layouts.cpt._.metas.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.metas.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'author'      => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                    'date'        => __('apollon._.cpt.date', OL_APOLLON_DICTIONARY),
                    'comments'    => __('apollon._.cpt.comments', OL_APOLLON_DICTIONARY),
                    'readingtime' => __('apollon._.cpt.readingtime', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_metas'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ]
                ],
            ],
            'layout_'.$type.'_avatar' => [
                'label'       => __('apollon.ct.layouts.cpt._.avatar.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.avatar.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_avatar'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'_feature' => [
                'label'       => __('apollon.ct.layouts.cpt._.feature.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.feature.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_feature'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'_extend' => [
                'label'       => __('apollon.ct.layouts.cpt._.extend.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.extend.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_extend'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'_header' => [
                'label'       => __('apollon.ct.layouts.cpt._.header.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.header.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'choices'     => [
                    'thumbnail'   => __('apollon._.cpt.thumbnail', OL_APOLLON_DICTIONARY),
                    'title'       => __('apollon._.cpt.title', OL_APOLLON_DICTIONARY),
                    'categories'  => __('apollon._.cpt.categories', OL_APOLLON_DICTIONARY),
                    'author'      => __('apollon._.cpt.author', OL_APOLLON_DICTIONARY),
                    'comments'    => __('apollon._.cpt.comments', OL_APOLLON_DICTIONARY),
                    'readingtime' => __('apollon._.cpt.readingtime', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_header'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ]
                ],
            ],
            'layout_'.$type.'_sidebarpos' => [
                'label'       => __('apollon.ct.layouts.cpt._.sidebarpos.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.sidebarpos.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'radio',
                'choices'     => [
                    'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                    'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                    'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_sidebarpos'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ]
                ],
            ],
            'layout_'.$type.'_sidebar1' => [
                'label'       => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.sidebar1.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_sidebar1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'_sidebar2' => [
                'label'       => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.sidebar2.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_sidebar2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
            'layout_'.$type.'_sidebars' => [
                'label'       => __('apollon.ct.layouts.cpt._.sidebars.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.ct.layouts.cpt._.sidebars.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('layout_default_sidebars'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ]
                ],
            ],
        ],
    ];
}

return $layouts;
