<?php

/**
 * Apollon wordpress hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('pre_get_posts', function ($query) {
    //
    if (is_home() && $query->is_main_query()) {
        // Homepage case
        $posttypes = apollonGetOption('layout_default_posttypes');
        $posttypes = empty($posttypes) ? ['post'] : $posttypes;

        $query->set('post_type', $posttypes);
    } else if ($query->is_search()) {
        // Search case
        $posttypes = apollonGetOption('layout_search_posttypes');
        $posttypes = empty($posttypes) ? ['post'] : $posttypes;

        $query->set('post_type', $posttypes);
    }

    return $query;
});
