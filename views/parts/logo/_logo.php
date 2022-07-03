<?php

/**
 * Logo part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_logo)) {
    die('You are not authorized to directly access to this page');
}

/**
 * Override logo contents.
 *
 * @param  array   $contents
 *
 * @return array
 */
$_logo = apply_filters('ol.apollon.logo_contents', array_merge([
    'css'      => 'uk-navbar-item uk-logo',
    'image'    => [],
    'template' => 'default',
], $_logo));


/**
 * Override available logo templates.
 *
 * @return array
 */
$_logo['available'] = apply_filters('ol.apollon.logo_available_files', [
    'default', 'title'
]);

if (empty($_logo['template']) || !in_array($_logo['template'], $_logo['available'])) {
    $_logo['template'] = $_logo['available'][0];
}

$_logo['filename'] = $_logo['template'].'.php';


/**
 * Override logo image.
 *
 * @return array
 */
$_logo['image'] = apply_filters('ol.apollon.logo_image', array_merge([
    'url'       => OL_BLOG_HOME,
    'title'     => OL_BLOG_NAME,
    'esc_title' => OL_BLOG_NAME_ESCAPED,
    'src'       => OL_TPL_DIR_URI.'/app/img/apollon-h.png',
    'name'      => OL_BLOG_NAME_ESCAPED,
    'width'     => 200,
    'slogan'    => OL_BLOG_DESCRIPTION
], $_logo['image']));


/**
 * Override logo vars.
 *
 * @return array
 */
$_logo = apply_filters('ol.apollon.logo_vars', $_logo);


/**
 * Fires before displaying logo part.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_part_before', $_logo);

// Include template
include __DIR__.S.$_logo['filename'];


/**
 * Fires after displaying logo part.
 *
 * @param  array   $_logo
 */
do_action('ol.apollon.logo_part_after', $_logo);
