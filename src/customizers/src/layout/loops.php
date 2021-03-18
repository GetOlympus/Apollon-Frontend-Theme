<?php

/**
 * Loops options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// LOOPS
    $slug.'-loops' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.layout.loops.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// ARCHIVES
    $slug.'-loops-archives' => [
        'title'       => __('apollon.cz.layout.archives.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.cz.layout.archives.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'controls'    => [
            'archives-posttypes' => [
                'label'      => __('apollon.cz.layout.default.posttypes.title', OL_APOLLON_DICTIONARY),
                'priority'   => ++$priority,
                'type'       => 'apollon-multicheck',
                '_classname' => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'choices'    => $this->contents['posttypes'],
                'settings'   => [
                    [
                        'default'           => apollonGetDefault('archives-posttypes'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ],
                ],
            ],
            'archives-container' => [
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
                        'default'           => apollonGetDefault('archives-container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'archives-content' => [
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
                        'default'           => apollonGetDefault('archives-content'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'archives-gridgap' => [
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
                        'default'           => apollonGetDefault('archives-gridgap'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'archives-columns' => [
                'label'       => __('apollon.cz.layout.default.columns.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'max'         => 5,
                    'min'         => 1,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('archives-columns'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('archives-columns'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            'archives-sidebarpos' => [
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
                        'default'           => apollonGetDefault('archives-sidebarpos'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'archives-sidebar1' => [
                'label'    => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('archives-sidebar1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'archives-sidebar2' => [
                'label'    => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('archives-sidebar2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'archives-sidebars' => [
                'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('archives-sidebars'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],

// SEARCH RESULTS
    $slug.'-loops-search' => [
        'title'    => __('apollon.cz.layout.search.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'search-posttypes' => [
                'label'      => __('apollon.cz.layout.default.posttypes.title', OL_APOLLON_DICTIONARY),
                'priority'   => ++$priority,
                'type'       => 'apollon-multicheck',
                '_classname' => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'choices'    => $this->contents['posttypes'],
                'settings'   => [
                    [
                        'default'           => apollonGetDefault('search-posttypes'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ],
                ],
            ],
            'search-container' => [
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
                        'default'           => apollonGetDefault('search-container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'search-content' => [
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
                        'default'           => apollonGetDefault('search-content'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'search-gridgap' => [
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
                        'default'           => apollonGetDefault('search-gridgap'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'search-columns' => [
                'label'       => __('apollon.cz.layout.default.columns.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'max'         => 5,
                    'min'         => 1,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('search-columns'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('search-columns'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            'search-sidebarpos' => [
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
                        'default'           => apollonGetDefault('search-sidebarpos'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'search-sidebar1' => [
                'label'    => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('search-sidebar1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'search-sidebar2' => [
                'label'    => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('search-sidebar2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'search-sidebars' => [
                'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('search-sidebars'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],
];
