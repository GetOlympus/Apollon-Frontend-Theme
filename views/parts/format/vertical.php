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


// Starts here
$_format['vertical-style'] = apollonGetOption($_format['data']['posttype'].'-loop-vertical-style');
$_format['wrapper-opener'] = '<div class="uk-card uk-card-%s uk-card-body">';
$_format['first'] = false;
$_format['last']  = false;

// Set first position
if ('thumbnail' === array_key_first($_format['contents'])) {
    $_format['first'] = true;
    unset($_format['contents']['thumbnail']);
}

// Set last position
if ('thumbnail' === array_key_last($_format['contents'])) {
    $_format['last'] = true;
    unset($_format['contents']['thumbnail']);
}

/**
 * Fires before displaying vertical format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_vertical_before', $_format);

apollonGetPart('element.php', [
    'css'  => 'f-p-vertical',
    'part' => '_el_open',
]);

if ($_format['first']) {
    apollonGetPart('element.php', [
        'css'  => sprintf(
            'uk-display-block uk-card-media-top uk-margin-remove uk-card-%s',
            $_format['vertical-style']
        ),
        'data' => $_format['data'],
        'part' => 'thumbnail',
    ]);
}

echo sprintf($_format['wrapper-opener'], $_format['vertical-style']);

foreach ($_format['contents'] as $key => $value) {
    if ('thumbnail' === $key) {
        echo '</div>';

        apollonGetPart('element.php', [
            'css'  => sprintf(
                'uk-display-block uk-card-media uk-margin-remove uk-card-%s',
                $_format['vertical-style']
            ),
            'data' => $_format['data'],
            'part' => 'thumbnail',
        ]);

        echo sprintf($_format['wrapper-opener'], $_format['vertical-style']);

        continue;
    }

    apollonGetPart('element.php', [
        'data'  => $_format['data'],
        'metas' => $value,
        'part'  => $key,
    ]);
}

echo '</div>';

if ($_format['last']) {
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
