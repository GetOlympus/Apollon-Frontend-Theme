<?php

/**
 * Pagination default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_pagination)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_default_before', $_pagination);

echo sprintf(
    '<ul class="uk-pagination uk-margin-bottom uk-width-1-1 uk-flex-%s%s" uk-margin>',
    $_pagination['options']['position'],
    empty($_pagination['options']['css']) ? '' : ' '.$_pagination['options']['position']
);

// Previous
echo sprintf(
    '<li%s>%s</li>',
    'expand' === $_pagination['options']['position'] ? ' class="uk-margin-auto-right"' : '',
    sprintf(
        get_previous_posts_link('%s%s'),
        $_pagination['options']['icons'] ? '<span class="uk-margin-small-right" uk-pagination-previous></span> ' : '',
        __('apollon.th.pagination.previous', OL_APOLLON_DICTIONARY)
    )
);

// Next
echo sprintf(
    '<li%s>%s</li>',
    'expand' === $_pagination['options']['position'] ? ' class="uk-margin-auto-left"' : '',
    sprintf(
        get_next_posts_link('%s%s'),
        __('apollon.th.pagination.next', OL_APOLLON_DICTIONARY),
        $_pagination['options']['icons'] ? ' <span class="uk-margin-small-left" uk-pagination-next></span>' : ''
    )
);

echo '</ul>';


/**
 * Fires after displaying default pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_default_after', $_pagination);
