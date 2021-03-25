<?php

/**
 * Website options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// CONFIGURATIONS
    $slug.'-website-configs'  => include_once __DIR__.S.'website'.S.'configurations.php',

// WEBSITE
    $slug.'-website' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.layout.website.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// HEADER
    $slug.'-website-header'   => include_once __DIR__.S.'website'.S.'header.php',

// SIDEBARS
    $slug.'-website-sidebars'   => include_once __DIR__.S.'website'.S.'sidebars.php',

// MAIN
    $slug.'-website-main'   => include_once __DIR__.S.'website'.S.'main.php',

// FOOTER
    $slug.'-website-footer'   => include_once __DIR__.S.'website'.S.'footer.php',
];
