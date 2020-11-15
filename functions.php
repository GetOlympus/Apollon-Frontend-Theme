<?php

//namespace ApollonFrontendTheme;

/**
 * OLYMPUS APOLLON FRONTEND THEME
 *
 * Theme Name:  Olympus Apollon
 *
 * Description: Olympus Apollon is a frontend WordPress theme built with the Olympus Zeus Core framework system. Apollon is an incredibly powerful and flexible WordPress theme, light weight and unbelievably fast. Build with ♥ for WordPress developers.
 * Author:      Achraf Chouk <achrafchouk@gmail.com>
 * Version:     0.0.1
 *
 * Author URI:  https://github.com/crewstyle
 * Plugin URI:  https://github.com/GetOlympus/Apollon-Frontend-Theme
 * Text Domain: olympus-apollon
 * Domain Path: /languages
 * License:     The MIT License (MIT)
 * License URI: http://opensource.org/licenses/MIT
 *
 * The MIT License (MIT)
 *
 * Copyright (C) Achraf Chouk - achrafchouk@gmail.com
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}


/**
 * Global constants
 */

// Directory separator
defined('S')          or define('S', DIRECTORY_SEPARATOR);
// Vendor path ~ Only needed this if Olympus is not used
defined('VENDORPATH') or define('VENDORPATH', realpath(dirname(__DIR__)).S.'vendor'.S);


/**
 * Apollon constants
 */

// Dictionary name
define('OL_APOLLON_DICTIONARY',    'olympus-apollon');
// Admin panel or not
define('OL_APOLLON_ISADMIN',       defined('OL_ISADMIN') ? defined('OL_ISADMIN') : is_admin());
// Current directory path
define('OL_APOLLON_PATH',          rtrim(realpath(dirname(__FILE__)), S).S);
// Languages path
define('OL_APOLLON_LANGUAGESPATH', OL_APOLLON_PATH.'languages');
// Resources path
define('OL_APOLLON_RESOURCESPATH', OL_APOLLON_PATH.'resources'.S);
// Sources path
define('OL_APOLLON_SRCPATH',       OL_APOLLON_PATH.'src'.S);
// Configurations path
define('OL_APOLLON_CONFIGSPATH',   OL_APOLLON_SRCPATH.'configurations'.S);
// Views path
define('OL_APOLLON_VIEWSPATH',     OL_APOLLON_RESOURCESPATH.'views'.S);
// Customizer preview mode
define('OL_APOLLON_CUSTOMIZER',    is_customize_preview());


/**
 * Apollon variables
 */

$apollon = get_theme_mods();
$apollon_defaults = include_once OL_APOLLON_SRCPATH.'defaults.php';

// Override via filter
$apollon = apply_filters('ol.apollon.global_apollon', $apollon);
$apollon_defaults = apply_filters('ol.apollon.global_defaults', $apollon_defaults);


/**
 * Apollon functions
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
        if (OL_APOLLON_CUSTOMIZER && !$escape_db) {
            return get_theme_mod($option, $default);
        }

        // Check value from global $apollon variable
        return !isset($apollon[$option]) ? $default : $apollon[$option];
    }
}


/**
 * ApollonFrontendTheme class
 */

if (!class_exists('ApollonFrontendTheme')) {

    /**
     * Olympus Apollon Frontend Theme.
     *
     * @package    ApollonFrontendTheme
     * @author     Achraf Chouk <achrafchouk@gmail.com>
     * @since      0.0.1
     *
     */

    class ApollonFrontendTheme extends \GetOlympus\Zeus\Zeus
    {
        protected $components = [
            'adminpages'  => OL_APOLLON_SRCPATH.'adminpages',
            'controls'    => OL_APOLLON_SRCPATH.'controls',
            'customizers' => OL_APOLLON_SRCPATH.'customizers',
            'sections'    => OL_APOLLON_SRCPATH.'sections',
        ];

        protected $configurations = [
            'AccessManagement' => OL_APOLLON_CONFIGSPATH.'access-management.php',
            'AdminThemes'      => OL_APOLLON_CONFIGSPATH.'admin-themes.php',
            'Assets'           => OL_APOLLON_CONFIGSPATH.'assets.php',
            'Menus'            => OL_APOLLON_CONFIGSPATH.'menus.php',
            'Settings'         => OL_APOLLON_CONFIGSPATH.'settings.php',
            'Shortcodes'       => OL_APOLLON_CONFIGSPATH.'shortcodes.php',
            'Sidebars'         => OL_APOLLON_CONFIGSPATH.'sidebars.php',
            'Sizes'            => OL_APOLLON_CONFIGSPATH.'sizes.php',
            'Supports'         => OL_APOLLON_CONFIGSPATH.'supports.php',
        ];

        protected $translations = [
            'olympus-apollon'  => OL_APOLLON_LANGUAGESPATH,
        ];

        /**
         * Prepare variables.
         */
        protected function setVars()
        {
            // Load Zeus framework vendors
            if (file_exists($autoload = VENDORPATH.'autoload.php')) {
                include $autoload;
            }

            /**
             * Apollon constants overrider
             */

            // Menu walker
            require_once OL_APOLLON_SRCPATH.'walkers'.S.'MenuWalker.php';

            // Include all hooks
            include_once OL_APOLLON_SRCPATH.'hooks.php';
        }
    }
}

// Instanciate ApollonFrontendTheme
return new ApollonFrontendTheme();
