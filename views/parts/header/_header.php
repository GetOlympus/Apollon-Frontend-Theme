<?php

/**
 * Header part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_header)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_header = array_merge([
    'args'      => [],
    'labels'    => [],
    'urls'      => [],
    'metas'     => [],
    'links'     => [],
    'scripts'   => [],
    'options'   => [],
], $_header);


/**
 * Override default header args.
 *
 * @return array
 */
$_header['args'] = apply_filters('ol.apollon.header_args', array_merge([
    'bodyclass' => '',
    'htmlattrs' => sprintf(
        ' xmlns="http://www.w3.org/1999/xhtml" xml:lang="%s" lang="%s" xmlns:og="%s" xmlns:fb="%s"',
        OL_BLOG_LANGUAGE,
        OL_BLOG_LANGUAGE,
        'http://ogp.me/ns#',
        'http://ogp.me/ns/fb#'
    ),
], $_header['args']));


/**
 * Override default header labels.
 *
 * @return array
 */
$_header['labels'] = apply_filters('ol.apollon.header_labels', array_merge([
    'author'   => OL_BLOG_AUTHOR,
    'charset'  => OL_BLOG_CHARSET,
    'desc'     => OL_BLOG_DESCRIPTION,
    'desc_esc' => OL_BLOG_DESCRIPTION_ESCAPED,
    'language' => OL_BLOG_LANGUAGE,
    'name'     => OL_BLOG_NAME,
    'name_esc' => OL_BLOG_NAME_ESCAPED,
], $_header['labels']));


/**
 * Override default header urls.
 *
 * @return array
 */
$_header['urls'] = apply_filters('ol.apollon.header_urls', array_merge([
    'homepage' => OL_BLOG_HOME,
    'logosrc'  => OL_TPL_DIR_URI.'/app/img/apollon.png',
    'pingback' => OL_BLOG_PINGBACK_URL,
    'rss'      => OL_BLOG_RSS,
    'themeuri' => OL_TPL_DIR_URI,
], $_header['urls']));


/**
 * Override default header metas.
 *
 * @return array
 */
$_header['metas'] = apply_filters('ol.apollon.header_metas', array_merge([
    [
        'name'    => 'title',
        'content' => $_header['labels']['name_esc'],
    ],
    [
        'name'    => 'description',
        'content' => $_header['labels']['desc_esc'],
    ],
    [
        'charset' => $_header['labels']['charset'],
    ],
    [
        'name'    => 'viewport',
        'content' => 'width=device-width,initial-scale=1,maximum-scale=1,shrink-to-fit=no',
    ],
    [
        'http-equiv' => 'X-UA-Compatible',
        'content'    => 'IE=edge,chrome=1',
    ],
    [
        'name'    => 'author',
        'content' => $_header['labels']['author'],
    ],
], $_header['metas']));


/**
 * Override default header links.
 *
 * @return array
 */
$_header['links'] = apply_filters('ol.apollon.header_links', array_merge([
    [
        'href' => 'http://gmpg.org/xfn/11',
        'rel'  => 'profile',
    ],
    [
        'href' => $_header['urls']['pingback'],
        'rel'  => 'pingback',
    ],
], $_header['links']));


/**
 * Override default header scripts.
 *
 * @return array
 */
$_header['scripts'] = apply_filters('ol.apollon.header_scripts', array_merge([], $_header['scripts']));


/**
 * Override header options.
 *
 * @return array
 */
$_header['options'] = apply_filters('ol.apollon.header_options', array_merge([
    // Grid
    'grid_container' => 'large',

    // Navs
    'topnav_enable'  => false,
    'topnav'         => [],
    'mainnav_enable' => false,
    'mainnav'        => [],
    'subnav_enable'  => false,
    'subnav'         => [],

    // Global
    'nav_menulabel'     => '',
    'nav_shadow'        => 'none',
    'nav_sticky'        => 'none',

    // Dropdown
    'dropdown_click'    => false,
    'dropdown_position' => 'left',

    // Extra search
    'search_drop' => 'none',
    'search_tpl'  => 'default',
], $_header['options']));

// Define wether to use dropbar or not
$_header['dropbar'] = 'none' !== $_header['options']['search_drop'] && 'dropbar' === $_header['options']['search_tpl'];

/**
 * Override header vars.
 *
 * @return array
 */
$_header = apply_filters('ol.apollon.header_vars', $_header);


/**
 * Fires before displaying header part.
 *
 * @param  array   $_header
 */
do_action('ol.apollon.header_part_before', $_header);

// Include template
include __DIR__.S.'wrapper.php';


/**
 * Fires after displaying header part.
 *
 * @param  array   $_header
 */
do_action('ol.apollon.header_part_after', $_header);
