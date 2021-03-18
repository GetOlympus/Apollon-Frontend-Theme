<?php

/**
 * Pages options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// PAGES
    $slug.'-pages' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.layout.pages.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// PAGE
    $slug.'-pages-page' => [
        'title'    => __('apollon.cz.layout.page.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'page-container' => [
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
                        'default'           => apollonGetDefault('page-container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'page-content' => [
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
                        'default'           => apollonGetDefault('page-content'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'page-feature' => [
                'label'    => __('apollon.cz.layout.default.feature.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('page-feature'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'page-expand' => [
                'label'    => __('apollon.cz.layout.default.expand.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('page-expand'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'page-header' => [
                'label'      => __('apollon.cz.layout.default.header.title', OL_APOLLON_DICTIONARY),
                'priority'   => ++$priority,
                'type'       => 'number',
                'type'       => 'apollon-multicheck',
                '_classname' => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'choices'    => [
                    'thumbnail'   => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
                    'overlay'     => __('apollon._.overlay', OL_APOLLON_DICTIONARY),
                    'title'       => __('apollon._.title', OL_APOLLON_DICTIONARY),
                    'comments'    => __('apollon._.comments', OL_APOLLON_DICTIONARY),
                    'readingtime' => __('apollon._.readingtime', OL_APOLLON_DICTIONARY),
                ],
                'settings'   => [
                    [
                        'default'           => apollonGetDefault('page-header'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ],
                ],
            ],
            'page-elements' => [
                'label'       => __('apollon.cz.layout.default.elements.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'thumbnail'  => __('apollon._.thumbnail', OL_APOLLON_DICTIONARY),
                    'title'      => __('apollon._.title', OL_APOLLON_DICTIONARY),
                    'metas'      => __('apollon._.metas', OL_APOLLON_DICTIONARY),
                    'content'    => __('apollon._.content', OL_APOLLON_DICTIONARY),
                    'social'     => __('apollon._.social', OL_APOLLON_DICTIONARY),
                    'comments'   => __('apollon._.comments', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('page-elements'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ],
                ],
            ],
            'page-metas' => [
                'label'       => __('apollon.cz.layout.default.metas.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'apollon-multicheck',
                '_classname'  => 'ApollonFrontendTheme\\Src\\Controls\\ApollonMulticheckControl',
                'input_attrs' => [
                    'sortable' => true,
                ],
                'choices'     => [
                    'author'      => __('apollon._.author', OL_APOLLON_DICTIONARY),
                    'date'        => __('apollon._.date', OL_APOLLON_DICTIONARY),
                    'comments'    => __('apollon._.comments', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('page-metas'),
                        'sanitize_callback' => [$this, 'zeusSanitizeMulticheck'],
                    ],
                ],
            ],
            'page-sidebarpos' => [
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
                        'default'           => apollonGetDefault('page-sidebarpos'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'page-sidebar1' => [
                'label'    => __('apollon._.sidebar1', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('page-sidebar1'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'page-sidebar2' => [
                'label'    => __('apollon._.sidebar2', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('page-sidebar2'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'page-sidebars' => [
                'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('page-sidebars'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],

// ERROR 404
    $slug.'-pages-404' => [
        'title'    => __('apollon.cz.layout.404.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            '404-container' => [
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
                        'default'           => apollonGetDefault('404-container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            '404-content' => [
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
                        'default'           => apollonGetDefault('404-content'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ],

// ATTACHMENT
    $slug.'-pages-attachment' => [
        'title'    => __('apollon.cz.layout.attachment.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'attachment-container' => [
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
                        'default'           => apollonGetDefault('attachment-container'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'attachment-content' => [
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
                        'default'           => apollonGetDefault('attachment-content'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ],
];
