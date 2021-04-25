<?php

/**
 * Apollon next/prev block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<aside class="%s"><ul class="%s" uk-margin>%s%s</ul></aside>',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-pagination uk-margin-bottom uk-width-1-1 uk-flex-expand'.(empty($_block['css']) ? '' : ' '.$_block['css']),
    get_previous_post_link(
        '<li class="uk-margin-auto-right">%link</li>',
        __('apollon.th.nextprev.prevpost', OL_APOLLON_DICTIONARY),
        true,
        [],
        'post_tag'
    ),
    get_next_post_link(
        '<li class="uk-margin-auto-left">%link</li>',
        __('apollon.th.nextprev.nextpost', OL_APOLLON_DICTIONARY),
        true,
        [],
        'post_tag'
    )
);
