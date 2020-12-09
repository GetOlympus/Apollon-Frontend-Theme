<?php

/**
 * Apollon footer hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_action('ol.apollon.footer_build_navbar', function ($section, $level, $contents) {
    // Build useful vars
    $level = (string) $level;
    $content = $contents['content'];

    if (!isset($content) || empty($content)) {
        return;
    }

    // Check content
    if (!in_array($content, ['logo', 'copyright', 'search', 'sidebar'])) {
        return;
    }

    // Copyright case
    if ('copyright' === $content) {
        echo apply_filters('ol.apollon.section_copyright', sprintf(
            '<span class="uk-navbar-item uk-link-text %s">%s</span>',
            $section.'section-copyright',
            __('apollon.th.footer.copyright', OL_APOLLON_DICTIONARY)
        ));

        return;
    }

    // Other default WP contents cases
    if ('logo' === $content) {
        $_file = 'logo.php';
        $_vars = [
            'css' => 'uk-panel uk-width-1-1',
        ];
    } else if ('search' === $content) {
        $_file = 'searchform.php';
        $_vars = [
            'template' => 'overlay-content',
        ];
    } else if ('sidebar' === $content) {
        $_file = 'sidebar.php';
        $_vars = [
            'size'     => $contents['size'],
            'sidebar'  => $section.'_'.$level,
            'template' => 'footer',
        ];
    }

    echo 'sidebar' === $content ? '' : sprintf('<div class="uk-width-%s">', $contents['size']);

    apollonGetPart($_file, $_vars);

    echo 'sidebar' === $content ? '' : '</div>';
}, 10, 3);

add_filter('ol.apollon.footer_options', function ($options) {
    $options = array_merge($options, [
        // Grid
        'grid_container' => apollonGetOption('grid_container'),

        // Sections
        'topsection_enable'  => apollonGetOption('topsection_enable'),
        'mainsection_enable' => apollonGetOption('mainsection_enable'),
        'subsection_enable'  => apollonGetOption('subsection_enable'),
    ]);

    // Iterate on sections
    foreach (['topsection', 'mainsection', 'subsection'] as $section) {
        // Check availability
        if (!$options[$section.'_enable']) {
            continue;
        }

        // Define vars
        $options[$section] = [
            'content_1'  => apollonGetOption($section.'_content_1'),
            'content_2'  => apollonGetOption($section.'_content_2'),
            'content_3'  => apollonGetOption($section.'_content_3'),
            'content_4'  => apollonGetOption($section.'_content_4'),
            'size_1'     => apollonGetOption($section.'_size_1'),
            'size_2'     => apollonGetOption($section.'_size_2'),
            'size_3'     => apollonGetOption($section.'_size_3'),
            'size_4'     => apollonGetOption($section.'_size_4'),
            'fullwidth'  => apollonGetOption($section.'_fullwidth'),
            'background' => apollonGetOption($section.'_background'),
            'fontsize'   => apollonGetOption($section.'_fontsize'),
            'lineheight' => apollonGetOption($section.'_lineheight'),
            'padding'    => apollonGetOption($section.'_padding'),
        ];
    }

    return $options;
});
