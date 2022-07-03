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
                'type'        => 'number',
            ],
            'global-small-margin' => [
                'label'       => __('apollon.cz.design.global.small-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
            ],
            'global-medium-margin' => [
                'label'       => __('apollon.cz.design.global.medium-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
            ],
            'global-large-margin' => [
                'label'       => __('apollon.cz.design.global.large-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
            ],
            'global-xlarge-margin' => [
                'label'       => __('apollon.cz.design.global.xlarge-margin.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
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
                'type'        => 'number',
            ],
            'global-small-gutter' => [
                'label'       => __('apollon.cz.design.global.small-gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
            ],
            'global-medium-gutter' => [
                'label'       => __('apollon.cz.design.global.medium-gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
            ],
            'global-large-gutter' => [
                'label'       => __('apollon.cz.design.global.large-gutter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
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
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 0,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('global-z-index'),
                ],
            ],
        ],
    ],
];
