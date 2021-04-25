<?php

/**
 * Apollon loops hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.loops_options', function ($loop) {
    $default = apollonGetOption($loop.'-use-default');
    $target  = $default ? 'website' : $loop;

    $options = [
        'container'        => apollonGetOption($target.'-container'),
        'padding'          => apollonGetOption($target.'-padding'),
        'content'          => apollonGetOption($target.'-content'),
        'columns'          => apollonGetOption($target.'-columns'),
        'gap'              => apollonGetOption($target.'-gap'),
        'divider'          => apollonGetOption($target.'-divider'),
        'match-height'     => apollonGetOption($target.'-match-height'),
        'sidebar-position' => apollonGetOption($target.'-sidebar-position'),
        'sidebar-1'        => apollonGetOption($target.'-sidebar-1'),
        'sidebar-2'        => apollonGetOption($target.'-sidebar-2'),
        'sidebars'         => false,
    ];

    // Get sidebars override option
    if ('homepage' !== $loop) {
        $options['sidebars'] = apollonGetOption($target.'-sidebars');
    }

    // Check if loop is "Homepage" or "Website"
    if (in_array($loop, ['website', 'homepage'])) {
        return $options;
    }

    // Get default options
    foreach ($options as $opt => $value) {
        if (is_bool($value) || !empty($value)) {
            continue;
        }

        $options[$opt] = apollonGetDefault('homepage-'.$opt);
    }

    return $options;
});

add_action('ol.apollon.loop_default_before', function ($loop) {
    // Check title
    if (empty($loop['title'])) {
        return;
    }

    add_filter('ol.apollon.body_header_section_check', function ($check) {
        return true;
    });

    add_filter('ol.apollon.body_header_section', function ($header, $options) use ($loop) {
        // Define vars
        $container = ' uk-container-'.$options['container'];
        $padding   = $options['padding'] ? '' : ' uk-padding-remove';
        $title     = $loop['title'];

/*
<header class="uk-section uk-section-default uk-padding-remove-bottom" uk-height-viewport="expand:true">
    <div class="uk-container">
        <h3 class="uk-h2 uk-text-center">
            <?php echo $_loop['meta'] ?>
            <?php echo $_loop['title'] ?>
        </h3>
    </div>
</header>
*/

        // Build header
        $header = <<<EOT
    <!-- title -->
    <section class="uk-section uk-section-primary uk-preserve-color" uk-height-viewport="expand:true">
        <div class="uk-container $container $padding">
            <h1 class="uk-h2">{$loop['title']}</h1>
            <h2 class="uk-h3 uk-margin-remove-top">{$loop['meta']}</h2>
        </div>
    </section>

    EOT;

        return $header;
    }, 10, 2);
});

add_action('ol.apollon.loop_default_sidebar', function ($loop) {
    // Display sidebars
    if ('left' === $loop['sidebar-position']) {
        if ($loop['sidebar-1']) {
            apollonGetPart('sidebar.php', [
                'css'      => 'uk-flex-first',
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-1',
            ]);
        }

        if ($loop['sidebar-2']) {
            apollonGetPart('sidebar.php', [
                'css'      => 'uk-flex-first',
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-2',
            ]);
        }
    }

    if ('center' === $loop['sidebar-position'] && $loop['sidebar-1']) {
        apollonGetPart('sidebar.php', [
            'css'      => 'uk-flex-first',
            'override' => $loop['sidebars'],
            'sidebar'  => $loop['sidebar'].'-1',
        ]);
    }

    if ('center' === $loop['sidebar-position'] && $loop['sidebar-2']) {
        apollonGetPart('sidebar.php', [
            'override' => $loop['sidebars'],
            'sidebar'  => $loop['sidebar'].'-2',
        ]);
    }

    if ('right' === $loop['sidebar-position']) {
        if ($loop['sidebar-1']) {
            apollonGetPart('sidebar.php', [
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-1',
            ]);
        }

        if ($loop['sidebar-2']) {
            apollonGetPart('sidebar.php', [
                'override' => $loop['sidebars'],
                'sidebar'  => $loop['sidebar'].'-2',
            ]);
        }
    }
});
