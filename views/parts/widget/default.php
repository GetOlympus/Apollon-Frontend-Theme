<?php

/**
 * Widget default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_widget)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default widget.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_part_default_before', $_widget);

// Do nothing for now


/**
 * Fires after displaying default widget.
 *
 * @param  array   $_widget
 */
do_action('ol.apollon.widget_part_default_after', $_widget);
