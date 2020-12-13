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
$_format['_coverpos']   = apollonGetOption('layout_'.$_format['data']['posttype'].'s_coverpos');
$_format['_coverstyle'] = apollonGetOption('layout_'.$_format['data']['posttype'].'s_coverstyle');
$_format['_covertext']  = 'default' === $_format['_coverstyle']
    ? ' uk-dark'
    : ('primary' === $_format['_coverstyle'] ? ' uk-light' : '');


/**
 * Fires before displaying cover format.
 *
 * @param  array   $_format
 */
do_action('ol.apollon.format_cover_before', $_format);

apollonGetPart('element.php', [
    'css'  => 'f-p-cover uk-link-reset',
    'part' => '_el_open',
]);

echo sprintf(
    '<div class="%s">',
    'uk-inline uk-display-block'
);

apollonGetPart('element.php', [
    'cover'  => $_format['_coverstyle'],
    'css'    => 'uk-display-block uk-margin-remove uk-cover-container',
    'data'   => $_format['data'],
    'part'   => 'thumbnail',
    'size'   => 'full',
]);

echo sprintf(
    '<div class="%s uk-padding-small uk-margin-remove-first-child%s">',
    'uk-position-'.$_format['_coverpos'],
    $_format['_covertext']
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
