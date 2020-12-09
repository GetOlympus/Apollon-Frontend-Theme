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
        'label'    => apollonGetOption('backtotop_label'),
        'icon'     => apollonGetOption('backtotop_icon'),
        'mobile'   => apollonGetOption('backtotop_mobile'),
        'margin'   => apollonGetOption('backtotop_margin'),
        'position' => apollonGetOption('backtotop_position'),
        'style'    => apollonGetOption('backtotop_style'),
    ];
});
