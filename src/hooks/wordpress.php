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

    // Get base directory & the customier CSS
    $output   = apply_filters('ol.apollon.assets_output', '');
    $basefile = trailingslashit(get_stylesheet_directory()).'app'.S.'css'.S.OL_APOLLON_CSS_FILENAME;

    // Load WP_Filesystem class
    require_once ABSPATH.'wp-admin'.S.'includes'.S.'file.php';
    WP_Filesystem();

    global $wp_filesystem;

    // Delete built-in variables files
    if (file_exists($basefile)) {
        $wp_filesystem->delete($basefile);
    }

    // Create new css file
    $wp_filesystem->put_contents($basefile, $output, 0644);
}, 99);

add_filter('pre_get_posts', function ($query) {
    // Check cases
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

add_filter('wp_get_custom_css', function ($wp_css) {
    return apollonMinifyCss($wp_css);
});
