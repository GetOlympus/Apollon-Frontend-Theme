<?php

/**
 * Post template footer
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// DO NOTHING ON THIS PAGE FROM NOW ON
return;

$formats = getPostTypes('no-post');
$ppp = get_option('posts_per_page');

// Get posts
$chquery = new WP_Query([
    'ignore_sticky_posts' => 0,
    'post_type'         => getPostTypes('homepage'),
    'post_status'       => 'publish',
    'post__not_in'      => [],
    'posts_per_page'    => $ppp,
    'meta_query'        => [
        [
            'key' => '_thumbnail_id',
        ],
    ],
]);

unset($ppp);

if (!$chquery || !$chquery->have_posts()) {
    return;
}

?>

    <div class="progress-bar ui big progress">
        <div class="bar" style="width:100%">Le chrono</div>
    </div>

    <aside class="l-loop l-progress ui cards" role="complementary">
        <?php
            while ($chquery->have_posts()) {
                $chquery->the_post();
                $id = get_the_ID();

                // Works on post type
                $type = get_post_type();

                // Works on formats
                if (in_array($type, $formats)) {
                    $format = $type;
                } else {
                    $format = get_post_format() ? : 'standard';
                    $cover = in_array($format, ['image']) ? 'rvs-cover' : 'rvs-default';
                    $format = in_array($format, ['image']) ? $format : 'standard';
                }

                // Display post
                include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.$format.'.php';
            }

            wp_reset_postdata();
            unset($cover);
            unset($format);
            unset($id);
            unset($type);
            unset($chquery);
        ?>

        <a href="<?php echo OL_BLOG_HOME_URL_ESCAPED ?>page/2/" class="item fluid ui large button main" rel="next">
            <span>VOIR PLUS DE CONTENUS</span>
        </a>
    </aside>
