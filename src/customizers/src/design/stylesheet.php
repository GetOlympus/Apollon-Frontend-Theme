<?php

/**
 * Stylesheet options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// STYLESHEET
    $slug.'-stylesheet' => [
        'title'    => __('apollon.cz.design.stylesheet.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'controls' => [
            'css-location' => [
                'label'    => __('apollon.cz.design.stylesheet.location.title', OL_APOLLON_DICTIONARY),
                'priority' => ++$priority,
                'type'     => 'radio',
                'choices'  => [
                    'inline' => __('apollon.cz.design.stylesheet.location.inline', OL_APOLLON_DICTIONARY),
                    'css'    => __('apollon.cz.design.stylesheet.location.css', OL_APOLLON_DICTIONARY),
                ],
                'settings' => [
                    [
                        'default'           => apollonGetDefault('css-location'),
                        'sanitize_callback' => [$this, 'zeusSanitizeRadio'],
                    ],
                ],
            ],
        ],
    ],
];
