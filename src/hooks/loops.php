<?php

/**
 * Apollon loops hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.loops_options', function ($loop) {
    $options = [
        'container'  => apollonGetOption($loop.'-container'),
        'content'    => apollonGetOption($loop.'-content'),
        'gridgap'    => apollonGetOption($loop.'-gridgap'),
        'columns'    => apollonGetOption($loop.'-columns'),
        'sidebarpos' => apollonGetOption($loop.'-sidebarpos'),
        'sidebar1'   => apollonGetOption($loop.'-sidebar1'),
        'sidebar2'   => apollonGetOption($loop.'-sidebar2'),
        'sidebars'   => apollonGetOption($loop.'-sidebars'),
    ];

    foreach ($options as $opt => $value) {
        if (!empty($value)) {
            continue;
        }

        $options[$opt] = apollonGetDefault('homepage-'.$opt);
    }

    $options['divider']      = apollonGetOption('website-grid-divider');
    $options['match-height'] = apollonGetOption('website-grid-match-height');

    return $options;
});

add_action('ol.apollon.loop_default_sidebar', function ($loop) {
    // Display sidebars
    if ('left' === $loop['sidebarpos']) {
        if ($loop['sidebar1']) {
            apollonGetPart('sidebar.php', [
                'css'      => 'uk-flex-first',
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-1',
            ]);
        }

        if ($loop['sidebar2']) {
            apollonGetPart('sidebar.php', [
                'css'      => 'uk-flex-first',
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-2',
            ]);
        }
    }

    if ('center' === $loop['sidebarpos'] && $loop['sidebar1']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $loop['sidebars'],
            'sidebar'  => $loop['sidebar'].'-1',
        ]);
    }

    if ('center' === $loop['sidebarpos'] && $loop['sidebar2']) {
        apollonGetPart('sidebar.php', [
            'override' => $loop['sidebars'],
            'sidebar'  => $loop['sidebar'].'-2',
        ]);
    }

    if ('right' === $loop['sidebarpos']) {
        if ($loop['sidebar1']) {
            apollonGetPart('sidebar.php', [
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-1',
            ]);
        }

        if ($loop['sidebar2']) {
            apollonGetPart('sidebar.php', [
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-2',
            ]);
        }
    }
});
