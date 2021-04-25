<?php

/**
 * Features options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

$slug = 'fs';

return [
    'features-'.$slug => [
        'title'    => __('apollon.cz.features.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
        'sections' => array_merge(
            include_once __DIR__.S.'features'.S.'core.php',
            include_once __DIR__.S.'features'.S.'theme.php',
            //include_once __DIR__.S.'features'.S.'extra.php',
        ),
    ],
];
