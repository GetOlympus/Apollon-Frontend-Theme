<?php

/**
 * Responsive options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// RESPONSIVE
    $slug.'-responsive' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.responsive.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// BREAKPOINTS
    $slug.'-breakpoints' => [
        'title'    => __('apollon.cz.design.breakpoints.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'breakpoint-small' => [
                'label'       => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 0,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('breakpoint-small'),
                ],
            ],
            'breakpoint-medium' => [
                'label'       => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 0,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('breakpoint-medium'),
                ],
            ],
            'breakpoint-large' => [
                'label'       => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 0,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('breakpoint-large'),
                ],
            ],
            'breakpoint-xlarge' => [
                'label'       => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 0,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('breakpoint-xlarge'),
                ],
            ],
        ],
    ],
];
