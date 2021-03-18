<?php

/**
 * Spacings options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// SPACINGS
    $slug.'-spacings' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.spacings.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// MARGINS
    $slug.'-margins' => [
        'title'    => __('apollon.cz.design.margins.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'global-margin' => [
                'label'       => __('apollon.cz.design.global.margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-margin'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-margin'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-small-margin' => [
                'label'       => __('apollon.cz.design.global.small-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-small-margin'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-small-margin'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-medium-margin' => [
                'label'       => __('apollon.cz.design.global.medium-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-medium-margin'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-medium-margin'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-large-margin' => [
                'label'       => __('apollon.cz.design.global.large-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-large-margin'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-large-margin'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-xlarge-margin' => [
                'label'       => __('apollon.cz.design.global.xlarge-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-xlarge-margin'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-xlarge-margin'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],

// GUTTERS
    $slug.'-gutters' => [
        'title'    => __('apollon.cz.design.gutters.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'global-gutter' => [
                'label'       => __('apollon.cz.design.global.gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-gutter'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-gutter'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-small-gutter' => [
                'label'       => __('apollon.cz.design.global.small-gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-small-gutter'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-small-gutter'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-medium-gutter' => [
                'label'       => __('apollon.cz.design.global.medium-gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-medium-gutter'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-medium-gutter'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'global-large-gutter' => [
                'label'       => __('apollon.cz.design.global.large-gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-large-gutter'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-large-gutter'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],

// Z-INDEX
    $slug.'-zindex' => [
        'title'    => __('apollon.cz.design.zindex.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'global-z-index' => [
                'label'       => __('apollon.cz.design.global.z-index.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('global-z-index'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('global-z-index'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],
];
