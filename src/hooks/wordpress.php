<?php

/**
 * Apollon wordpress hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_action('customize_save_after', function ($wp_customize) {
    // Check css option
    if (!apply_filters('ol.apollon.assets_css_in_file', false)) {
        return;
    }

    /**
     * Remove old `variables.less` & `main.css` files and generate what needed
     */
    do_action('ol.apollon.assets_generate_targetfile', 'less');

    // Update option
    apollonSetOption('assets-timestamp', time());
}, 99);

add_filter('pre_get_posts', function ($query) {
    // Check cases
    if (is_home() && $query->is_main_query()) {
        // Homepage case
        $posttypes = apollonGetOption('homepage-posttypes');
        $posttypes = empty($posttypes) ? ['post'] : $posttypes;

        $query->set('post_type', $posttypes);
    } else if ($query->is_search()) {
        // Search case
        $posttypes = apollonGetOption('search-posttypes');
        $posttypes = empty($posttypes) ? ['post'] : $posttypes;

        $query->set('post_type', $posttypes);
    }

    return $query;
});

add_filter('wp_get_custom_css', function ($wp_css) {
    return apollonMinifyCss($wp_css);
});
