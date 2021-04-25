<?php

/**
 * Components options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$slug = 'cs';

return [
    'components-'.$slug => [
        'title'    => __('apollon.cz.components.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'sections' => array_merge(
            include_once __DIR__.S.'components'.S.'core.php',
            include_once __DIR__.S.'components'.S.'skeleton.php',
            include_once __DIR__.S.'components'.S.'navs.php',
            include_once __DIR__.S.'components'.S.'elements.php',
        ),
    ],
];
