<?php

/**
 * Latest posts widget
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$category = isset($category) ? $category : 0;

// Homepage check
if (empty($category) && (is_home() || is_front_page())) {
    return;
}

// Unset post array
if (isset($_post)) {
    unset($_post);
}

$title = isset($title) ? $title : '';
$number = isset($number) ? $number : 5;
$more = isset($more) ? stripslashes($more) : '';

// Works on args
$args = [
    'post_type'         => getPostTypes('homepage'),
    'post_status'       => 'publish',
    'post__not_in'      => [],
    'posts_per_page'    => $number,
    'meta_query'        => [
        [
            'key' => '_thumbnail_id',
        ],
    ],
];

// Check category
if (!empty($category)) {
    $args['category__in'] = $category;
}

// Check category
if (empty($number)) {
    $args['posts_per_page'] = get_option('posts_per_page');
}

// Latest posts
$items = new WP_Query($args);

// Check items
if (!$items->have_posts()) {
    return;
}

// Create vars
$term = empty($category) ? '' : get_term($category);
$subtitle = empty($term) ? '' : $term->name;
$link = empty($term) ? OL_BLOG_HOME_URL_ESCAPED.'page/2/' : get_term_link($term);
$formats = getPostTypes('no-post');

// Get sticky posts
$stickies = new WP_Query([
    'post_type'         => 'post',
    'post_status'       => 'publish',
    'order'             => 'DESC',
    'orderby'           => 'date',
    'posts_per_page'    => 2,
    'ignore_sticky_posts' => 0,
    'post__in'          => [],
]);

?>

    <?php if (!empty($title) || !empty($subtitle)) : ?>
        <header>
            <h3>
                <?php echo $title ?>

                <?php if (!empty($subtitle)) : ?>
                    <a href="<?php echo $link ?>"><?php echo $subtitle ?></a>
                <?php endif ?>
            </h3>
        </header>
    <?php endif ?>

    <main class="ui items">
        <?php
            // Sticky posts
            if ($stickies && $stickies->have_posts()) {
                $count = 0;
                $sticky = true;

                while ($stickies->have_posts()) {
                    if (1 < $count) {
                        break;
                    }

                    $stickies->the_post();

                    // Display post
                    include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'chrono.php';

                    // Update counter
                    $count++;
                }

                wp_reset_postdata();
                unset($count);
                unset($sticky);
                unset($stickies);
            }

            // Main loop
            while ($items->have_posts()) {
                $items->the_post();
                $type = get_post_type();

                // Display post
                include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'chrono.php';
            }

            wp_reset_postdata();
            unset($_post);
            unset($type);
            unset($items);
        ?>
    </main>

    <?php if (!empty($more)) : ?>
        <a href="<?php echo $link ?>" class="ui main icon button right" rel="next">
            <b><?php echo $more ?></b> <i class="arrow right icon"></i>
        </a>
    <?php endif ?>
