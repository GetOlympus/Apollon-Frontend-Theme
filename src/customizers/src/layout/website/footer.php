<?php

/**
 * Footer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$_contents = $this->contents['navs_contents'];
unset($_contents['custom']);

// Build controls
$controls = [];

// Build navs configurations
foreach (['top', 'main', 'sub'] as $nav) {
    // Main title
    $controls[$slug.'-website-footer-'.$nav.'-title'] = array_merge($this->contents['control_title'], [
        'label'    => __('apollon.cz.layout.footer.'.$nav.'.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);

    // Enable option
    $controls['section-'.$nav.'-enable'] = [
        'label'    => __('apollon.cz.layout.footer.default.enable.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];

    // Contents
    $controls[$slug.'-website-footer-'.$nav.'-contents-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon.cz.layout.header.default.contents.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);

    for ($i = 1; $i < 5; $i++) {
        $controls['section-'.$nav.'-content-'.$i] = [
            'label'    => __('apollon.cz.layout.header.default.content-'.$i.'.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => $_contents,
        ];
    }

    // Optimisations
    $controls[$slug.'-website-footer-'.$nav.'-optimisation-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon.cz.layout.header.default.optimisation.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);
    $controls['section-'.$nav.'-mobile'] = [
        'label'    => __('apollon.cz.layout.header.default.mobile.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];

    for ($i = 1; $i < 5; $i++) {
        $controls['section-'.$nav.'-size-'.$i] = [
            'label'    => __('apollon.cz.layout.header.default.size-'.$i.'.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                '1-6'    => __('apollon._.1-6', OL_APOLLON_DICTIONARY),
                '1-5'    => __('apollon._.1-5', OL_APOLLON_DICTIONARY),
                '1-4'    => __('apollon._.1-4', OL_APOLLON_DICTIONARY),
                '1-3'    => __('apollon._.1-3', OL_APOLLON_DICTIONARY),
                '2-5'    => __('apollon._.2-5', OL_APOLLON_DICTIONARY),
                '1-2'    => __('apollon._.1-2', OL_APOLLON_DICTIONARY),
                '3-5'    => __('apollon._.3-5', OL_APOLLON_DICTIONARY),
                '2-3'    => __('apollon._.2-3', OL_APOLLON_DICTIONARY),
                '3-4'    => __('apollon._.3-4', OL_APOLLON_DICTIONARY),
                '4-5'    => __('apollon._.4-5', OL_APOLLON_DICTIONARY),
                '5-6'    => __('apollon._.5-6', OL_APOLLON_DICTIONARY),
                '1-1'    => __('apollon._.1-1', OL_APOLLON_DICTIONARY),
                'auto'   => __('apollon._.auto', OL_APOLLON_DICTIONARY),
                'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
            ],
        ];
    }

    // Layout
    $controls[$slug.'-website-footer-'.$nav.'-layout-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon.cz.layout.header.default.layout.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);
    $controls['section-'.$nav.'-full-width'] = [
        'label'    => __('apollon.cz.layout.header.default.full-width.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $controls['section-'.$nav.'-color'] = [
        'label'    => __('apollon.cz.layout.header.default.color.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'dark'  => __('apollon._.dark', OL_APOLLON_DICTIONARY),
            'light' => __('apollon._.light', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['section-'.$nav.'-background'] = [
        'label'    => __('apollon.cz.layout.header.default.background.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'none'      => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'muted'     => __('apollon._.muted', OL_APOLLON_DICTIONARY),
            'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
            'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['section-'.$nav.'-font-size'] = [
        'label'    => __('apollon.cz.layout.header.default.font-size.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'number',
    ];
    $controls['section-'.$nav.'-line-height'] = [
        'label'    => __('apollon.cz.layout.header.default.line-height.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'number',
    ];
    $controls['section-'.$nav.'-padding'] = [
        'label'    => __('apollon.cz.layout.header.default.padding.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
        ],
    ];
}

unset($_contents);

return [
    'title'    => __('apollon.cz.layout.footer.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => $controls,
];
