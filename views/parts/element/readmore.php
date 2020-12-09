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

$_element['_icon']  = apollonGetOption('layout_'.$_element['data']['posttype'].'s_readmoreicon');
$_element['_style'] = apollonGetOption('layout_'.$_element['data']['posttype'].'s_readmorestyle');
$_element['_title'] = apollonGetOption('layout_'.$_element['data']['posttype'].'s_readmoretitle');

echo sprintf(
    '<a href="%s" title="%s" class="%s %s">%s%s</a>',
    $_element['data']['link'],
    $_element['data']['esc_title'],
    'uk-button uk-button-'.$_element['_style'],
    'uk-margin-remove-top uk-margin-small-bottom',
    $_element['_title'],
    !$_element['_icon'] ? '' : ' <i uk-icon="arrow-right"></i>'
);
