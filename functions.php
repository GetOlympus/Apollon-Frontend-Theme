<?php

namespace ApollonFrontendTheme;

/**
 * OLYMPUS APOLLON FRONTEND THEME
 *
 * Theme Name:  Olympus Apollon
 *
 * Description: Olympus Apollon is a frontend WordPress theme built with the Olympus Zeus Core framework system.
 * Apollon is an incredibly powerful and flexible WordPress theme, light weight and unbelievably fast.
 * Build with ♥ for WordPress developers.
 *
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
// Root path ~ Define theme root path
defined('ROOTPATH')   or define('ROOTPATH', rtrim(realpath(dirname(__FILE__)), S).S);
// Cache path ~ Only needed this if Olympus is not used
defined('CACHEPATH')  or define('CACHEPATH', ROOTPATH.'cache'.S);
// Vendor path ~ Only needed this if Olympus is not used
defined('VENDORPATH') or define('VENDORPATH', ROOTPATH.'vendor'.S);


/**
 * Apollon constants
 */

// CSS filename
define('OL_APOLLON_CSS_FILENAME', 'variables.less');
// Dictionary name
define('OL_APOLLON_DICTIONARY', 'olympus-apollon');
// Customizer preview mode
define('OL_APOLLON_ISCUSTOMIZER', is_customize_preview());
// Resources path
define('OL_APOLLON_RESOURCESPATH', ROOTPATH.'resources'.S);
// Sources path
define('OL_APOLLON_SRCPATH', ROOTPATH.'src'.S);


/**
 * Apollon variables
 */

$apollon = apply_filters('ol.apollon.global_apollon', get_theme_mods());
$apollon_defaults = apply_filters('ol.apollon.global_defaults', include_once OL_APOLLON_SRCPATH.'defaults.php');


/**
 * Apollon requires
 */

require_once OL_APOLLON_SRCPATH.'funcs.php';
require_once OL_APOLLON_SRCPATH.'walkers'.S.'MenuWalker.php';


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
            //'adminpages'  => OL_APOLLON_SRCPATH.'adminpages',
            'controls'    => OL_APOLLON_SRCPATH.'controls',
            'customizers' => OL_APOLLON_SRCPATH.'customizers',
            'sections'    => OL_APOLLON_SRCPATH.'sections',
        ];

        protected $configurations = [
            'AccessManagement' => OL_APOLLON_SRCPATH.'configurations'.S.'access-management.php',
            'AdminThemes'      => OL_APOLLON_SRCPATH.'configurations'.S.'admin-themes.php',
            'Assets'           => OL_APOLLON_SRCPATH.'configurations'.S.'assets.php',
            'Menus'            => OL_APOLLON_SRCPATH.'configurations'.S.'menus.php',
            'Settings'         => OL_APOLLON_SRCPATH.'configurations'.S.'settings.php',
            'Shortcodes'       => OL_APOLLON_SRCPATH.'configurations'.S.'shortcodes.php',
            'Sidebars'         => OL_APOLLON_SRCPATH.'configurations'.S.'sidebars.php',
            'Sizes'            => OL_APOLLON_SRCPATH.'configurations'.S.'sizes.php',
            'Supports'         => OL_APOLLON_SRCPATH.'configurations'.S.'supports.php',
        ];

        protected $translations = [
            OL_APOLLON_DICTIONARY => ROOTPATH.'languages',
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

            // Include BUILDER & INC FILES hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'builder.php';

            // Include ASSETS hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'assets.php';

            // Include FEATURES hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'features.php';

            // Include HEADER & LOGO & WRAPPERS hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'header.php';

            // Include LAYOUTS hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'posttypes.php';
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'sidebars.php';

            // Include FOOTER hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'footer.php';

            // Include WORDPRESS hooks
            include_once OL_APOLLON_SRCPATH.'hooks'.S.'wordpress.php';
        }
    }
}

// Instanciate main Apollon class
return new ApollonFrontendTheme();
