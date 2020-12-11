<?php

/**
 * Image page template
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

the_post();


/**
 * Override image page vars.
 *
 * @return array
 */
$_page = apply_filters('ol.apollon.page_image_vars', []);

// Update vars
$_page = array_merge($_page, [
    'container' => apollonGetOption('layout_media_container'),
    'content'   => apollonGetOption('layout_media_content'),
]);

// Details
$_page['parent'] = [
    'link'  => get_permalink($post->post_parent),
    'title' => get_the_title($post->post_parent),
];
$_page['image'] = wp_get_attachment_image(get_the_ID(), 'full', false, [
    'alt'       => esc_html($_page['parent']['title']),
    'itemprop'  => 'contentURL',
    'class'     => 'img-fluid',
]);


/**
 * Fires before displaying image page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_image_before', $_page);

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
    'uk-h3 uk-text-center',
    $_page['parent']['title']
);

echo sprintf(
    '<figure class="%s" role="img">%s</figure>',
    'uk-text-center',
    $_page['image']
);

echo sprintf(
    '<div class="%s">%s</div>',
    'uk-text-center',
    sprintf(
        '<a href="%s" title="%s" class="uk-button">%s</a>',
        $_page['parent']['link'],
        esc_html($_page['parent']['title']),
        '<span uk-icon="arrow-left"></span> '.$_page['parent']['title']
    )
);

echo '</div>';

echo '</section>';

get_footer();


/**
 * Fires after displaying image page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_image_after', $_page);

// Freedom
unset($_page);
