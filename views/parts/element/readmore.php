<?php

/**
 * Apollon read more elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

$_element['_title'] = apollonGetOption($_element['data']['posttype'].'-loop-readmore-title');
$_element['_style'] = apollonGetOption($_element['data']['posttype'].'-loop-readmore-style');
$_element['_icon']  = apollonGetOption($_element['data']['posttype'].'-loop-readmore-icon');

echo sprintf(
    '<a href="%s" title="%s" class="%s %s">%s%s</a>',
    $_element['data']['link'],
    $_element['data']['esc_title'],
    'uk-button uk-button-'.$_element['_style'],
    'uk-margin-remove-top uk-margin-small-bottom uk-width-auto',
    $_element['_title'],
    !$_element['_icon'] ? '' : ' <i uk-icon="arrow-right"></i>'
);
