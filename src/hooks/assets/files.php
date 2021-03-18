<?php

/**
 * Apollon assets files hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.assets_base_dir', function ($dir = null) {
    return is_null($dir) ? trailingslashit(OL_TPL_DIR).'app'.S.'css'.S : $dir;
});

add_filter('ol.apollon.assets_base_url', function ($dir = null) {
    return is_null($dir) ? trailingslashit(OL_TPL_DIR_URI).'app/css/' : $dir;
});

add_filter('ol.apollon.assets_css_in_file', function ($status = false) {
    return !$status ? (bool) !!('css' === apollonGetOption('css-location', 'inline')) : true;
}, 10, 1);

add_action('ol.apollon.assets_generate_targetfile', function ($filetype = 'less') {
    // Get base directory & the customier CSS
    $basedir  = apply_filters('ol.apollon.assets_base_dir', null);
    $cssfile  = $basedir.'main.css';
    $procfile = $basedir.'variables.less';

    // LESS case
    if ('less' === $filetype) {
        // Load WP_Filesystem class
        require_once ABSPATH.'wp-admin'.S.'includes'.S.'file.php';
        WP_Filesystem();

        global $wp_filesystem;

        // Delete built-in variables.less files
        if (is_file($procfile)) {
            $wp_filesystem->delete($procfile);
        }

        // Delete built-in main.css files
        if (is_file($cssfile)) {
            $wp_filesystem->delete($cssfile);
        }

        // Get output to insert in new css file
        $output = apply_filters('ol.apollon.assets_output', '');
        $wp_filesystem->put_contents($procfile, $output, 0644);
    } else if (!is_file($cssfile)) {
        // Compile LESS files to CSS
        $parser = new Less_Parser(['compress' => true]);
        $parser->parseFile($basedir.'apollon.less');

        // Generate CSS
        $output = $output = $parser->getCss();
        $output = '/** This file is auto-generated at '.date(DATE_RFC2822).' */'."\n\n".$output;

        // Update theme mode
        apollonSetOption('theme-style', apollonMinifyCss($output));

        // Load WP_Filesystem class
        require_once ABSPATH.'wp-admin'.S.'includes'.S.'file.php';
        WP_Filesystem();

        global $wp_filesystem;

        // Create new CSS file
        $wp_filesystem->put_contents($cssfile, $output, 0644);
    }
}, 10, 1);
