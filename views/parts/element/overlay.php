<?php

/**
 * Apollon overlay elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<a href="%s" title="%s" class="uk-overlay uk-position-cover %s"></a>',
    $_element['data']['link'],
    $_element['data']['esc_title'],
    !empty($_element['css']) ? $_element['css'] : ''
);
