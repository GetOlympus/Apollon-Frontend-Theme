<?php

/**
 * Apollon sidebars hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */


// SIDEBARS

add_filter('ol.apollon.sidebar_vars', function ($sidebar) {
    // Define sidebar layout
    $layout = '_2' === substr($sidebar['sidebar'], -2) ? '_2' : '_1';

    // Override
    if (isset($sidebar['override']) && $sidebar['override']) {
        $sidebar['sidebar'] = 'default'.$layout;
    }

    // Get options
    return array_merge($sidebar, [
        'background' => apollonGetOption('sidebar'.$layout.'_background'),
        'mobile'     => apollonGetOption('sidebar'.$layout.'_mobile'),
        'size'       => !empty($sidebar['size']) ? $sidebar['size'] : apollonGetOption('sidebar'.$layout.'_size'),
        'sticky'     => apollonGetOption('sidebar'.$layout.'_sticky'),
    ]);
});
