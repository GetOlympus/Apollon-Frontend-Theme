<?php

/**
 * Format cover part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}

// Starts here
$_format['cover-style'] = apollonGetOption($_format['data']['posttype'].'-loop-cover-style');
$_format['cover-text']  = 'default' === $_format['cover-style']
    ? ' uk-dark'
    : ('primary' === $_format['cover-style'] ? ' uk-light' : '');


/**
 * Fires before displaying cover format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_cover_before', $_format);

apollonGetPart('element.php', [
    'css'  => 'f-p-cover',
    'part' => '_el_open',
]);

echo sprintf(
    '<div class="%s">',
    'uk-inline uk-display-block'
);

apollonGetPart('element.php', [
    'canvas' => true,
    'css'    => 'uk-overlay uk-overlay-primary uk-position-cover uk-overflow-hidden',
    'data'   => $_format['data'],
    'part'   => 'thumbnail',
    'size'   => 'full',
]);

apollonGetPart('element.php', [
    'css'  => 'uk-overlay-'.$_format['cover-style'],
    'data' => $_format['data'],
    'part' => 'overlay',
]);

echo sprintf(
    '<div class="uk-padding-small uk-margin-remove-first-child uk-position-relative%s">',
    $_format['cover-text']
);

foreach ($_format['contents'] as $key => $value) {
    if ('thumbnail' === $key) {
        continue;
    }

    apollonGetPart('element.php', [
        'data'  => $_format['data'],
        'metas' => $value,
        'part'  => 'content' === $key ? 'excerpt' : $key,
    ]);
}

echo '</div>';
echo '</div>';

apollonGetPart('element.php', [
    'part' => '_el_close',
]);


/**
 * Fires after displaying cover format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_cover_after', $_format);
