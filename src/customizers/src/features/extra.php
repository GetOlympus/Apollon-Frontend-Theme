<?php

/**
 * Extra options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// EXTRA
    $slug.'-extra' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.features.extra.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// NAVS
    $slug.'-navs' => [
        'title'    => __('apollon.cz.features.navs.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'navs-enable' => [
                'label'    => __('apollon.cz.features.navs.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
        ],
    ],

// ADS
    $slug.'-ads' => [
        'title'    => __('apollon.cz.features.ads.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'ads-enable' => [
                'label'    => __('apollon.cz.features.ads.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
        ],
    ],

// ADBLOCKER
    $slug.'-adblocker' => [
        'title'    => __('apollon.cz.features.adblocker.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'adblocker-enable' => [
                'label'    => __('apollon.cz.features.adblocker.enable.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'checkbox',
            ],
        ],
    ],
];
