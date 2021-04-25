<?php

/**
 * Sidebar default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_sidebar)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_default_before', $_sidebar);

echo sprintf(
    '<aside class="uk-width-%s@m%s%s">',
    $_sidebar['size'],
    !$_sidebar['mobile'] ? '' : ' uk-visible@s',
    !empty($_sidebar['css']) ? ' '.$_sidebar['css'] : ''
);

echo sprintf(
    '<div class="uk-sidebar %s"%s>',
    'uk-background-'.$_sidebar['background'],
    !$_sidebar['sticky'] ? '' : ' uk-sticky="bottom:true"'
);

dynamic_sidebar($_sidebar['sidebar']);

echo '</div>';
echo '</aside>';


/**
 * Fires after displaying default sidebar.
 *
 * @param  array   $_sidebar
 */
do_action('ol.apollon.sidebar_part_default_after', $_sidebar);
