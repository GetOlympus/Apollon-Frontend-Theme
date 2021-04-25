<?php

/**
 * Apollon back to top features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.backtotop_options', function ($options) {
    return [
        'label'    => apollonGetOption('backtotop-label'),
        'icon'     => apollonGetOption('backtotop-icon'),
        'mobile'   => apollonGetOption('backtotop-mobile'),
        'margin'   => apollonGetOption('backtotop-margin'),
        'position' => apollonGetOption('backtotop-position'),
        'style'    => apollonGetOption('backtotop-style'),
    ];
});
