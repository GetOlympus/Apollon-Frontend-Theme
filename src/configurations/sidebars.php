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

return [
    /**
     * @var     string  $key    The sidebar uniq key.
     * @param   array   $args   The sidebar arguments.
     */

    // Footer sidebars
    'top_1'  => [
        'name'          => __('apollon.cf.sidebars.top_1', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-top-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'top_2'  => [
        'name'          => __('apollon.cf.sidebars.top_2', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-top-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'top_3'  => [
        'name'          => __('apollon.cf.sidebars.top_3', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-top-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'top_4'  => [
        'name'          => __('apollon.cf.sidebars.top_4', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-top-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],

    'main_1'  => [
        'name'          => __('apollon.cf.sidebars.main_1', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-main-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'main_2'  => [
        'name'          => __('apollon.cf.sidebars.main_2', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-main-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'main_3'  => [
        'name'          => __('apollon.cf.sidebars.main_3', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-main-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'main_4'  => [
        'name'          => __('apollon.cf.sidebars.main_4', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-main-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],

    'sub_1'  => [
        'name'          => __('apollon.cf.sidebars.sub_1', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-sub-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'sub_2'  => [
        'name'          => __('apollon.cf.sidebars.sub_2', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-sub-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'sub_3'  => [
        'name'          => __('apollon.cf.sidebars.sub_3', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-sub-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],
    'sub_4'  => [
        'name'          => __('apollon.cf.sidebars.sub_4', OL_APOLLON_DICTIONARY),
        'description'   => '',
        'class'         => 'sidebar-sub-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-h5 uk-width-2xlarge uk-margin-auto">',
        'after_title'   => '</h4>',
    ],

/*
    'page-1' => [
        'name'          => __('Archive front-page #1', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #1 next to blog list on archive front-page and pages', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-front-page',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],
    'page-2' => [
        'name'          => __('Archive front-page #2', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #2 next to blog list on archive front-page and pages', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-front-page',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],

    'blog-1' => [
        'name'          => __('Single post #1', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #1 next to single post content', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-single-post',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],
    'blog-2' => [
        'name'          => __('Single post #2', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #2 next to single post content', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-single-post',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],

    'archive-1' => [
        'name'          => __('Archive category #1', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #1 next to blog list on archive category', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-archive-category',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],
    'archive-2' => [
        'name'          => __('Archive category #2', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #2 next to blog list on archive category', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-archive-category',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],

    'search-1' => [
        'name'          => __('Search page #1', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #1 next to result list on search page', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-search-page',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],
    'search-2' => [
        'name'          => __('Search page #2', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar #2 next to result list on search page', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-search-page',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],

    'footer' => [
        'name'          => __('Footer content', OL_APOLLON_DICTIONARY),
        'description'   => __('Sidebar on footer content', OL_APOLLON_DICTIONARY),
        'class'         => 'sidebar-footer',
        'before_widget' => '<div id="%1$s" class="uk-section uk-padding-remove uk-margin-medium-bottom %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="uk-text-small">',
        'after_title'   => '</h4>',
    ],*/
];
