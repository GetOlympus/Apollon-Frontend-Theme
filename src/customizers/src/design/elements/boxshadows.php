<?php

/**
 * Boxshadows options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
    'title'    => __('apollon.cz.design.boxshadows.title', OL_APOLLON_DICTIONARY),
    'priority' => ++$priority,
    'controls' => [
        'global-small-box-shadow' => [
            'label'    => __('apollon.cz.design.global.small-box-shadow.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'text',
        ],
        'global-medium-box-shadow' => [
            'label'    => __('apollon.cz.design.global.medium-box-shadow.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'text',
        ],
        'global-large-box-shadow' => [
            'label'    => __('apollon.cz.design.global.large-box-shadow.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'text',
        ],
        'global-xlarge-box-shadow' => [
            'label'    => __('apollon.cz.design.global.xlarge-box-shadow.title', OL_APOLLON_DICTIONARY),
            'priority' => ++$priority,
            'type'     => 'text',
        ],
    ],
];
