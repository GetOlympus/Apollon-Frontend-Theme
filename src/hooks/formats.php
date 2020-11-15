<?php

/**
 * Apollon formats hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// FORMATS

// POST FORMAT

add_filter('ol.apollon.format_post_display', function ($tpl) {
    return $tpl;
});

add_filter('ol.apollon.format_post_default_default_content', function ($html, $contents) {
    return $html;
}, 10, 2);
add_filter('ol.apollon.format_post_default_dribbble_content', function ($html, $contents) {
    return $html;
}, 10, 2);
add_filter('ol.apollon.format_post_default_text_content', function ($html, $contents) {
    return $html;
}, 10, 2);
