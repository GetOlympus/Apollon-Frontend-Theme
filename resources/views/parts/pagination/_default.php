<?php

/**
 * Pagination _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_pagination)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying `_default` pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_'.$_pagination['template'].'_before', $_pagination);

echo sprintf('<ul class="uk-pagination uk-flex-%s uk-margin-bottom" uk-margin>', $_pagination['template']);

foreach ($_pagination['items'] as $item) {
    echo $item;
}

echo '</ul>';


/**
 * Fires after displaying `_default` pagination.
 *
 * @param  array   $_pagination
 */
do_action('ol.apollon.pagination_part_'.$_pagination['template'].'_after', $_pagination);
