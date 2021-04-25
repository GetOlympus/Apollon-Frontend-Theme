<?php

/**
 * Apollon components hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

/**
 * Build separator.
 *
 * @param  string  $separator
 * @param  string  $template
 *
 * @return string
 */
add_filter('ol.apollon.component_separator', function ($use_icon = false) {
    $icon = $use_icon ? true : (bool) apollonGetOption('divider-icon', false);
    return '<hr class="'.($icon ? 'uk-divider-fill uk-divider-icon' : '').'"/>';
}, 10, 2);
