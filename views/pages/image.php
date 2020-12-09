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

?>

<!-- container -->
<section class="uk-section uk-section-default" uk-height-viewport="expand: true">
    <div class="uk-container">
        <h1 class="uk-h3 uk-text-center">
            <?php echo $_page['parent']['title'] ?>
        </h1>

        <figure class="uk-text-center" role="img">
            <?php echo $_page['image'] ?>
        </figure>

        <div class="uk-text-center">
            <?php echo sprintf(
                '<a href="%s" title="%s" class="uk-button">%s</a>',
                $_page['parent']['link'],
                esc_html($_page['parent']['title']),
                '<span uk-icon="arrow-left"></span> '.$_page['parent']['title']
            ) ?>
        </div>
    </div>
</section>

<?php

get_footer();


/**
 * Fires after displaying image page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_image_after', $_page);
