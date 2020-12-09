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

$before_widget = '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">';
$after_widget  = '</div>';

$before_title = '<h4 class="uk-h4 uk-text-small">';
$after_title  = '</h4>';

return [
    /**
     * @var     string  $key    The sidebar uniq key.
     * @param   array   $args   The sidebar arguments.
     */

    // Archives sidebars
    'default_1' => [
        'name'          => sprintf(__('apollon.cf.sidebars.default', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'default_2' => [
        'name'          => sprintf(__('apollon.cf.sidebars.default', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],

    'archives_1' => [
        'name'          => sprintf(__('apollon.cf.sidebars.archives', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'archives_2' => [
        'name'          => sprintf(__('apollon.cf.sidebars.archives', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],

    'search_1' => [
        'name'          => sprintf(__('apollon.cf.sidebars.search', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'search_2' => [
        'name'          => sprintf(__('apollon.cf.sidebars.search', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],


    // Singles sidebars
    'post_1' => [
        'name'          => sprintf(__('apollon.cf.sidebars.post', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'post_2' => [
        'name'          => sprintf(__('apollon.cf.sidebars.post', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],


    // Footer sidebars
    'top_1'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'top_2'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'top_3'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 3),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'top_4'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.top', OL_APOLLON_DICTIONARY), 4),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],

    'main_1'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'main_2'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'main_3'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 3),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'main_4'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.main', OL_APOLLON_DICTIONARY), 4),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],

    'sub_1'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 1),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'sub_2'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 2),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'sub_3'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 3),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
    'sub_4'  => [
        'name'          => sprintf(__('apollon.cf.sidebars.sub', OL_APOLLON_DICTIONARY), 4),
        'description'   => '',
        'class'         => 's-sidebar',
        'before_widget' => $before_widget,
        'after_widget'  => $after_widget,
        'before_title'  => $before_title,
        'after_title'   => $after_title,
    ],
];
