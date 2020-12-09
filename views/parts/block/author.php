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

echo empty($_block['data']['author']) ? '' : sprintf(
    '<div class="%s"><div class="%s">%s%s</div></div>',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-comment uk-comment-primary'.(empty($_block['css']) ? '' : ' '.$_block['css']),
    sprintf(
        '<header class="%s" uk-grid>%s%s</header>',
        'uk-comment-header uk-grid-medium uk-flex-middle',
        empty($_block['data']['author']['avatar']) ? '' : sprintf(
            '<figure class="%s"><img src="%s" alt="%s" height="%d" width="%d" class="%s" /></figure>',
            'uk-width-auto',
            $_block['data']['author']['avatar']['url'],
            esc_html($_block['data']['author']['name']),
            $_block['data']['author']['avatar']['height'],
            $_block['data']['author']['avatar']['width'],
            'uk-comment-avatar'
        ),
        sprintf(
            '<div class="%s"><h4 class="%s"><a href="%s" title="%s">%s</a></h4></div>',
            'uk-width-expand',
            'uk-comment-title',
            $_block['data']['author']['link'],
            esc_html($_block['data']['author']['name']),
            $_block['data']['author']['name']
        )
    ),
    sprintf(
        '<div class="%s">%s</div>',
        'uk-comment-body',
        $_block['data']['author']['desc']
    ),
);
