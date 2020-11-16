<?php

/**
 * Post template social footer
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$ppp = get_option('posts_per_page');

// Get posts
$chquery = new WP_Query([
    'ignore_sticky_posts' => 0,
    'post_type'         => 'social',
    'post_status'       => 'publish',
    'post__not_in'      => [$_post['id']],
    'posts_per_page'    => $ppp,
]);

if (!$chquery || !$chquery->have_posts()) {
    return;
}

?>

    <div class="progress-bar ui big progress">
        <div class="bar" style="width:100%">Nos autres instants sociaux</div>
    </div>

    <aside class="l-loop l-progress ui cards" role="complementary">
        <?php
            while ($chquery->have_posts()) {
                $chquery->the_post();
                $id = get_the_ID();

                // Display post
                include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'social.php';
            }

            wp_reset_postdata();
            unset($id);
            unset($chquery);
        ?>

        <a href="<?php echo get_post_type_archive_link('social') ?>page/2/" class="item fluid" rel="next">
            <span>VOIR PLUS DE CONTENUS</span>
        </a>
    </aside>
