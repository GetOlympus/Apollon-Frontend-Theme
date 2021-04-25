<?php

/**
 * Apollon sidebars hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.sidebar_vars', function ($sidebar) {
    // Define sidebar layout
    $layout = '2' === substr($sidebar['sidebar'], 2) ? '2' : '1';

    // Override
    if (isset($sidebar['override']) && $sidebar['override']) {
        $sidebar['sidebar'] = 'default-'.$layout;
    }

    // Get options
    return array_merge($sidebar, [
        'background' => apollonGetOption('sidebar-'.$layout.'-background'),
        'mobile'     => apollonGetOption('sidebar-'.$layout.'-mobile'),
        'size'       => !empty($sidebar['size']) ? $sidebar['size'] : apollonGetOption('sidebar-'.$layout.'-size'),
        'sticky'     => apollonGetOption('sidebar-'.$layout.'-sticky'),
    ]);
});
