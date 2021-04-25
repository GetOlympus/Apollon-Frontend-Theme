<?php

/**
 * Main options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.layout.main.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        'website-posttypes' => [
            'label'    => __('apollon.cz.layout.default.grid-posttypes.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'apollon-multicheck',
            'choices'  => $this->contents['posttypes'],
        ],
        'website-container' => [
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
        ],
        'website-padding' => [
            'label'    => __('apollon.cz.layout.default.grid-padding.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ],
        'website-content' => [
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
        ],
        'website-columns' => [
            'label'       => __('apollon.cz.layout.default.grid-columns.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'max'  => 5,
                'min'  => 1,
                'step' => 1,
            ],
        ],
        'website-gap' => [
            'label'    => __('apollon.cz.layout.default.grid-gap.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'select',
            'choices'  => [
                'small'    => __('apollon._.small', OL_APOLLON_DICTIONARY),
                'medium'   => __('apollon._.medium', OL_APOLLON_DICTIONARY),
                'large'    => __('apollon._.large', OL_APOLLON_DICTIONARY),
                'collapse' => __('apollon._.collapse', OL_APOLLON_DICTIONARY),
            ],
        ],
        'website-divider' => [
            'label'    => __('apollon.cz.layout.default.grid-divider.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ],
        'website-match-height' => [
            'label'    => __('apollon.cz.layout.default.grid-match-height.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ],
    ],
];
