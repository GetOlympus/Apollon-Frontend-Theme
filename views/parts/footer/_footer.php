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
$_footer['args'] = apply_filters('ol.apollon.footer_args', array_merge([], $_footer['args']));


/**
 * Override default footer labels.
 *
 * @return array
 */
$_footer['labels'] = apply_filters('ol.apollon.footer_labels', array_merge([
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
$_footer['urls'] = apply_filters('ol.apollon.footer_urls', array_merge([
    'homepage' => OL_BLOG_HOME,
    'logosrc'  => OL_TPL_DIR_URI.'/app/img/apollon-h.png',
], $_footer['urls']));


/**
 * Override footer options.
 *
 * @return array
 */
$_footer['options'] = apply_filters('ol.apollon.footer_options', array_merge([
    // Grid
    'grid-container' => 'medium',

    // Sections
    'section-top-enable'  => false,
    'section-top'         => [],
    'section-main-enable' => false,
    'section-main'        => [],
    'section-sub-enable'  => false,
    'section-sub'         => [],
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
include __DIR__.S.'wrapper.php';


/**
 * Fires after displaying footer part.
 *
 * @param  array   $_footer
 */
do_action('ol.apollon.footer_part_after', $_footer);
