<?php

/**
 * Apollon assets hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.assets_links', function ($links) {
    $links = array_merge($links, [
        /*
        [
            'href' => OL_TPL_DIR_URI.'/app/manifest.json',
            'rel'  => 'manifest',
        ],
        [
            'href'  => OL_TPL_DIR_URI.'/app/img/safari-pinned-tab.svg',
            'color' => '#ffffff',
            'rel'   => 'mask-icon',
        ],
        [
            'href'  => OL_TPL_DIR_URI.'/app/img/favicon.ico',
            'sizes' => '16x16',
            'rel'   => 'icon',
            'type'  => 'icon',
        ],
        [
            'href'  => OL_TPL_DIR_URI.'/app/img/favicon-57x57.png',
            'sizes' => '57x57',
            'rel'   => 'apple-touch-icon',
        ],
        [
            'href'  => OL_TPL_DIR_URI.'/app/img/favicon-72x72.png',
            'sizes' => '72x72',
            'rel'   => 'apple-touch-icon',
        ],
        */
    ]);

    // Check CSS in file or inline
    if (!apply_filters('ol.apollon.assets_css_in_file', false)) {
        return $links;
    }

    $ver = apollonGetOption('assets-timestamp', time());

    /**
     * Create `main.css` based on *.less files
     */
    do_action('ol.apollon.assets_generate_targetfile', 'css');

    return array_merge($links, [
        [
            'id'   => 'main-css',
            'href' => apply_filters('ol.apollon.assets_base_url', null).'main.css?v='.$ver,
            'rel'  => 'stylesheet',
        ],
    ]);
}, 10, 1);

add_filter('ol.apollon.assets_output', function ($output = '') {
    /**
     * Override css options.
     *
     * @return array
     */
    $options = apply_filters('ol.apollon.assets_options', []);

    $output = '/** This file is auto-generated at '.date(DATE_RFC2822).' */'."\n\n";

    foreach ($options as $attr => $value) {
        $output .= '@'.$attr.': '.(string)$value.';'."\n";
    }

    return apply_filters('ol.apollon.assets_options_extra', $output);
}, 10, 1);

add_filter('ol.apollon.assets_scripts', function ($scripts) {
    return array_merge($scripts, []);
}, 10, 1);

// INCLUDES

include __DIR__.S.'assets'.S.'files.php';
include __DIR__.S.'assets'.S.'variables.php';
