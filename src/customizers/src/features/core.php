<?php

/**
 * Core options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// LOGO
    $slug.'-logo' => [
        'title'    => __('apollon.cz.features.logo.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'logo-default' => [
                'label'    => __('apollon.cz.features.logo.default.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'image',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('logo-default'),
                        'sanitize_callback' => [$this, 'zeusSanitizeImage'],
                    ],
                ],
            ],
            'logo-retina' => [
                'label'    => __('apollon.cz.features.logo.retina.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'image',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('logo-retina'),
                        'sanitize_callback' => [$this, 'zeusSanitizeImage'],
                    ],
                ],
            ],
            'logo-max-width' => [
                'label'       => __('apollon.cz.features.logo.max-width.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 10,
                    'max'  => 800,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('logo-max-width'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            'logo-max-height' => [
                'label'       => __('apollon.cz.features.logo.max-height.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'min'  => 0,
                    'max'  => 800,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('logo-max-height'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            'logo-slogan' => [
                'label'    => __('apollon.cz.features.logo.slogan.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('logo-slogan'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],

// CORE
    $slug.'-core' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.features.core.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// SEARCH FORM
    $slug.'-searchform' => [
        'title'    => __('apollon.cz.features.searchform.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'searchform-enable' => [
                'label'    => __('apollon.cz.features.searchform.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-enable'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-searchform-optimisation' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.searchform.optimisation.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'searchform-post-types' => [
                'label'    => __('apollon.cz.features.searchform.post-types.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'choices'  => $this->contents['posttypes'],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-post-types'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'searchform-title-only' => [
                'label'    => __('apollon.cz.features.searchform.title-only.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-title-only'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'searchform-posts-per-page' => [
                'label'       => __('apollon.cz.features.searchform.posts-per-page.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 1,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('searchform-posts-per-page'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            'searchform-live-search' => [
                'label'    => __('apollon.cz.features.searchform.live-search.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-live-search'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-searchform-layout' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.searchform.layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'searchform-header-layout' => [
                'label'    => __('apollon.cz.features.searchform.header-layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'overlay'  => __('apollon.cz.features.searchform.header-layout.overlay', OL_APOLLON_DICTIONARY),
                    'drop'     => __('apollon.cz.features.searchform.header-layout.drop', OL_APOLLON_DICTIONARY),
                    'dropdown' => __('apollon.cz.features.searchform.header-layout.dropdown', OL_APOLLON_DICTIONARY),
                    'justify'  => __('apollon.cz.features.searchform.header-layout.justify', OL_APOLLON_DICTIONARY),
                    'dropbar'  => __('apollon.cz.features.searchform.header-layout.dropbar', OL_APOLLON_DICTIONARY),
                    'modal'    => __('apollon.cz.features.searchform.header-layout.modal', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-header-layout'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'searchform-dropbar' => [
                'label'    => __('apollon.cz.features.searchform.dropbar.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'slide' => __('apollon.cz.features.searchform.dropbar.slide', OL_APOLLON_DICTIONARY),
                    'push'  => __('apollon.cz.features.searchform.dropbar.push', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-dropbar'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'searchform-page-layout' => [
                'label'    => __('apollon.cz.features.searchform.page-layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-page-layout'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'searchform-post-types-dropdown' => [
                'label'    => __('apollon.cz.features.searchform.post-types-dropdown.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-post-types-dropdown'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'searchform-submit-button' => [
                'label'    => __('apollon.cz.features.searchform.submit-button.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('searchform-submit-button'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],

// COMMENTS
    $slug.'-comments' => [
        'title'    => __('apollon.cz.features.comments.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'comments-enable' => [
                'label'    => __('apollon.cz.features.comments.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-enable'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-comments-optimisation' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.comments.optimisation.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'comments-avatar' => [
                'label'    => __('apollon.cz.features.comments.avatar.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-avatar'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'comments-website' => [
                'label'    => __('apollon.cz.features.comments.website.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-website'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'comments-htmltags' => [
                'label'    => __('apollon.cz.features.comments.htmltags.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-htmltags'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-comments-layout' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.comments.layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'comments-header' => [
                'label'    => __('apollon.cz.features.comments.header.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-header'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'comments-list-layout' => [
                'label'    => __('apollon.cz.features.comments.list-layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'facebook' => __('apollon.cz.features.comments.facebook', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-list-layout'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'comments-form-layout' => [
                'label'    => __('apollon.cz.features.comments.form-layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'facebook' => __('apollon.cz.features.comments.facebook', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-form-layout'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'comments-form-stacked' => [
                'label'    => __('apollon.cz.features.comments.form-stacked.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-form-stacked'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'comments-labels' => [
                'label'    => __('apollon.cz.features.comments.labels.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-labels'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'comments-highlight' => [
                'label'    => __('apollon.cz.features.comments.highlight.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-highlight'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'comments-form-position' => [
                'label'    => __('apollon.cz.features.comments.form-position.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'top'    => __('apollon.cz.features.comments.form-position.top', OL_APOLLON_DICTIONARY),
                    'bottom' => __('apollon.cz.features.comments.form-position.bottom', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-form-position'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'comments-navs-position' => [
                'label'    => __('apollon.cz.features.comments.navs-position.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'top'    => __('apollon.cz.features.comments.navs-position.top', OL_APOLLON_DICTIONARY),
                    'bottom' => __('apollon.cz.features.comments.navs-position.bottom', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('comments-navs-position'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ],

// PAGINATION
    $slug.'-pagination' => [
        'title'    => __('apollon.cz.features.pagination.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'pagination-enable' => [
                'label'    => __('apollon.cz.features.pagination.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-enable'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-pagination-optimisation' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.pagination.optimisation.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'pagination-first' => [
                'label'    => __('apollon.cz.features.pagination.first.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-first'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'pagination-previous' => [
                'label'    => __('apollon.cz.features.pagination.previous.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-previous'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'pagination-next' => [
                'label'    => __('apollon.cz.features.pagination.next.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-next'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'pagination-last' => [
                'label'    => __('apollon.cz.features.pagination.last.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-last'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'pagination-icons' => [
                'label'    => __('apollon.cz.features.pagination.icons.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-icons'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'pagination-range' => [
                'label'       => __('apollon.cz.features.pagination.range.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 1,
                    'max'  => 10,
                    'step' => 1,
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('pagination-range'),
                        'sanitize_callback' => [$this, 'zeusSanitizeNumber'],
                    ],
                ],
            ],
            'pagination-separator' => [
                'label'       => __('apollon.cz.features.pagination.separator.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('pagination-separator'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('pagination-separator'),
                        'sanitize_callback' => [$this, 'zeusSanitizeHtml'],
                    ],
                ],
            ],
            'pagination-nums' => [
                'label'    => __('apollon.cz.features.pagination.nums.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-nums'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-pagination-layout' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.pagination.layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'pagination-template' => [
                'label'    => __('apollon.cz.features.pagination.template.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'  => __('apollon._.wpdefault', OL_APOLLON_DICTIONARY),
                    'numbers'  => __('apollon.cz.features.pagination.template.numbers', OL_APOLLON_DICTIONARY),
                    'seemore'  => __('apollon.cz.features.pagination.template.seemore', OL_APOLLON_DICTIONARY),
                    'infinite' => __('apollon.cz.features.pagination.template.infinite', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-template'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'pagination-position' => [
                'label'    => __('apollon.cz.features.pagination.position.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                    'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                    'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                    'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-position'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'pagination-title' => [
                'label'       => __('apollon.cz.features.pagination.title.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.cz.features.pagination.title.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => __('apollon.cz.features.pagination.title.placeholder', OL_APOLLON_DICTIONARY),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('pagination-title'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'pagination-infinite-label' => [
                'label'    => __('apollon.cz.features.pagination.infinite-label.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('pagination-infinite-label'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],

// SIDEBAR
    $slug.'-sidebar' => [
        'title'    => __('apollon.cz.features.sidebar.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'sidebar-enable' => [
                'label'    => __('apollon.cz.features.sidebar.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar-enable'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],

            $slug.'-sidebar1-layout' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.sidebar1.layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'sidebar1-mobile' => [
                'label'    => __('apollon.cz.features.sidebar.mobile.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar1-mobile'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'sidebar1-sticky' => [
                'label'       => __('apollon.cz.features.sidebar.sticky.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.cz.features.sidebar.sticky.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('sidebar1-sticky'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'sidebar1-size' => [
                'label'    => __('apollon.cz.features.sidebar.size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                    '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                    '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                    '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                    '2-5' => __('apollon._.2-5', OL_APOLLON_DICTIONARY),
                    '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                    '3-5' => __('apollon._.3-5', OL_APOLLON_DICTIONARY),
                    '2-3' => __('apollon._.2-3', OL_APOLLON_DICTIONARY),
                    '3-4' => __('apollon._.3-4', OL_APOLLON_DICTIONARY),
                    '4-5' => __('apollon._.4-5', OL_APOLLON_DICTIONARY),
                    '5-6' => __('apollon._.5-6', OL_APOLLON_DICTIONARY),
                    '1-1' => __('apollon._.1-1', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar1-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'sidebar1-background' => [
                'label'    => __('apollon.cz.features.sidebar.background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'transparent' => __('apollon._.none', OL_APOLLON_DICTIONARY),
                    'primary'     => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                    'secondary'   => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'muted'       => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar1-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],

            $slug.'-sidebar2-layout' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.sidebar2.layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'sidebar2-mobile' => [
                'label'    => __('apollon.cz.features.sidebar.mobile.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar2-mobile'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'sidebar2-sticky' => [
                'label'       => __('apollon.cz.features.sidebar.sticky.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.cz.features.sidebar.sticky.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('sidebar2-sticky'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
            'sidebar2-size' => [
                'label'    => __('apollon.cz.features.sidebar.size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    '1-6' => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                    '1-5' => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                    '1-4' => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                    '1-3' => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                    '2-5' => __('apollon._.2-5', OL_APOLLON_DICTIONARY),
                    '1-2' => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                    '3-5' => __('apollon._.3-5', OL_APOLLON_DICTIONARY),
                    '2-3' => __('apollon._.2-3', OL_APOLLON_DICTIONARY),
                    '3-4' => __('apollon._.3-4', OL_APOLLON_DICTIONARY),
                    '4-5' => __('apollon._.4-5', OL_APOLLON_DICTIONARY),
                    '5-6' => __('apollon._.5-6', OL_APOLLON_DICTIONARY),
                    '1-1' => __('apollon._.1-1', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar2-size'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
            'sidebar2-background' => [
                'label'    => __('apollon.cz.features.sidebar.background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'transparent' => __('apollon._.none', OL_APOLLON_DICTIONARY),
                    'primary'     => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                    'secondary'   => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'muted'       => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('sidebar2-background'),
                        'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                    ],
                ],
            ],
        ],
    ],
];
