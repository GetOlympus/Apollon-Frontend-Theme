<?php

/**
 * Apollon functions
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


if (!function_exists('apollonGetDefault')) {
    /**
     * Main getter Apollon function to retrieve default option.
     *
     * @param  string  $option
     *
     * @return mixed
     */
    function apollonGetDefault($option)
    {
        global $apollon_defaults;

        if (empty($option)) {
            return '';
        }

        return isset($apollon_defaults[$option]) ? $apollon_defaults[$option] : $option;
    }
}

if (!function_exists('apollonGetOption')) {
    /**
     * Main getter Apollon function to resolve customizer preview.
     *
     * @param  string  $option
     * @param  string  $default
     * @param  bool    $escape_db
     *
     * @return mixed
     */
    function apollonGetOption($option = '', $default = '', $escape_db = false)
    {
        global $apollon;

        // Get all options
        if (empty($option)) {
            return $apollon;
        }

        $apdefault = apollonGetDefault($option);
        $default = !is_null($apdefault) ? $apdefault : $default;

        // Retrieve data from DB in Customizer preview mode
        if (OL_APOLLON_ISCUSTOMIZER && !$escape_db) {
            return get_theme_mod($option, $default);
        }

        // Check value from global $apollon variable
        return !isset($apollon[$option]) ? $default : $apollon[$option];
    }
}

if (!function_exists('apollonGetPart')) {
    /**
     * Include partial template.
     *
     * @param  string  $file
     * @param  array   $vars
     * @param  string  $slug
     */
    function apollonGetPart($file, $vars = [], $slug = null)
    {
        $show_on_front = apollonGetOption('wp_showonfront', 'wp_showonfront');

        /**
         * Override included files.
         *
         * @param  array   $files
         *
         * @return array
         */
        $files = apply_filters('ol.apollon.build_getpart_files', [
            // Pages
            'single.php'      => 'pages'.S.'_custom-single',
            '404.php'         => 'pages'.S.'404',
            'image.php'       => 'pages'.S.'image',
            'page.php'        => 'pages'.S.'page',
            'single-post.php' => 'pages'.S.'single-post',

            // Archives
            'archive.php'     => 'archives'.S.'_custom-archive',
            'author.php'      => 'archives'.S.'author',
            'category.php'    => 'archives'.S.'category',
            'date.php'        => 'archives'.S.'date',
            'index.php'       => 'archives'.S.'index',
            'search.php'      => 'archives'.S.'search',
            'tag.php'         => 'archives'.S.'tag',
            'taxonomy.php'    => 'archives'.S.'taxonomy',

            // Parts
            '404-part.php'    => 'parts'.S.'404',
            'comments.php'    => 'parts'.S.'comments',
            'footer.php'      => 'parts'.S.'footer',
            'header.php'      => 'parts'.S.'header',
            'searchform.php'  => 'parts'.S.'searchform',
            'sidebar.php'     => 'parts'.S.'sidebar',

            // Front page special case
            'front-page.php'  => ('page' === $show_on_front ? 'pages' : 'archives').S.'front-page',

            // Apollon special cases
            'format.php'      => 'parts'.S.'format',
            'logo.php'        => 'parts'.S.'logo',
            'menu.php'        => 'parts'.S.'menu',
            'pagination.php'  => 'parts'.S.'pagination',
        ]);

        // Build template
        $_tpl = !array_key_exists($file, $files) ? $files['404.php'] : $files[$file];
        $_tpl = 'views'.S.$_tpl;


        /**
         * Fires before displaying file.
         *
         * @param  string  $_tpl
         * @param  array   $vars
         */
        do_action('ol.apollon.getpart_file_before', $_tpl, $vars);

        // Include template
        get_template_part($_tpl, $slug, $vars);


        /**
         * Fires after displaying inc.
         *
         * @param  string  $_tpl
         * @param  array   $vars
         */
        do_action('ol.apollon.getpart_file_after', $_tpl, $vars);
    }
}
