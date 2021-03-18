<?php

/**
 * Apollon header hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_action('ol.apollon.header_build_navbar', function ($nav, $level, $options) {
    // Build useful vars
    $level = (string) $level;
    $navcontent = 'content-'.$level;

    if (!isset($options[$navcontent]) || empty($options[$navcontent])) {
        return;
    }

    $content = $options[$navcontent];
    $substr  = substr($content, 0, 9);

    // Check content
    if (!in_array($content, ['custom', 'logo', 'search']) && 'location-' !== $substr) {
        return;
    }

    // Custom text case
    if ('custom' === $content) {
        echo apply_filters('ol.apollon.navbar_custom_text', sprintf(
            '<span class="uk-navbar-item %s">%s</span>',
            'nav-'.$nav.'-custom-text',
            $options['custom-text']
        ));

        return;
    }

    // Other default WP contents cases
    if ('logo' === $content) {
        $_file = 'logo.php';
        $_vars = [
            'css' => 'uk-navbar-item uk-logo',
        ];
    } else if ('search' === $content) {
        $_file = 'searchform.php';
        $_vars = [
            'nav'      => $nav,
            'template' => apollonGetOption('searchform-header-layout'),
        ];
    } else if ('location-' === $substr) {
        $_file = 'menu.php';
        $_vars = [
            'menu' => substr($content, 9),
        ];
    }

    apollonGetPart($_file, $_vars);
}, 10, 3);

add_filter('ol.apollon.header_metas', function ($metas) {
    $background = apollonGetOption('global-background');
    $primary    = apollonGetOption('global-link-color');

    return array_merge($metas, [
        [
            'name'    => 'theme-color',
            'content' => $primary,
        ],
        [
            'name'    => 'msapplication-TileColor',
            'content' => $background,
        ],
        /*
        [
            'name'    => 'msapplication-TileImage',
            'content' => OL_TPL_DIR_URI.'/app/img/mstile-144x144.png',
        ],
        */
    ]);
});

add_filter('ol.apollon.header_options', function ($options) {
    $options = array_merge($options, [
        // Grid
        'grid-container' => apollonGetOption('website-grid-container'),

        // Navs
        'nav-top-enable'  => apollonGetOption('nav-top-enable'),
        'nav-main-enable' => apollonGetOption('nav-main-enable'),
        'nav-sub-enable'  => apollonGetOption('nav-sub-enable'),

        // Global
        'nav-menu'   => apollonGetOption('website-nav-menu'),
        'nav-shadow' => apollonGetOption('website-nav-shadow'),
        'nav-sticky' => apollonGetOption('website-nav-sticky'),

        // Dropdown
        'dropdown-click'    => apollonGetOption('website-dropdown-click'),
        'dropdown-position' => apollonGetOption('website-dropdown-position'),

        // Extra search
        'dropbar'       => apollonGetOption('searchform-dropbar'),
        'header-layout' => apollonGetOption('searchform-header-layout'),
    ]);

    // Iterate on navs
    foreach (['top', 'main', 'sub'] as $nav) {
        // Check availability
        if (!$options['nav-'.$nav.'-enable']) {
            continue;
        }

        // Define vars
        $options[$nav] = [
            'custom-text' => apollonGetOption('nav-'.$nav.'-custom-text'),
            'content-1'   => apollonGetOption('nav-'.$nav.'-content-1'),
            'content-2'   => apollonGetOption('nav-'.$nav.'-content-2'),
            'content-3'   => apollonGetOption('nav-'.$nav.'-content-3'),
            'mobile'      => apollonGetOption('nav-'.$nav.'-mobile'),
            'template'    => apollonGetOption('nav-'.$nav.'-template'),
            'full-width'  => apollonGetOption('nav-'.$nav.'-full-width'),
            'color'       => apollonGetOption('nav-'.$nav.'-color'),
            'background'  => apollonGetOption('nav-'.$nav.'-background'),
            'font-size'   => apollonGetOption('nav-'.$nav.'-font-size'),
            'height'      => apollonGetOption('nav-'.$nav.'-height'),
            'padding'     => apollonGetOption('nav-'.$nav.'-padding'),
        ];
    }

    return $options;
});

// WP head

add_action('ol.apollon.wp_head_after', function ($header) {
    // Check customizer mode
    if (OL_APOLLON_ISCUSTOMIZER) {
        // Get custom Apollon CSS
        $output  = apply_filters('ol.apollon.assets_output', '');
        $baseurl = apply_filters('ol.apollon.assets_base_url', null);

        echo sprintf(
            '<style type="text/less">%s%s%s</style><script src="%s"></script>',
            '@import "'.$baseurl.'wordpress.less";'."\n",
            '@import "'.$baseurl.'uikit/src/less/uikit.less";'."\n\n",
            wp_strip_all_tags($output),
            '//cdn.jsdelivr.net/npm/less@3.13'
        );
    }

    // Check CSS in file
    if (apply_filters('ol.apollon.assets_css_in_file', false)) {
        return;
    }

    // Get custom Apollon CSS
    $output = apollonGetOption('theme-style', '');

    echo sprintf(
        '<style type="text/css">%s</style>',
        wp_strip_all_tags($output)
    );
});

// LOGO

add_filter('ol.apollon.logo_contents', function ($contents) {
    return $contents;
});

add_filter('ol.apollon.logo_image', function ($image) {
    // Get `logos_retina`
    $default    = apollonGetOption('logo-default');
    $retina     = apollonGetOption('logo-retina');
    $use_slogan = apollonGetOption('logo-slogan');

    return array_merge($image, [
        'src'    => !empty($default) ? $default : (!empty($retina) ? $retina : OL_TPL_DIR_URI.'/app/img/apollon-h.png'),
        'height' => apollonGetOption('logo-max-height'),
        'width'  => apollonGetOption('logo-max-width'),
        'slogan' => $use_slogan ? OL_BLOG_DESCRIPTION : '',
    ]);
});

// WRAPPERS

add_filter('ol.apollon.body_wrapper_open', function ($header) {
    $grid = apollonGetOption('website-grid-container');

    return sprintf(
        '<div class="uk-container%s">',
        'expand' === $grid ? '' : ' uk-container-'.$grid
    );
});

add_filter('ol.apollon.main_dropbar_content', function ($dropbar, $status) {
    return $status ? $dropbar : '';
}, 10, 2);
