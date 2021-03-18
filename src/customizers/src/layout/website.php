<?php

/**
 * Website options
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

return [
// WEBSITE
    $slug.'-website' => array_merge($this->contents['section_title'], [
        'title'    => __('apollon.cz.layout.website.title', OL_APOLLON_DICTIONARY),
        'priority' => ++$priority,
    ]),

// CONFIGURATIONS
    $slug.'-website-configs'  => include_once __DIR__.S.'website'.S.'configurations.php',

// HEADER
    $slug.'-website-header'   => include_once __DIR__.S.'website'.S.'header.php',

// FOOTER
    $slug.'-website-footer'   => include_once __DIR__.S.'website'.S.'footer.php',

// HOMEPAGE
    $slug.'-website-homepage' => include_once __DIR__.S.'website'.S.'homepage.php',
];
