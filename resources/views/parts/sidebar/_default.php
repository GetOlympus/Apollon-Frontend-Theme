<?php

/**
 * Sidebar _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_sidebar)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying `_default` sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_'.$_sidebar['template'].'_before', $_sidebar);

echo sprintf(
    '<aside class="uk-width-%s@m">',
    $_sidebar['size']
);

echo sprintf(
    '<div class="uk-sidebar%s%s%s%s"%s>',
    ' uk-background-'.$_sidebar['background'],
    !empty($_sidebar['paddingh']) ? ' uk-padding-'.$_sidebar['paddingh'].'-horizontal' : '',
    !empty($_sidebar['paddingv']) ? ' uk-padding-'.$_sidebar['paddingv'].'-vertical' : '',
    !empty($_sidebar['css']) ? ' '.$_sidebar['css'] : '',
    !$_sidebar['sticky'] ? '' : ' uk-sticky="bottom:true"'
);

dynamic_sidebar($_sidebar['template']);

echo '</div>';
echo '</aside>';


/**
 * Fires after displaying `_default` sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_'.$_sidebar['template'].'_after', $_sidebar);
