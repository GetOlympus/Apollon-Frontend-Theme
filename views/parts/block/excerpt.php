<?php

/**
 * Apollon excerpt block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<div class="%s"><div class="%s">%s</div></div>',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-panel'.(empty($_block['css']) ? '' : ' '.$_block['css']),
    $_block['data']['excerpt']
);
