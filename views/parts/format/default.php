<?php

/**
 * Format default part.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_format)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_default_before', $_format);

apollonGetPart('element.php', [
    'part' => '_el_open',
]);

foreach ($_format['contents'] as $key => $value) {
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
 * Fires after displaying default format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_default_after', $_format);
