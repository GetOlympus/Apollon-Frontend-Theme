<?php

/**
 * Ads _default part: special case for all default templates
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_ads)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_ads['html'] = sprintf(
    __('<aside class="%s">%s%s</aside>'),
    sprintf(
        __('uk-card uk-card-body uk-card-%s uk-card-%s'),
        $_ads['size'],
        $_ads['mode']
    ),
    $_ads['code'],
    $_ads['title'] ? sprintf(
        __('<span class="%s">%s</span>'),
        'uk-position-bottom-right',
        $_ads['title']
    ) : ''
);


/**
 * Fires before displaying `_default` ads.
 *
 * @param  array   $_ads
 */
do_action('ol.apollon.ads_part_'.$_ads['template'].'_before', $_ads);

echo $_ads['html'];


/**
 * Fires after displaying `_default` ads.
 *
 * @param  array   $_ads
 */
do_action('ol.apollon.ads_part_'.$_ads['template'].'_after', $_ads);
