<?php

/**
 * Configurations options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.layout.configurations.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        // Border
        $slug.'-website-border-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon.cz.layout.configurations.border.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'website-border-color' => [
            'label'       => __('apollon.cz.layout.configurations.border-color.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'color',
            'input_attrs' => [
                'placeholder' => apollonGetDefault('website-border-color'),
            ],
            'settings'    => [
                [
                    'default'           => apollonGetDefault('website-border-color'),
                    'sanitize_callback' => [$this, 'zeusSanitizeColor'],
                ],
            ],
        ],
        'website-border-mode' => [
            'label'    => __('apollon.cz.layout.configurations.border-mode.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'full'   => __('apollon._.full', OL_APOLLON_DICTIONARY),
                'top'    => __('apollon._.top', OL_APOLLON_DICTIONARY),
                'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
                'bottom' => __('apollon._.bottom', OL_APOLLON_DICTIONARY),
                'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-border-mode'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ],
            ],
        ],
        'website-border-width' => [
            'label'       => __('apollon.cz.layout.configurations.border-width.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'text',
            'input_attrs' => [
                'placeholder' => apollonGetDefault('website-border-width'),
            ],
            'settings'    => [
                [
                    'default'           => apollonGetDefault('website-border-width'),
                    'sanitize_callback' => [$this, 'zeusSanitizeText'],
                ],
            ],
        ],

        // Grid
        $slug.'-website-grid-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon.cz.layout.configurations.grid.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'website-grid-container' => [
            'label'    => __('apollon.cz.layout.configurations.grid-container.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'medium' => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
                'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-grid-container'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ]
            ],
        ],
        'website-grid-column-gap' => [
            'label'    => __('apollon.cz.layout.configurations.grid-column-gap.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-grid-column-gap'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ]
            ],
        ],
        'website-grid-row-gap' => [
            'label'    => __('apollon.cz.layout.configurations.grid-row-gap.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
                'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-grid-row-gap'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ]
            ],
        ],
        'website-grid-divider' => [
            'label'    => __('apollon.cz.layout.configurations.grid-divider.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-grid-divider'),
                    'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                ]
            ],
        ],
        'website-grid-match-height' => [
            'label'    => __('apollon.cz.layout.configurations.grid-match-height.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-grid-match-height'),
                    'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                ]
            ],
        ],

        // Nav
        $slug.'-website-nav-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon.cz.layout.configurations.nav.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'website-nav-menu' => [
            'label'       => __('apollon.cz.layout.configurations.nav-menu.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'text',
            'input_attrs' => [
                'placeholder' => __('apollon.cz.layout.configurations.nav-menu.placeholder', OL_APOLLON_DICTIONARY),
            ],
            'settings'    => [
                [
                    'default'           => apollonGetDefault('website-nav-menu'),
                    'sanitize_callback' => [$this, 'zeusSanitizeNoHtml'],
                ]
            ],
        ],
        'website-nav-shadow' => [
            'label'    => __('apollon.cz.layout.configurations.nav-shadow.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'none'   => __('apollon._.none', OL_APOLLON_DICTIONARY),
                'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'medium' => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-nav-shadow'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ]
            ],
        ],
        'website-nav-sticky' => [
            'label'    => __('apollon.cz.layout.configurations.nav-sticky.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'static'   => __('apollon._.static', OL_APOLLON_DICTIONARY),
                'sticky'   => __('apollon._.sticky', OL_APOLLON_DICTIONARY),
                'scrollup' => __('apollon._.scrollup', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-nav-sticky'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ]
            ],
        ],

        // Dropdown
        $slug.'-website-dropdown-title' => array_merge($this->contents['control_subtitle'], [
            'label'    => __('apollon.cz.layout.configurations.dropdown.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
        ]),
        'website-dropdown-click' => [
            'label'    => __('apollon.cz.layout.configurations.dropdown-click.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-dropdown-click'),
                    'sanitize_callback' => [$this, 'zeusSanitizeCheckbox'],
                ]
            ],
        ],
        'website-dropdown-position' => [
            'label'    => __('apollon.cz.layout.configurations.dropdown-position.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
                'left'    => __('apollon._.left', OL_APOLLON_DICTIONARY),
                'center'  => __('apollon._.center', OL_APOLLON_DICTIONARY),
                'right'   => __('apollon._.right', OL_APOLLON_DICTIONARY),
                //'justify' => __('apollon._.justify', OL_APOLLON_DICTIONARY),
            ],
            'settings' => [
                [
                    'default'           => apollonGetDefault('website-dropdown-position'),
                    'sanitize_callback' => [$this, 'zeusSanitizeSelect'],
                ]
            ],
        ],
    ],
];
