<?php

/**
 * Apollon tags block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo empty($_block['data']['tags']) ? '' : sprintf(
    '<footer class="%s"><p class="%s">%s</p></footer>',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-text-center uk-text-small'.(empty($_block['css']) ? '' : ' '.$_block['css']),
    $_block['data']['tags']
);
