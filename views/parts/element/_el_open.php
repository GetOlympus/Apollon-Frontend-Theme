<?php

/**
 * Apollon _el_open elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

/*echo sprintf(
    '<a href="%s" title="%s" class="%s"%s>',
    $_element['data']['link'],
    $_element['data']['esc_title'],
    !empty($_element['css']) ? $_element['css'] : 'f-p-default uk-link-reset',
    !$_element['grid'] ? '' : ' uk-grid'
);*/
echo sprintf(
    '<div class="%s"%s>',
    !empty($_element['css']) ? $_element['css'] : 'f-p-default uk-link-reset',
    !$_element['grid'] ? '' : ' uk-grid'
);
