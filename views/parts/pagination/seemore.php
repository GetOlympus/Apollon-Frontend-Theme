<?php

/**
 * Pagination seemore part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_pagination)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying seemore pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_seemore_before', $_pagination);

echo sprintf(
    '<ul class="uk-pagination uk-margin-bottom uk-width-1-1 uk-flex-%s%s" uk-margin>',
    $_pagination['options']['position'],
    empty($_pagination['options']['css']) ? '' : ' '.$_pagination['options']['position']
);

foreach ($_pagination['items'] as $item) {
    echo $item;
}

echo '</ul>';


/**
 * Fires after displaying seemore pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_seemore_after', $_pagination);
