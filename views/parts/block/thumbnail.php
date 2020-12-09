<?php

/**
 * Apollon thumbnail block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

if (!empty($_block['data']['images'])) {
    echo sprintf(
        '<figure class="%s"><div class="%s">',
        'uk-grid-margin uk-container uk-container-xsmall uk-text-center',
        'uk-inline-clip'.(empty($_block['css']) ? '' : ' '.$_block['css'])
    );

    if ($_block['canvas']) {
        echo sprintf(
            '<canvas width="%s" height="%d"></canvas>',
            '100%',
            $_block['data']['images']['height']
        );
    }

    $rep = $_block['canvas'] ? 'uk-cover uk-img ' : '';
    echo str_replace('<img ', '<img '.$rep, $_block['data']['images']['thumbnail']);

    echo '</div></figure>';
}
