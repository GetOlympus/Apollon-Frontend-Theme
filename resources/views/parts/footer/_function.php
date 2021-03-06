<?php

/**
 * Footer _function part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_footer)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build navbar contents.
 */
add_action('ol.apollon.footer_build_navbar', function ($section, $level, $contents) {
    // Build useful vars
    $level = (string) $level;
    $content = $contents['content'];

    if (!isset($content) || empty($content)) {
        return;
    }

    // Check content
    if (!in_array($content, ['logo', 'search', 'sidebar'])) {
        return;
    }

    // Other default WP contents cases
    if ('logo' === $content) {
        $_inc = [
            'filename' => 'logo.php',
            'part'     => true,
            'vars'     => [
                'css' => 'uk-panel uk-width-1-1',
            ],
        ];
    } else if ('search' === $content) {
        $_inc = [
            'filename' => 'searchform.php',
            'part'     => true,
            'vars'     => [
                'template' => 'overlay-content',
            ],
        ];
    } else if ('sidebar' === $content) {
        $_inc = [
            'filename' => 'sidebar.php',
            'part'     => true,
            'vars'     => [
                'size'     => $contents['size'],
                'template' => $section.'_'.$level,
            ],
        ];
    }

    echo 'sidebar' === $content ? '' : sprintf('<div class="uk-width-%s">', $contents['size']);

    include OL_APOLLON_VIEWSPATH.'_inc.php';

    echo 'sidebar' === $content ? '' : '</div>';
}, 10, 3);
