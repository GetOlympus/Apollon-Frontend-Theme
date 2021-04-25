<?php

/**
 * Apollon title block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<div class="%s"><h1 class="%s">%s</h1></div>',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-text-center'.(empty($_block['css']) ? '' : ' '.$_block['css']),
    sprintf(
        '<a href="%s" title="%s" class="%s">%s</a>',
        $_block['data']['link'],
        $_block['data']['esc_title'],
        'uk-link-reset',
        $_block['data']['title']
    )
);
