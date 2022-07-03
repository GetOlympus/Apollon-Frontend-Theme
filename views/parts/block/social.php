<?php

/**
 * Apollon author block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<footer class="%s"><div class="%s">%s</div></footer>',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-grid'.(empty($_block['css']) ? '' : ' '.$_block['css']),
    sprintf(
        '<div class="%s">%s</div><div class="%s">%s</div>',
        'uk-width-expand',
        $_block['labels']['share'],
        'uk-width-auto',
        apply_filters('ol.apollon.posttypes_social', [], $_block['data'])
    )
);
