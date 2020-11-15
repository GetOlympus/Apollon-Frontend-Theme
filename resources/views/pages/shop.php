<?php

/**
 * Shop page template
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

the_post();

get_header() ?>

    <?php do_action('woocommerce_before_main_content') ?>
        <header class="p-header">
            <h1 class="p-title header" itemprop="name">
                <strong><?php echo get_the_title() ?></strong>
            </h1>

            <?php do_action('woocommerce_archive_description') ?>
        </header>

        <?php echo do_shortcode(get_the_content()) ?>
    <?php do_action('woocommerce_after_main_content') ?>

<?php
get_footer();
