<?php

/**
 * Theme options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

// Get all social icons
$all_icons = apollonGetSocials('all');

$icons = [];
$svg   = '%s %s';

// Build icons
foreach ($all_icons as $icon => $values) {
    $icons[$icon] = sprintf($svg, $values['svg'], $values['name']);
}

return [
// THEME
    $slug.'-theme' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.features.theme.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// SOCIAL
    $slug.'-social' => [
        'title'    => __('apollon.cz.features.social.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'social-enable' => [
                'label'    => __('apollon.cz.features.social.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            'social-icons' => [
                'label'    => __('apollon.cz.features.social.icons.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'apollon-multicheck',
                'choices'  => $icons,
            ],
        ],
    ],

// BACK TO TOP
    $slug.'-backtotop' => [
        'title'    => __('apollon.cz.features.backtotop.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'backtotop-enable' => [
                'label'    => __('apollon.cz.features.backtotop.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],

            // Optimization
            $slug.'-backtotop-optimisation' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.backtotop.optimisation.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'backtotop-label' => [
                'label'    => __('apollon.cz.features.backtotop.label.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'backtotop-icon' => [
                'label'    => __('apollon.cz.features.backtotop.icon.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            'backtotop-mobile' => [
                'label'    => __('apollon.cz.features.backtotop.mobile.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],

            // Layout
            $slug.'-backtotop-layout' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.features.backtotop.layout.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'backtotop-margin' => [
                'label'    => __('apollon.cz.features.backtotop.margin.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'small' => __('apollon._.small', OL_APOLLON_DICTIONARY),
                    'large' => __('apollon._.large', OL_APOLLON_DICTIONARY),
                ],
            ],
            'backtotop-position' => [
                'label'    => __('apollon.cz.features.backtotop.position.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                    'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                    'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                ],
            ],
            'backtotop-style' => [
                'label'    => __('apollon.cz.features.backtotop.style.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
                    'muted'     => __('apollon._.muted', OL_APOLLON_DICTIONARY),
                    'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
                    'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
                    'link'      => __('apollon._.link', OL_APOLLON_DICTIONARY),
                ],
            ],
        ],
    ],

// BREADCRUMB
    $slug.'-breadcrumb' => [
        'title'    => __('apollon.cz.features.breadcrumb.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'breadcrumb-enable' => [
                'label'    => __('apollon.cz.features.breadcrumb.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
        ],
    ],

// OPEN GRAPH
    $slug.'-opengraph' => [
        'title'       => __('apollon.cz.features.opengraph.title', OL_APOLLON_DICTIONARY),
        'description' => __('apollon.cz.features.opengraph.desc', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'controls'    => [
            'opengraph-enable' => [
                'label'    => __('apollon.cz.features.opengraph.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
            'opengraph-twitter' => [
                'label'       => __('apollon.cz.features.opengraph.twitter.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => __('apollon.cz.features.opengraph.twitter.placeholder', OL_APOLLON_DICTIONARY),
                ],
            ],
            'opengraph-facebook' => [
                'label'       => __('apollon.cz.features.opengraph.facebook.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => __('apollon.cz.features.opengraph.facebook.placeholder', OL_APOLLON_DICTIONARY),
                ],
            ],
            'opengraph-facebookapp' => [
                'label'       => __('apollon.cz.features.opengraph.facebookapp.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'text',
                'input_attrs' => [
                    'placeholder' => __('apollon.cz.features.opengraph.facebookapp.placeholder', OL_APOLLON_DICTIONARY),
                ],
            ],
        ],
    ],
];
