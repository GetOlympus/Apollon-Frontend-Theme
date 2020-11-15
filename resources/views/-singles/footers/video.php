<?php

/**
 * Post video template footer
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$formats = getPostTypes('no-post');
$ppp = get_option('posts_per_page');

// Get posts
$chquery = new WP_Query([
    'post_type' => 'video',
    'post_status' => 'publish',
    'posts_per_page' => 20,
]);

if (!$chquery || !$chquery->have_posts()) {
    return;
}

/*
<div class="progress-bar ui big progress">
    <div class="bar" style="width:100%">Toutes nos vidéos</div>
</div>
*/

?>

    <aside class="l-loop ui cards" role="complementary">
        <?php
            $trim = true;
            $description = false;

            while ($chquery->have_posts()) {
                $chquery->the_post();
                include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'video.php';
            }

            wp_reset_postdata();
            unset($trim);
            unset($description);
        ?>

        <a href="<?php echo get_post_type_archive_link('video') ?>page/2/" class="item fluid ui large button main" rel="next">
            <span>VOIR PLUS DE CONTENUS</span>
        </a>
    </div>
