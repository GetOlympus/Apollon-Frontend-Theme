<?php

/**
 * Apollon content block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<div class="%s"><div class="%s">',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-panel'.(empty($_block['css']) ? '' : ' '.$_block['css'])
);

the_content();

echo '</div></div>';
