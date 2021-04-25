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
        if (empty($option)) {
            return '';
        }

        global $apollon_defaults;

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

        // Set default from Apollon or parameter
        $apollon_default = apollonGetDefault($option);
        $default         = !is_null($apollon_default) ? $apollon_default : $default;

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
        $show_on_front = apollonGetOption('wp-showonfront');

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
            'index.php'       => 'loops'.S.'front-page',
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
            'single.php'      => 'singles'.S.'post',
            'single-post.php' => 'singles'.S.'post',
        ]);

        // Build template
        if (!array_key_exists($file, $files)) {
            throw new \Exception(sprintf(
                __('apollon.er.requested_part_does_not_exist', OL_APOLLON_DICTIONARY),
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
        apollonGetTemplate($_tpl, $vars, $slug);


        /**
         * Fires after displaying inc.
         *
         * @param  string  $_tpl
         * @param  array   $vars
         */
        do_action('ol.apollon.getpart_file_after', $_tpl, $vars);
    }
}

if (!function_exists('apollonGetSocials')) {
    /**
     * Return social icons
     *
     * @param  string  $tpl
     * @param  array   $vars
     * @param  string  $slug
     */
    function apollonGetSocials($mode = 'all')
    {
        // Build main icons
        // Get paths from https://simpleicons.org/ website
        $icons = [
            'twitter'    => [
                'name' => __('apollon._.twitter', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path></svg>',
                'url'  => 'https://twitter.com/share?text=%TITLE%&amp;url=%LINK%',
            ],
            'facebook'   => [
                'name' => __('apollon._.facebook', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path></svg>',
                'url'  => 'https://www.facebook.com/sharer.php?u=%LINK%',
            ],
            'googleplus' => [
                'name' => __('apollon._.googleplus', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"></path></svg>',
                'url'  => 'https://plus.google.com/share?url=%LINK%',
            ],
            'pinterest'  => [
                'name' => __('apollon._.pinterest', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"></path></svg>',
                'url'  => 'https://www.pinterest.com/pin/create/button/?url=%LINK%&amp;media=%IMG%&amp;description=%TITLE%',
            ],
            'linkedin'   => [
                'name' => __('apollon._.linkedin', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg>',
                'url'  => 'https://www.linkedin.com/shareArticle?mini=true&amp;url=%LINK%&amp;title=%TITLE%',
            ],
            'reddit'     => [
                'name' => __('apollon._.reddit', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z"></path></svg>',
                'url'  => 'https://www.reddit.com/submit?url=%LINK%&amp;title=%TITLE%',
            ],
            'tumblr'     => [
                'name' => __('apollon._.tumblr', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M14.563 24c-5.093 0-7.031-3.756-7.031-6.411V9.747H5.116V6.648c3.63-1.313 4.512-4.596 4.71-6.469C9.84.051 9.941 0 9.999 0h3.517v6.114h4.801v3.633h-4.82v7.47c.016 1.001.375 2.371 2.207 2.371h.09c.631-.02 1.486-.205 1.936-.419l1.156 3.425c-.436.636-2.4 1.374-4.156 1.404h-.178l.011.002z"></path></svg>',
                'url'  => 'https://www.tumblr.com/widgets/share/tool?canonicalUrl=%LINK%',
            ],
            'whatsapp'   => [
                'name' => __('apollon._.whatsapp', OL_APOLLON_DICTIONARY),
                'svg'  => '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path></svg>',
                'url'  => 'whatsapp://send?text=%LINK%',
            ],
        ];

        /**
         * Apply extra rules to icons.
         *
         * @param  array   $icons
         */
        $icons = apply_filters('ol.apollon.get_socials', $icons);

        // Initialize mode
        $mode = in_array($mode, ['names', 'svgs', 'urls']) ? substr($mode, 0, -1) : $mode;
        $mode = in_array($mode, ['all', 'name', 'svg', 'url']) ? $mode : 'all';

        // Return everything
        if ('all' === $mode) {
            return $icons;
        }

        $final_icons = [];

        // Get only wanted values
        foreach ($icons as $icon => $values) {
            $final_icons[$icon] = $values[$mode];
        }

        return $final_icons;
    }
}

if (!function_exists('apollonGetTemplate')) {
    /**
     * Include template.
     *
     * @param  string  $tpl
     * @param  array   $vars
     * @param  string  $slug
     */
    function apollonGetTemplate($tpl, $vars = [], $slug = null)
    {
        /**
         * Fires before displaying file.
         *
         * @param  string  $tpl
         * @param  string  $slug
         * @param  array   $vars
         */
        do_action('ol.apollon.get_template_before', $tpl, $slug, $vars);

        // Include template
        get_template_part($tpl, $slug, $vars);


        /**
         * Fires after displaying inc.
         *
         * @param  string  $tpl
         * @param  string  $slug
         * @param  array   $vars
         */
        do_action('ol.apollon.get_template_after', $tpl, $slug, $vars);
    }
}

if (!function_exists('apollonMinifyCss')) {
    /**
     * Minify CSS.
     *
     * @param  string  $css
     *
     * @return string
     */
    function apollonMinifyCss($css = '')
    {
        // Check css
        if (!$css) {
            return;
        }

        // Normalize whitespace
        $css = preg_replace('/\s+/', ' ', $css);

        // Remove ; before }
        $css = preg_replace('/;(?=\s*})/', '', $css);

        // Remove space after , : ; { } */ >
        $css = preg_replace('/(,|:|;|\{|}|\*\/|>) /', '$1', $css);

        // Remove space before , ; { }
        $css = preg_replace('/ (,|;|\{|})/', '$1', $css);

        // Strips leading 0 on decimal values (converts 0.5px into .5px)
        $css = preg_replace('/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css);

        // Strips units if value is 0 (converts 0px to 0)
        $css = preg_replace('/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css);

        // Trim
        $css = trim($css);

        /**
         * Apply extra rules to css.
         *
         * @param  string  $css
         */
        return apply_filters('ol.apollon.minify_css', $css);
    }
}

if (!function_exists('apollonSetOption')) {
    /**
     * Main setter Apollon function.
     *
     * @param  string  $option
     * @param  mixed   $value
     */
    function apollonSetOption($option, $value)
    {
        // Updates theme modification value for the current theme
        set_theme_mod($option, $value);
    }
}
