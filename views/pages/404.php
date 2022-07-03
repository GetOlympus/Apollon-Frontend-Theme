<?php

/**
 * 404 page template.
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}


/**
 * Override 404 page vars.
 *
 * @return array
 */
$_page = apply_filters('ol.apollon.page_404_vars', []);

// Update vars
$_page = array_merge($_page, [
    'container' => apollonGetOption('404-container'),
    'content'   => apollonGetOption('404-content'),
]);


/**
 * Fires before displaying 404 page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_404_before', $_page);

get_header();

echo '<!-- container -->'."\n";

echo sprintf(
    '<section class="uk-section uk-container uk-container-%s uk-flex uk-flex-center" uk-height-viewport="expand:true">',
    $_page['container']
);

echo sprintf(
    '<div class="uk-width-1-1@s uk-width-%s@m">',
    $_page['content']
);

echo sprintf(
    '<h1 class="%s">%s</h1>',
    'uk-heading-medium uk-text-center',
    __('apollon.th.404.title', OL_APOLLON_DICTIONARY)
);

echo sprintf(
    '<p class="%s">%s</p>',
    'uk-text-large uk-text-center uk-margin-large-bottom',
    __('apollon.th.404.desc', OL_APOLLON_DICTIONARY)
);

echo '<div class="uk-text-center">';

apollonGetPart('searchform.php', ['template' => 'simple']);

echo '</div>';

echo '</div>';

echo '</section>';

get_footer();


/**
 * Fires after displaying 404 page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_404_after', $_page);

// Freedom
unset($_page);
