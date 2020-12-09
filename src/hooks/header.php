<?php

/**
 * Apollon header hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// HEADER

add_action('ol.apollon.header_build_navbar', function ($nav, $level, $options) {
    // Build useful vars
    $level = (string) $level;
    $navcontent = 'content_'.$level;

    if (!isset($options[$navcontent]) || empty($options[$navcontent])) {
        return;
    }

    $content = $options[$navcontent];

    // Check content
    if (!in_array($content, ['custom', 'logo', 'menu', 'search'])) {
        return;
    }

    // Custom text case
    if ('custom' === $content) {
        echo apply_filters('ol.apollon.navbar_custom_text', sprintf(
            '<span class="uk-navbar-item %s">%s</span>',
            $nav.'nav-customtext',
            $options['customtext']
        ));

        return;
    }

    // Other default WP contents cases
    if ('logo' === $content) {
        $_file = 'logo.php';
        $_vars = [
            'css' => 'uk-navbar-item uk-logo',
        ];
    } else if ('menu' === $content) {
        $_file = 'menu.php';
        $_vars = [
            'menu' => $nav.'_'.$level,
        ];
    } else if ('search' === $content) {
        $_file = 'searchform.php';
        $_vars = [
            'nav'      => $nav,
            'template' => apollonGetOption('searchform_headerlayout'),
        ];
    }

    apollonGetPart($_file, $_vars);
}, 10, 3);

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

add_filter('ol.apollon.header_options', function ($options) {
    $options = array_merge($options, [
        // Grid
        'grid_container' => apollonGetOption('grid_container'),

        // Navs
        'topnav_enable'  => apollonGetOption('topnav_enable'),
        'mainnav_enable' => apollonGetOption('mainnav_enable'),
        'subnav_enable'  => apollonGetOption('subnav_enable'),

        // Global
        'nav_menulabel' => apollonGetOption('nav_menulabel'),
        'nav_shadow'    => apollonGetOption('nav_shadow'),
        'nav_sticky'    => apollonGetOption('nav_sticky'),

        // Dropdown
        'dropdown_click'    => apollonGetOption('dropdown_click'),
        'dropdown_position' => apollonGetOption('dropdown_position'),

        // Extra search
        'search_drop' => apollonGetOption('searchform_dropbar'),
        'search_tpl'  => apollonGetOption('searchform_headerlayout'),
    ]);

    // Iterate on navs
    foreach (['topnav', 'mainnav', 'subnav'] as $nav) {
        // Check availability
        if (!$options[$nav.'_enable']) {
            continue;
        }

        // Define vars
        $options[$nav] = [
            'customtext' => apollonGetOption($nav.'_customtext'),
            'content_1'  => apollonGetOption($nav.'_content_1'),
            'content_2'  => apollonGetOption($nav.'_content_2'),
            'content_3'  => apollonGetOption($nav.'_content_3'),
            'mobile'     => apollonGetOption($nav.'_mobile'),
            'template'   => apollonGetOption($nav.'_template'),
            'fullwidth'  => apollonGetOption($nav.'_fullwidth'),
            'background' => apollonGetOption($nav.'_background'),
            'fontsize'   => apollonGetOption($nav.'_fontsize'),
            'lineheight' => apollonGetOption($nav.'_lineheight'),
            'padding'    => apollonGetOption($nav.'_padding'),
        ];
    }

    return $options;
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

// WP head

add_action('ol.apollon.wp_head_after', function ($header) {
    $primary = apollonGetOption('color_primary');

    $styles = [];
    $styles[':root'] = [
        // UIKit
        '--uk-animation-stroke'    => 'none',
        '--uk-breakpoint-s'        => '640px',
        '--uk-breakpoint-m'        => '960px',
        '--uk-breakpoint-l'        => '1200px',
        '--uk-breakpoint-xl'       => '1600px',
        '--uk-leader-fill-content' => '.',

        // WPBlock
        '--wp-admin-theme-color' => $primary,
        '--wp-admin-theme-color-darker-10' => $primary,
        '--wp-admin-theme-color-darker-20' => $primary,
    ];

    $css = '';

    foreach ($styles as $selector => $attrs) {
        $css .= $selector.'{';

        foreach ($attrs as $attr => $value) {
            $css .= $attr.':'.$value.';';
        }

        $css .= '}';
    }
    echo '<style>'.$css.'</style>';
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

add_filter('ol.apollon.main_dropbar_content', function ($dropbar, $status) {
    return $status ? $dropbar : '';
}, 10, 2);
