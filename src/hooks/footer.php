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
            'section-'.$section.'-copyright',
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
        'container' => apollonGetOption('website-container'),

        // Sections
        'section-top-enable'  => apollonGetOption('section-top-enable'),
        'section-main-enable' => apollonGetOption('section-main-enable'),
        'section-sub-enable'  => apollonGetOption('section-sub-enable'),
    ]);

    // Iterate on sections
    foreach (['top', 'main', 'sub'] as $nav) {
        // Check availability
        if (!$options['section-'.$nav.'-enable']) {
            continue;
        }

        // Define vars
        $options[$nav] = [
            'content-1'   => apollonGetOption('section-'.$nav.'-content-1'),
            'content-2'   => apollonGetOption('section-'.$nav.'-content-2'),
            'content-3'   => apollonGetOption('section-'.$nav.'-content-3'),
            'content-4'   => apollonGetOption('section-'.$nav.'-content-4'),
            'mobile'      => apollonGetOption('section-'.$nav.'-mobile'),
            'size-1'      => apollonGetOption('section-'.$nav.'-size-1'),
            'size-2'      => apollonGetOption('section-'.$nav.'-size-2'),
            'size-3'      => apollonGetOption('section-'.$nav.'-size-3'),
            'size-4'      => apollonGetOption('section-'.$nav.'-size-4'),
            'full-width'  => apollonGetOption('section-'.$nav.'-full-width'),
            'color'       => apollonGetOption('section-'.$nav.'-color'),
            'background'  => apollonGetOption('section-'.$nav.'-background'),
            'font-size'   => apollonGetOption('section-'.$nav.'-font-size'),
            'line-height' => apollonGetOption('section-'.$nav.'-line-height'),
            'padding'     => apollonGetOption('section-'.$nav.'-padding'),
        ];
    }

    return $options;
});
