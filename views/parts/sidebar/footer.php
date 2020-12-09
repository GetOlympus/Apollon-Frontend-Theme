<?php

/**
 * Sidebar footer part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_sidebar)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying footer sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_footer_before', $_sidebar);

echo sprintf(
    '<aside class="uk-width-%s@m%s">',
    $_sidebar['size'],
    !empty($_sidebar['css']) ? ' '.$_sidebar['css'] : ''
);

dynamic_sidebar($_sidebar['sidebar']);

echo '</aside>';


/**
 * Fires after displaying footer sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_footer_after', $_sidebar);
