<?php

/**
 * Apollon archives features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// ARCHIVES

add_filter('ol.apollon.archive_sidebar_order', function ($tpl) {
    return /*isset($apollon['features-sidebar-'.$tpl.'-order'])
        ? $apollon['features-sidebar-'.$tpl.'-order']
        : */[];
});
