<?php

/**
 * Header options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$_contents = $this->contents['navs_contents'];
unset($_contents['copyright']);
unset($_contents['sidebar']);

// Add locations to nav contents
$locations = get_registered_nav_menus();

if (!empty($locations)) {
    $_contents['-'] = __('apollon._.locations', OL_APOLLON_DICTIONARY);

    foreach ($locations as $location => $description) {
        $_contents['location-'.$location] = '&mdash;&nbsp;'.$description;
    }
}

// Build controls
$controls = [];

// Build navs configurations
foreach (['top', 'main', 'sub'] as $nav) {
    // Main title
    $controls[$slug.'-website-header-'.$nav.'-title'] = array_merge($this->contents['control_title'], [
        'label'    => __('apollon.cz.layout.header.'.$nav.'.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);

    // Enable option
    $controls['nav-'.$nav.'-enable'] = [
        'label'    => __('apollon.cz.layout.header.default.enable.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];

    // Contents
    $controls[$slug.'-website-header-'.$nav.'-contents-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon.cz.layout.header.default.contents.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);
    $controls['nav-'.$nav.'-custom-text'] = [
        'label'    => __('apollon.cz.layout.header.default.custom-text.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'textarea',
    ];

    for ($i = 1; $i < 4; $i++) {
        $controls['nav-'.$nav.'-content-'.$i] = [
            'label'    => __('apollon.cz.layout.header.default.content-'.$i.'.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => $_contents,
        ];
    }

    // Optimisations
    $controls[$slug.'-website-header-'.$nav.'-optimisation-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon.cz.layout.header.default.optimisation.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);
    $controls['nav-'.$nav.'-mobile'] = [
        'label'    => __('apollon.cz.layout.header.default.mobile.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];

    // Layout
    $controls[$slug.'-website-header-'.$nav.'-layout-title'] = array_merge($this->contents['control_subtitle'], [
        'label'    => __('apollon.cz.layout.header.default.layout.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]);
    $controls['nav-'.$nav.'-template'] = [
        'label'    => __('apollon.cz.layout.header.default.template.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['nav-'.$nav.'-full-width'] = [
        'label'    => __('apollon.cz.layout.header.default.full-width.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $controls['nav-'.$nav.'-color'] = [
        'label'    => __('apollon.cz.layout.header.default.color.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'default'  => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'emphasis' => __('apollon._.emphasis', OL_APOLLON_DICTIONARY),
            'muted'    => __('apollon._.muted', OL_APOLLON_DICTIONARY),
            'link'     => __('apollon._.link', OL_APOLLON_DICTIONARY),
            'inverse'  => __('apollon._.inverse', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['nav-'.$nav.'-background'] = [
        'label'    => __('apollon.cz.layout.header.default.background.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'default'   => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'muted'     => __('apollon._.muted', OL_APOLLON_DICTIONARY),
            'secondary' => __('apollon._.secondary', OL_APOLLON_DICTIONARY),
            'primary'   => __('apollon._.primary', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['nav-'.$nav.'-font-size'] = [
        'label'    => __('apollon.cz.layout.header.default.font-size.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['nav-'.$nav.'-height'] = [
        'label'    => __('apollon.cz.layout.header.default.height.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'default' => __('apollon._.default', OL_APOLLON_DICTIONARY),
            'small'   => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'large'   => __('apollon._.large', OL_APOLLON_DICTIONARY),
        ],
    ];
    $controls['nav-'.$nav.'-padding'] = [
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
    'title'    => __('apollon.cz.layout.header.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => $controls,
];
