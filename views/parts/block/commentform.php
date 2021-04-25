<?php

/**
 * Apollon commentform block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<aside class="%s"><div class="%s">',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-panel comments'.(empty($_block['css']) ? '' : ' '.$_block['css'])
);

apollonGetPart('comments.php', [
    'data' => $_block['data'],
]);

echo '</div></aside>';
