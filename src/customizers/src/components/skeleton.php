<?php

/**
 * Skeleton options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// SKELETON
    $slug.'-skeleton' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.components.skeleton.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

    /*// Align
    $slug.'-align' => [
        'title'    => 'Align',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Animation
    $slug.'-animation' => [
        'title'    => 'Animation',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Column
    $slug.'-column' => [
        'title'    => 'Column',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Container
    $slug.'-container' => [
        'title'    => 'Container',
        'priority' => ++$priority,
        'controls' => [],
    ]),*/

    // Divider
    $slug.'-divider' => [
        'title'    => __('apollon.cz.components.divider.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'divider-icon' => [
                'label'       => __('apollon.cz.components.divider.icon.title', OL_APOLLON_DICTIONARY),
                'description' => __('apollon.cz.components.divider.icon.desc', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'checkbox',
                'settings'    => [
                    [
                        'default'           => apollonGetDefault('divider-icon'),
                        'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                    ],
                ],
            ],
        ],
    ],

    /*// Grid
    $slug.'-grid' => [
        'title'    => 'Grid',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Height
    $slug.'-height' => [
        'title'    => 'Height',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Margin
    $slug.'-margin' => [
        'title'    => 'Margin',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Padding
    $slug.'-padding' => [
        'title'    => 'Padding',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Sticky
    $slug.'-sticky' => [
        'title'    => 'Sticky',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Transition
    $slug.'-transition' => [
        'title'    => 'Transition',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Width
    $slug.'-width' => [
        'title'    => 'Width',
        'priority' => ++$priority,
        'controls' => [],
    ],*/
];
