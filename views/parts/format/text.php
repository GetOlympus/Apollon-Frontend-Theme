<?php

/**
 * Format text part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying text format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_text_before', $_format);

apollonGetPart('element.php', [
    'css'  => 'f-p-text uk-link-reset',
    'part' => '_el_open',
]);

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

apollonGetPart('element.php', [
    'part' => '_el_close',
]);


/**
 * Fires after displaying text format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_text_after', $_format);
