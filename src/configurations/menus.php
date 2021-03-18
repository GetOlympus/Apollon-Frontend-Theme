<?php

/**
 * Add navigation menus.
 *
 * @category PHP
 * @package  ApollonFrontendTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @since    0.0.1
 *
 * @see      https://developer.wordpress.org/reference/functions/register_nav_menu/
 */

return [
    /**
     * @var     string  $key    The menu uniq key.
     * @param   string  $name   The menu name.
     */

    // Header menus
    'top'      => __('apollon.cf.menus.top', OL_APOLLON_DICTIONARY),
    'main'     => __('apollon.cf.menus.main', OL_APOLLON_DICTIONARY),
    'sub'      => __('apollon.cf.menus.sub', OL_APOLLON_DICTIONARY),
    'top_alt'  => __('apollon.cf.menus.top_alt', OL_APOLLON_DICTIONARY),
    'main_alt' => __('apollon.cf.menus.main_alt', OL_APOLLON_DICTIONARY),
    'sub_alt'  => __('apollon.cf.menus.sub_alt', OL_APOLLON_DICTIONARY),
];
