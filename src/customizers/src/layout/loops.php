<?php

/**
 * Loops options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$sections = [];

// LOOPS
$sections[$slug.'-loops'] = array_merge($this->contents['section_title'], [
    'title'    => __('apollon.cz.layout.loops.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
]);

foreach (['homepage', 'archives', 'search'] as $s) {
    $sections[$slug.'-loops-'.$s] = [
        'title'    => __('apollon.cz.layout.'.$s.'.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [],
    ];

    if ('search' !== $s) {
        $sections[$slug.'-loops-'.$s]['description'] = __('apollon.cz.layout.'.$s.'.desc', OL_APOLLON_DICTIONARY);
    }

    $sections[$slug.'-loops-'.$s]['controls'][$s.'-use-default'] = [
        'label'       => __('apollon.cz.layout.default.use-default.title', OL_APOLLON_DICTIONARY),
        'description' => sprintf(
            __('apollon.cz.layout.default.use-default.desc', OL_APOLLON_DICTIONARY),
            admin_url('/customize.php?autofocus[section]=lt-website-configs')
        ),
        'priority'    => ++$priority,
        'type'        => 'checkbox',
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-posttypes'] = [
        'label'    => __('apollon.cz.layout.default.grid-posttypes.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'apollon-multicheck',
        'choices'  => $this->contents['posttypes'],
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-container'] = [
        'label'    => __('apollon.cz.layout.default.grid-container.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'xsmall' => __('apollon._.xsmall', OL_APOLLON_DICTIONARY),
            'small'  => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'large'  => __('apollon._.large', OL_APOLLON_DICTIONARY),
            'xlarge' => __('apollon._.xlarge', OL_APOLLON_DICTIONARY),
            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
        ],
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-padding'] = [
        'label'    => __('apollon.cz.layout.default.grid-padding.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-content'] = [
        'label'    => __('apollon.cz.layout.default.grid-content.title', OL_APOLLON_DICTIONARY),
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
            'expand' => __('apollon._.expand', OL_APOLLON_DICTIONARY),
        ],
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-columns'] = [
        'label'       => __('apollon.cz.layout.default.grid-columns.title', OL_APOLLON_DICTIONARY),
        'priority'    => ++$priority,
        'type'        => 'number',
        'input_attrs' => [
            'max'  => 5,
            'min'  => 1,
            'step' => 1,
        ],
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-gap'] = [
        'label'    => __('apollon.cz.layout.default.grid-gap.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'select',
        'choices'  => [
            'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
            'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
            'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
            'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
        ],
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-divider'] = [
        'label'    => __('apollon.cz.layout.default.grid-divider.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-match-height'] = [
        'label'    => __('apollon.cz.layout.default.grid-match-height.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-sidebar-position'] = [
        'label'    => __('apollon.cz.layout.default.sidebar-position.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'radio',
        'choices'  => [
            'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
            'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
            'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
        ],
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-sidebar-1'] = [
        'label'    => __('apollon.cz.layout.default.sidebar-1.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];
    $sections[$slug.'-loops-'.$s]['controls'][$s.'-sidebar-2'] = [
        'label'    => __('apollon.cz.layout.default.sidebar-2.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'type'     => 'checkbox',
    ];

    if ('homepage' !== $s) {
        $sections[$slug.'-loops-'.$s]['controls'][$s.'-sidebars'] = [
            'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ];
    }
}

return $sections;
