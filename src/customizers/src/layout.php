<?php

/**
 * Style customizer options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$slug = 'lt';

return [
    'layout-'.$slug => [
        'title'    => __('apollon.cz.layout.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'sections' => array_merge(
            include_once __DIR__.S.'layout'.S.'website.php',
            include_once __DIR__.S.'layout'.S.'loops.php',
            include_once __DIR__.S.'layout'.S.'pages.php',
            include_once __DIR__.S.'layout'.S.'cpts.php',
        ),
    ],
];
