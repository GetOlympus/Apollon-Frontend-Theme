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
            'label'    => __('apollon.cz.layout.configurations.border-color.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'color',
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
        ],
        'website-border-width' => [
            'label'    => __('apollon.cz.layout.configurations.border-width.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'text',
        ],
    ],
];
