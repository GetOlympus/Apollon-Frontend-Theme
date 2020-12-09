<?php

/**
 * Apollon title elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

$_element['_display'] = apollonGetOption('layout_'.$_element['data']['posttype'].'s_titledisplay');
$_element['_tag']     = apollonGetOption('layout_'.$_element['data']['posttype'].'s_titletag');

echo sprintf(
    '<%s class="%s %s">%s</%s>',
    $_element['_tag'],
    'uk-'.$_element['_display'],
    'uk-margin-remove-top uk-margin-small-bottom',
    sprintf(
        '<a href="%s" title="%s" class="%s">%s</a>',
        $_element['data']['link'],
        $_element['data']['esc_title'],
        'uk-link-reset',
        $_element['data']['title']
    ),
    $_element['_tag']
);
