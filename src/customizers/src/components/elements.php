<?php

/**
 * Elements options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// ELEMENTS
    $slug.'-elements' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.components.elements.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

    /*// Accordion
    $slug.'-accordion' => [
        'title'    => 'Accordion',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Alert
    $slug.'-alert' => [
        'title'    => 'Alert',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Badge
    $slug.'-badge' => [
        'title'    => 'Badge',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Card
    $slug.'-card' => [
        'title'    => 'Card',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Close
    $slug.'-close' => [
        'title'    => 'Close',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Countdown
    $slug.'-countdown' => [
        'title'    => 'Countdown',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Description list
    $slug.'-description-list' => [
        'title'    => 'Description List',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Drop
    $slug.'-drop' => [
        'title'    => 'Drop',
        'priority' => ++$priority,
        'controls' => [],
    ],*/

    // Dropdown
    $slug.'-dropdown' => [
        'title'    => 'Dropdown',
        'priority' => ++$priority,
        'controls' => [
            'dropdown-color' => [
                'label'    => __('apollon._.color', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'muted'   => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                    'link'    => __('apollon._.link', OL_APOLLON_DICTIONARY),
                    'inverse' => __('apollon._.inverse', OL_APOLLON_DICTIONARY),
                ],
            ],
            'dropdown-background' => [
                'label'    => __('apollon._.background', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'muted'     => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                    'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                ],
            ],
            'dropdown-shadow' => [
                'label'    => __('apollon._.shadow', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'none'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'medium' => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                    'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                ],
            ],
            'dropdown-click' => [
                'label'    => __('apollon.cz.components.dropdown.click.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            'dropdown-position' => [
                'label'    => __('apollon.cz.components.dropdown.position.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'left'    => __('apollon._.left', OL_APOLLON_DICTIONARY),
                    'center'  => __('apollon._.center', OL_APOLLON_DICTIONARY),
                    'right'   => __('apollon._.right', OL_APOLLON_DICTIONARY),
                    //'justify' => __('apollon._.justify', OL_APOLLON_DICTIONARY),
                ],
            ],
        ],
    ],

    /*// Icon
    $slug.'-icon' => [
        'title'    => 'Icon',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Label
    $slug.'-label' => [
        'title'    => 'Label',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Leader
    $slug.'-leader' => [
        'title'    => 'Leader',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Lightbox
    $slug.'-lightbox' => [
        'title'    => 'Lightbox',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // List
    $slug.'-list' => [
        'title'    => 'List',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Marker
    $slug.'-marker' => [
        'title'    => 'Marker',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Modal
    $slug.'-modal' => [
        'title'    => 'Modal',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Notification
    $slug.'-notification' => [
        'title'    => 'Notification',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Overlay
    $slug.'-overlay' => [
        'title'    => 'Overlay',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Placeholder
    $slug.'-placeholder' => [
        'title'    => 'Placeholder',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Position
    $slug.'-position' => [
        'title'    => 'Position',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Progress
    $slug.'-progress' => [
        'title'    => 'Progress',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Section
    $slug.'-section' => [
        'title'    => 'Section',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Slider
    $slug.'-slider' => [
        'title'    => 'Slider',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Sortable
    $slug.'-sortable' => [
        'title'    => 'Sortable',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Spinner
    $slug.'-spinner' => [
        'title'    => 'Spinner',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Tab
    $slug.'-tab' => [
        'title'    => 'Tab',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Table
    $slug.'-table' => [
        'title'    => 'Table',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Tile
    $slug.'-tile' => [
        'title'    => 'Tile',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Tooltip
    $slug.'-tooltip' => [
        'title'    => 'Tooltip',
        'priority' => ++$priority,
        'controls' => [],
    ],

    // Totop
    $slug.'-totop' => [
        'title'    => 'Totop',
        'priority' => ++$priority,
        'controls' => [],
    ],*/
];
