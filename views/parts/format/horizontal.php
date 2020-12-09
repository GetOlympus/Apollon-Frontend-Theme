<?php

/**
 * Format horizontal part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying horizontal format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_horizontal_before', $_format);

apollonGetPart('element.php', [
    'css'  => 'f-p-horizontal uk-child-width-expand uk-grid-column-medium uk-grid-row-small uk-link-reset',
    'grid' => true,
    'part' => '_el_open',
]);

if ('thumbnail' === array_key_first($_format['contents'])) {
    apollonGetPart('element.php', [
        'css'  => 'uk-width-1-3@m',
        'data' => $_format['data'],
        'part' => 'thumbnail',
    ]);
}

echo sprintf(
    '<div class="%s">',
    'uk-margin-remove-first-child'
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
        'css'  => 'uk-width-1-3@m',
        'data' => $_format['data'],
        'part' => 'thumbnail',
    ]);
}

apollonGetPart('element.php', [
    'part' => '_el_close',
]);


/**
 * Fires after displaying horizontal format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_horizontal_after', $_format);
