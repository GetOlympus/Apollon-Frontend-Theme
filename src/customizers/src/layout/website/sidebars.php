<?php

/**
 * Sidebars options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.layout.sidebars.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        'website-sidebar-position' => [
            'label'    => __('apollon.cz.layout.default.sidebar-position.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'radio',
            'choices'  => [
                'left'   => __('apollon._.left', OL_APOLLON_DICTIONARY),
                'center' => __('apollon._.center', OL_APOLLON_DICTIONARY),
                'right'  => __('apollon._.right', OL_APOLLON_DICTIONARY),
            ],
        ],
        'website-sidebar-1' => [
            'label'    => __('apollon.cz.layout.default.sidebar-1.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ],
        'website-sidebar-2' => [
            'label'    => __('apollon.cz.layout.default.sidebar-2.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ],
        'website-sidebars' => [
            'label'    => __('apollon.cz.layout.default.sidebars.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'checkbox',
        ],
    ],
];
