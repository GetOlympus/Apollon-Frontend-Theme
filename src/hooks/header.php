<?php

/**
 * Apollon header hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// HEADER

add_filter('ol.apollon.header_metas', function ($metas) {
    return array_merge($metas, [
        /*
        [
            'name'    => 'msapplication-TileColor',
            'content' => '#ffffff',
        ],
        [
            'name'    => 'msapplication-TileImage',
            'content' => $_header['urls']['themeuri'].'/app/img/mstile-144x144.png',
        ],
        [
            'name'    => 'theme-color',
            'content' => '#ffffff',
        ],
        */
    ]);
});

add_filter('ol.apollon.header_links', function ($links) {
    return array_merge($links, [
        [
            'href' => 'https://fonts.googleapis.com/css?family=Karla|Source+Sans+Pro:400',
            'rel'  => 'stylesheet',
        ],
        [
            'href' => 'https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css',
            'rel'  => 'stylesheet',
        ],
        /*
        [
            'href' => $_header['urls']['themeuri'].'/app/css/apollon.css',
            'rel'  => 'stylesheet',
        ],
        [
            'href' => $_header['urls']['themeuri'].'/app/manifest.json',
            'rel'  => 'manifest',
        ],
        [
            'href'  => $_header['urls']['themeuri'].'/app/img/safari-pinned-tab.svg',
            'color' => '#ffffff',
            'rel'   => 'mask-icon',
        ],
        [
            'href'  => $_header['urls']['themeuri'].'/app/img/favicon.ico',
            'sizes' => '16x16',
            'rel'   => 'icon',
            'type'  => 'icon',
        ],
        [
            'href'  => $_header['urls']['themeuri'].'/app/img/favicon-57x57.png',
            'sizes' => '57x57',
            'rel'   => 'apple-touch-icon',
        ],
        [
            'href'  => $_header['urls']['themeuri'].'/app/img/favicon-72x72.png',
            'sizes' => '72x72',
            'rel'   => 'apple-touch-icon',
        ],
        */
    ]);
});

add_filter('ol.apollon.header_scripts', function ($scripts) {
    return array_merge($scripts, [
        [
            'src' => 'https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js',
        ],
        [
            'src' => 'https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js',
        ],
    ]);
});

add_filter('ol.apollon.header_options', function ($options) {
    return array_merge($options, [
        // Grid
        'grid_container' => apollonGetOption('grid_container'),

        // Top nav
        'topnav_enable'     => apollonGetOption('topnav_enable'),
        'topnav_customtext' => apollonGetOption('topnav_customtext'),
        'topnav_content_1'  => apollonGetOption('topnav_content_1'),
        'topnav_content_2'  => apollonGetOption('topnav_content_2'),
        'topnav_content_3'  => apollonGetOption('topnav_content_3'),
        'topnav_mobile'     => apollonGetOption('topnav_mobile'),
        'topnav_template'   => apollonGetOption('topnav_template'),
        'topnav_fullwidth'  => apollonGetOption('topnav_fullwidth'),
        'topnav_background' => apollonGetOption('topnav_background'),
        'topnav_fontsize'   => apollonGetOption('topnav_fontsize'),
        'topnav_lineheight' => apollonGetOption('topnav_lineheight'),
        'topnav_padding'    => apollonGetOption('topnav_padding'),

        // Main nav
        'mainnav_enable'     => apollonGetOption('mainnav_enable'),
        'mainnav_customtext' => apollonGetOption('mainnav_customtext'),
        'mainnav_content_1'  => apollonGetOption('mainnav_content_1'),
        'mainnav_content_2'  => apollonGetOption('mainnav_content_2'),
        'mainnav_content_3'  => apollonGetOption('mainnav_content_3'),
        'mainnav_mobile'     => apollonGetOption('mainnav_mobile'),
        'mainnav_template'   => apollonGetOption('mainnav_template'),
        'mainnav_fullwidth'  => apollonGetOption('mainnav_fullwidth'),
        'mainnav_background' => apollonGetOption('mainnav_background'),
        'mainnav_fontsize'   => apollonGetOption('mainnav_fontsize'),
        'mainnav_lineheight' => apollonGetOption('mainnav_lineheight'),
        'mainnav_padding'    => apollonGetOption('mainnav_padding'),

        // Sub nav
        'subnav_enable'     => apollonGetOption('subnav_enable'),
        'subnav_customtext' => apollonGetOption('subnav_customtext'),
        'subnav_content_1'  => apollonGetOption('subnav_content_1'),
        'subnav_content_2'  => apollonGetOption('subnav_content_2'),
        'subnav_content_3'  => apollonGetOption('subnav_content_3'),
        'subnav_mobile'     => apollonGetOption('subnav_mobile'),
        'subnav_template'   => apollonGetOption('subnav_template'),
        'subnav_fullwidth'  => apollonGetOption('subnav_fullwidth'),
        'subnav_background' => apollonGetOption('subnav_background'),
        'subnav_fontsize'   => apollonGetOption('subnav_fontsize'),
        'subnav_lineheight' => apollonGetOption('subnav_lineheight'),
        'subnav_padding'    => apollonGetOption('subnav_padding'),

        // Global
        'nav_menulabel'     => apollonGetOption('nav_menulabel'),
        'nav_shadow'        => apollonGetOption('nav_shadow'),
        'nav_sticky'        => apollonGetOption('nav_sticky'),

        // Dropdown
        'dropdown_click'    => apollonGetOption('dropdown_click'),
        'dropdown_position' => apollonGetOption('dropdown_position'),
        'dropdown_dropbar'  => apollonGetOption('dropdown_dropbar'),
    ]);
});

add_action('ol.apollon.wp_head_after', function ($header) {
    //$primary = apollonGetOption('color_primary');
    //echo '<style>.uk-text-primary,.uk-link,a{color:'.$primary.'!important}</style>';
});


// LOGO

add_filter('ol.apollon.logo_contents', function ($contents) {
    return $contents;
});

add_filter('ol.apollon.logo_image', function ($image) {
    // Get `logos_retina`
    $default    = apollonGetOption('logos_default');
    $retina     = apollonGetOption('logos_retina');
    $use_slogan = apollonGetOption('logos_slogan');

    return array_merge($image, [
        'src'    => !empty($default) ? $default : (!empty($retina) ? $retina : OL_TPL_DIR_URI.'/app/img/apollon-h.png'),
        'height' => apollonGetOption('logos_maxheight'),
        'width'  => apollonGetOption('logos_maxwidth'),
        'slogan' => $use_slogan ? OL_BLOG_DESCRIPTION : '',
    ]);
});


// WRAPPERS

add_filter('ol.apollon.body_wrapper_open', function ($header) {
    $grid = apollonGetOption('grid_container');

    return sprintf(
        '<div class="uk-container%s">',
        'expand' === $grid ? '' : ' uk-container-'.$grid
    );
});
