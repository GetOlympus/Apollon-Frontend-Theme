<?php

/**
 * Controls options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.design.controls.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        'global-control-height' => [
            'label'       => __('apollon.cz.design.global.control-height.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'placeholder' => apollonGetDefault('global-control-height'),
            ],
        ],
        'global-control-small-height' => [
            'label'       => __('apollon.cz.design.global.control-small-height.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'placeholder' => apollonGetDefault('global-control-small-height'),
            ],
        ],
        'global-control-large-height' => [
            'label'       => __('apollon.cz.design.global.control-large-height.title', OL_APOLLON_DICTIONARY),
            'priority'    => ++$priority,
            'type'        => 'number',
            'input_attrs' => [
                'min'         => 0,
                'max'         => 300,
                'step'        => 1,
                'placeholder' => apollonGetDefault('global-control-large-height'),
            ],
        ],
    ],
];
