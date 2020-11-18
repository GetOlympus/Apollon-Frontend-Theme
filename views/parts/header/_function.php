<?php

/**
 * Header _function part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_header)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build navbar contents.
 */
add_action('ol.apollon.header_build_navbar', function ($nav, $level, $options) {
    // Build useful vars
    $level = (string) $level;
    $navcontent = $nav.'nav_content_'.$level;

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
            $options[$nav.'nav_customtext']
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
            'template' => $nav.'_'.$level,
        ];
    } else if ('search' === $content) {
        $_file = 'searchform.php';
        $_vars = [
            'template' => 'overlay-content',
        ];
    }

    apollonGetPart($_file, $_vars);
}, 10, 3);
