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


/**
 * Fires before displaying 404 page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_404_before', $_page);

get_header();

?>

<!-- container -->
<section class="uk-section uk-section-default" uk-height-viewport="expand: true">
    <div class="uk-container">
        <h1 class="uk-heading-medium uk-text-center">
            <?php echo __('apollon.th.404.title', OL_APOLLON_DICTIONARY) ?>
        </h1>

        <p class="uk-text-large uk-text-center uk-margin-large-bottom">
            <?php echo __('apollon.th.404.desc', OL_APOLLON_DICTIONARY) ?>
        </p>

        <div class="uk-text-center">
            <?php apollonGetPart('searchform.php', ['template' => 'simple']) ?>
        </div>
    </div>
</section>

<?php

get_footer();


/**
 * Fires after displaying 404 page.
 *
 * @param  array   $_page
 */
do_action('ol.apollon.page_404_after', $_page);
