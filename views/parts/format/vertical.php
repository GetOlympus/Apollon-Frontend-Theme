<?php

/**
 * Format vertical part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying vertical format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_vertical_before', $_format);

apollonGetPart('element.php', [
    'css'  => 'f-p-vertical uk-link-reset',
    'part' => '_el_open',
]);

if ('thumbnail' === array_key_first($_format['contents'])) {
    apollonGetPart('element.php', [
        'css'  => 'uk-display-block uk-card-media-top uk-margin-remove',
        'data' => $_format['data'],
        'part' => 'thumbnail',
    ]);
}

echo sprintf(
    '<div class="%s">',
    'uk-card-default uk-card-body'
);

foreach ($_format['contents'] as $key => $value) {
    if ('thumbnail' === $key) {
        continue;
    }

    apollonGetPart('element.php', [
        'data'  => $_format['data'],
        'metas' => $value,
        'part'  => $key,
    ]);
}

echo '</div>';

if ('thumbnail' === array_key_last($_format['contents'])) {
    apollonGetPart('element.php', [
        'css'  => 'uk-display-block uk-card-media-bottom uk-margin-remove',
        'data' => $_format['data'],
        'part' => 'thumbnail',
    ]);
}

apollonGetPart('element.php', [
    'part' => '_el_close',
]);


/**
 * Fires after displaying vertical format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_vertical_after', $_format);
