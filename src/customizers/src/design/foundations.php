<?php

/**
 * Foundations options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// FOUNDATIONS
    $slug.'-foundations' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.foundations.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// TYPOGRAPHY
    $slug.'-typography' => [
        'title'    => __('apollon.cz.design.typography.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            // Globals
            $slug.'-globals-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.global', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'global-font-family' => [
                'label'    => __('apollon.cz.design.global.font-family.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-font-size' => [
                'label'    => __('apollon.cz.design.global.font-size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-line-height' => [
                'label'    => __('apollon.cz.design.global.line-height.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-small-font-size' => [
                'label'    => __('apollon.cz.design.global.small-font-size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-medium-font-size' => [
                'label'    => __('apollon.cz.design.global.medium-font-size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-large-font-size' => [
                'label'    => __('apollon.cz.design.global.large-font-size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-xlarge-font-size' => [
                'label'    => __('apollon.cz.design.global.xlarge-font-size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'global-2xlarge-font-size' => [
                'label'    => __('apollon.cz.design.global.2xlarge-font-size.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],

            // Headings
            $slug.'-headings-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon.cz.design.heading.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'base-heading-font-family' => [
                'label'    => __('apollon.cz.design.heading.font-family.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'base-heading-font-weight' => [
                'label'       => __('apollon.cz.design.heading.font-weight.title', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'  => 100,
                    'max'  => 900,
                    'step' => 100,
                ],
            ],
            'base-heading-font-style' => [
                'label'    => __('apollon.cz.design.heading.font-style.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'inherit' => __('apollon._.inherit', OL_APOLLON_DICTIONARY),
                    'initial' => __('apollon._.initial', OL_APOLLON_DICTIONARY),
                    'italic'  => __('apollon._.italic', OL_APOLLON_DICTIONARY),
                    'normal'  => __('apollon._.normal', OL_APOLLON_DICTIONARY),
                    'oblique' => __('apollon._.oblique', OL_APOLLON_DICTIONARY),
                    'revert'  => __('apollon._.revert', OL_APOLLON_DICTIONARY),
                    'unset'   => __('apollon._.unset', OL_APOLLON_DICTIONARY),
                ],
            ],
            'base-heading-letter-spacing' => [
                'label'    => __('apollon.cz.design.heading.letter-spacing.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'text',
            ],
            'base-heading-text-transform' => [
                'label'    => __('apollon.cz.design.heading.text-transform.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'select',
                'choices'  => [
                    'capitalize' => __('apollon._.capitalize', OL_APOLLON_DICTIONARY),
                    'inherit'    => __('apollon._.inherit', OL_APOLLON_DICTIONARY),
                    'initial'    => __('apollon._.initial', OL_APOLLON_DICTIONARY),
                    'lowercase'  => __('apollon._.lowercase', OL_APOLLON_DICTIONARY),
                    'none'       => __('apollon._.none', OL_APOLLON_DICTIONARY),
                    'revert'     => __('apollon._.revert', OL_APOLLON_DICTIONARY),
                    'unset'      => __('apollon._.unset', OL_APOLLON_DICTIONARY),
                    'uppercase'  => __('apollon._.uppercase', OL_APOLLON_DICTIONARY),
                ],
            ],
        ],
    ],

// COLORS
    $slug.'-colors' => [
        'title'    => __('apollon.cz.design.colors.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'global-color' => [
                'label'    => __('apollon.cz.design.global.color.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-emphasis-color' => [
                'label'    => __('apollon.cz.design.global.emphasis-color.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-muted-color' => [
                'label'    => __('apollon.cz.design.global.muted-color.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-link-color' => [
                'label'    => __('apollon.cz.design.global.link-color.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-link-hover-color' => [
                'label'    => __('apollon.cz.design.global.link-hover-color.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-inverse-color' => [
                'label'    => __('apollon.cz.design.global.inverse-color.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
        ],
    ],

// BACKGROUNDS
    $slug.'-backgrounds' => [
        'title'    => __('apollon.cz.design.backgrounds.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'global-background' => [
                'label'    => __('apollon.cz.design.global.background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-muted-background' => [
                'label'    => __('apollon.cz.design.global.muted-background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-primary-background' => [
                'label'    => __('apollon.cz.design.global.primary-background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-secondary-background' => [
                'label'    => __('apollon.cz.design.global.secondary-background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-success-background' => [
                'label'    => __('apollon.cz.design.global.success-background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-warning-background' => [
                'label'    => __('apollon.cz.design.global.warning-background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
            'global-danger-background' => [
                'label'    => __('apollon.cz.design.global.danger-background.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'color',
            ],
        ],
    ],
];
