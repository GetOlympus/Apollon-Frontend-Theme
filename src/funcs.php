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

        // Special layout case
        if ('layout_' === substr($option, 0, 7)) {
            $type = explode('_', $option);
            $option = 'layout_default_'.$type[2];
        }

        if (empty($option)) {
            return '';
        }

        return isset($apollon_defaults[$option]) ? $apollon_defaults[$option] : null;
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
            // Loops
            'archive.php'     => 'loops'.S.'archive',
            'author.php'      => 'loops'.S.'author',
            'category.php'    => 'loops'.S.'category',
            'date.php'        => 'loops'.S.'date',
            'index.php'       => 'loops'.S.'index',
            'search.php'      => 'loops'.S.'search',
            'tag.php'         => 'loops'.S.'tag',
            'taxonomy.php'    => 'loops'.S.'taxonomy',

            // Pages
            'page.php'        => 'pages'.S.'page',
            '404.php'         => 'pages'.S.'404',
            'image.php'       => 'pages'.S.'image',

            // Front page special case
            'front-page.php'  => ('page' === $show_on_front ? 'pages' : 'loops').S.'front-page',

            // Parts ~ WordPress & Apollon cases
            'adblocker.php'   => 'parts'.S.'adblocker',
            'ads.php'         => 'parts'.S.'ads',
            'backtotop.php'   => 'parts'.S.'backtotop',
            'comments.php'    => 'parts'.S.'comments',
            'footer.php'      => 'parts'.S.'footer',
            'header.php'      => 'parts'.S.'header',
            'post.php'        => 'parts'.S.'post',
            'searchform.php'  => 'parts'.S.'searchform',
            'sidebar.php'     => 'parts'.S.'sidebar',
            // ~
            'block.php'       => 'parts'.S.'block',
            'format.php'      => 'parts'.S.'format',
            'element.php'     => 'parts'.S.'element',
            'logo.php'        => 'parts'.S.'logo',
            'menu.php'        => 'parts'.S.'menu',
            'pagination.php'  => 'parts'.S.'pagination',
            'widget.php'      => 'parts'.S.'widget',

            // Singles
            'single.php'      => 'singles'.S.'default',
            'single-post.php' => 'singles'.S.'post',
        ]);

        // Build template
        if (!array_key_exists($file, $files)) {
            throw new \Exception(sprintf(
                __('apollon.errors.requested_part_does_not_exist', OL_APOLLON_DICTIONARY),
                $file
            ));
        }

        $_tpl = 'views'.S.$files[$file];


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
