<?php

/**
 * Forms options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// FORM
    $slug.'-forms' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.design.forms.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// LABELS
    $slug.'-forms-labels' => [
        'title'    => __('apollon.cz.design.forms.labels.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
        ],
    ],

// INPUTS
    $slug.'-forms-inputs' => [
        'title'    => __('apollon.cz.design.forms.inputs.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            $slug.'-forms-inputs-placeholder-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.placeholder', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'form-placeholder-color' => [
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

            $slug.'-forms-inputs-default-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.default', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'form-color' => [
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
            'form-background' => [
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

            $slug.'-forms-inputs-focus-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.focus', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'form-focus-color' => [
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
            'form-focus-background' => [
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

            $slug.'-forms-inputs-disabled-title' => array_merge($this->contents['control_subtitle'], [
                'label'    => __('apollon._.disabled', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
            ]),
            'form-disabled-color' => [
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
            'form-disabled-background' => [
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
        ],
    ],

// SELECTS
    $slug.'-forms-selects' => [
        'title'    => __('apollon.cz.design.forms.selects.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [],
    ],

// FORMS WIDTHS
    $slug.'-forms-widths' => [
        'title'    => __('apollon.cz.design.forms.widths.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'form-width-xsmall' => [
                'label'       => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 1,
                    'max'         => 1000,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('form-width-xsmall'),
                ],
            ],
            'form-width-small' => [
                'label'       => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 1,
                    'max'         => 1000,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('form-width-small'),
                ],
            ],
            'form-width-medium' => [
                'label'       => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 1,
                    'max'         => 1000,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('form-width-medium'),
                ],
            ],
            'form-width-large' => [
                'label'       => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'priority'    => ++$priority,
                'type'        => 'number',
                'input_attrs' => [
                    'min'         => 1,
                    'max'         => 1000,
                    'step'        => 1,
                    'placeholder' => apollonGetDefault('form-width-large'),
                ],
            ],
        ],
    ],
];
