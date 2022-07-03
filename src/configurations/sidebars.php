<?php

/**
 * Add sidebars.
 *
 * @category PHP
 * @package  ApollonFrontendTheme
 * @author   Achraf Chouk <achrafchouk@gmail.com>
 * @since    0.0.1
 *
 * @see      https://developer.wordpress.org/reference/functions/register_sidebar/
 */

// Config
$config = [
    'name'          => '',
    'description'   => '',
    'class'         => 's-sidebar',
    'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="uk-h4 uk-text-small">',
    'after_title'   => '</h4>',
];

return [
    /**
     * @var     string  $key    The sidebar uniq key.
     * @param   array   $args   The sidebar arguments.
     */

    // Default sidebars
    'default-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.default', OL_APOLLON_DICTIONARY), 1),
    ]),
    'default-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.default', OL_APOLLON_DICTIONARY), 2),
    ]),

    // Archives sidebars
    'archives-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.archives', OL_APOLLON_DICTIONARY), 1),
    ]),
    'archives-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.archives', OL_APOLLON_DICTIONARY), 2),
    ]),

    // Search sidebars
    'search-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.search', OL_APOLLON_DICTIONARY), 1),
    ]),
    'search-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.search', OL_APOLLON_DICTIONARY), 2),
    ]),

    // Single sidebars
    'post-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.post', OL_APOLLON_DICTIONARY), 1),
    ]),
    'post-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.post', OL_APOLLON_DICTIONARY), 2),
    ]),

    // Top sidebars
    'top-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 1),
    ]),
    'top-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 2),
    ]),
    'top-3' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 3),
    ]),
    'top-4' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 4),
    ]),

    // Main sidebars
    'main-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 1),
    ]),
    'main-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 2),
    ]),
    'main-3' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 3),
    ]),
    'main-4' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 4),
    ]),

    // Sub sidebars
    'sub-1' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 1),
    ]),
    'sub-2' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 2),
    ]),
    'sub-3' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 3),
    ]),
    'sub-4' => array_merge($config, [
        'name' => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 4),
    ]),
];
