<?php

/**
 * Design options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$slug = 'dn';

return [
    'style-'.$slug => [
        'title'    => __('apollon.cz.design.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'sections' => array_merge(
            include_once __DIR__.S.'design'.S.'stylesheet.php',
            include_once __DIR__.S.'design'.S.'foundations.php',
            include_once __DIR__.S.'design'.S.'forms.php',
            include_once __DIR__.S.'design'.S.'elements.php',
            include_once __DIR__.S.'design'.S.'spacings.php',
            include_once __DIR__.S.'design'.S.'responsive.php',
        ),
    ],
];
