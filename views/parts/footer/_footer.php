<?php

/**
 * Footer part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_footer)) {
    die('You are not authorized to directly access to this page');
}

// Include functions
include __DIR__.S.'_function.php';

// Content starts
$_footer = array_merge([
    'args'     => [],
    'labels'   => [],
    'urls'     => [],
    'options'  => [],
], $_footer);


/**
 * Override default footer args.
 *
 * @return array
 */
$_footer['args'] = apply_filters('ol.apollon.footer_default_args', array_merge([], $_footer['args']));


/**
 * Override default footer labels.
 *
 * @return array
 */
$_footer['labels'] = apply_filters('ol.apollon.footer_default_labels', array_merge([
    'author'   => __('apollon.th.footer.copyright', OL_APOLLON_DICTIONARY),
    'heart'    => '<span data-uk-icon="heart"></span>',
    'name'     => OL_BLOG_NAME,
    'name_esc' => OL_BLOG_NAME_ESCAPED,
    'year'     => date('Y'),
], $_footer['labels']));


/**
 * Override default footer urls.
 *
 * @return array
 */
$_footer['urls'] = apply_filters('ol.apollon.footer_default_urls', array_merge([
    'homepage' => OL_BLOG_HOME,
    'logosrc'  => OL_TPL_DIR_URI.'/app/img/apollon-h.png',
], $_footer['urls']));


/**
 * Override footer options.
 *
 * @return array
 */
$_footer['options'] = apply_filters('ol.apollon.footer_default_options', array_merge([
    // Grid
    'grid_container' => 'medium',

    // Sections
    'topsection_enable'  => false,
    'mainsection_enable' => false,
    'subsection_enable'  => false,
], $_footer['options']));


/**
 * Override footer vars.
 *
 * @return array
 */
$_footer = apply_filters('ol.apollon.footer_vars', $_footer);


/**
 * Fires before displaying footer part.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.footer_part_before', $_footer);

// Include template
include __DIR__.S.'_wrapper.php';


/**
 * Fires after displaying footer part.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.footer_part_after', $_footer);
