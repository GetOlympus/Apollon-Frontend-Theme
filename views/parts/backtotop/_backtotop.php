<?php

/**
 * Back to top button part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_backtotop)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Check whether main back to top button feature is enabled.
 *
 * @param  bool
 *
 * @return bool
 */
if (!apply_filters('ol.apollon.backtotop_start', false)) {
    return;
}

$_backtotop = array_merge([
    'options'  => [],
    'template' => 'default',
], $_backtotop);


/**
 * Override available back to top button templates.
 *
 * @return array
 */
$_backtotop['available'] = apply_filters('ol.apollon.backtotop_available_files', [
    'default'
]);

if (empty($_backtotop['template']) || !in_array($_backtotop['template'], $_backtotop['available'])) {
    $_backtotop['template'] = $_backtotop['available'][0];
}

$_backtotop['filename'] = $_backtotop['template'].'.php';


/**
 * Override default back to top button options.
 *
 * @return array
 */
$_backtotop['options'] = apply_filters('ol.apollon.backtotop_options', array_merge([
    'label'    => '',
    'icon'     => true,
    'mobile'   => true,
    'margin'   => 'small',
    'position' => 'right',
    'style'    => 'secondary',
], $_backtotop['options']));


/**
 * Override back to top button vars.
 *
 * @return array
 */
$_backtotop = apply_filters('ol.apollon.backtotop_vars', $_backtotop);


/**
 * Fires before displaying back to top button part.
 *
 * @param  array   $_backtotop
 */
do_action('ol.apollon.backtotop_part_before', $_backtotop);

// Include template
include __DIR__.S.$_backtotop['filename'];


/**
 * Fires after displaying back to top button part.
 *
 * @param  array   $_backtotop
 */
do_action('ol.apollon.backtotop_part_after', $_backtotop);
