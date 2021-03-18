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
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('breakpoint-small'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('breakpoint-small'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'breakpoint-medium' => [
                'label'       => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('breakpoint-medium'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('breakpoint-medium'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'breakpoint-large' => [
                'label'       => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('breakpoint-large'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('breakpoint-large'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
            'breakpoint-xlarge' => [
                'label'       => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => apollonGetDefault('breakpoint-xlarge'),
                ],
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('breakpoint-xlarge'),
                        'sanitize_callback' => [$this, 'zeusSanitizeText'],
                    ],
                ],
            ],
        ],
    ],
];
