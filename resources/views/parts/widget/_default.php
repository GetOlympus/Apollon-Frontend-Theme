<?php

/**
 * Widget _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_widget)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying `_default` widget.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_part_'.$_widget['template'].'_before', $_widget);

// Do nothing


/**
 * Fires after displaying `_default` widget.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_part_'.$_widget['template'].'_after', $_widget);
