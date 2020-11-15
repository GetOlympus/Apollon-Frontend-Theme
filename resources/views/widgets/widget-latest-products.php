<?php

/**
 * Latest products widget
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Unset post array
if (isset($_product)) {
    unset($_product);
}

$title = isset($title) ? $title : '';
$category = isset($category) ? $category : 0;
$number = isset($number) ? $number : 5;
$more = isset($more) ? stripslashes($more) : '';

// Works on args
$args = [
    'post_type'         => 'product',
    'post_status'       => 'publish',
    'posts_per_page'    => $number,
    'meta_query'        => [
        [
            'key'       => '_visibility',
            'value'     => ['catalog', 'visible'],
            'compare'   => 'IN',
        ],
    ],
];

// Check category
if (!empty($category)) {
    $args['tax_query'] = [
        [
            'taxonomy'  => 'product_cat',
            'field'     => 'term_id',
            'terms'     => $category,
            'operator'  => 'IN',
        ],
    ];
}

// Check category
if (empty($number)) {
    $args['posts_per_page'] = 5;
}

// Latest posts
$items = new WP_Query($args);

// Check items
if (!$items->have_posts()) {
    return;
}

// Create vars
$term = empty($category) ? '' : get_term($category);
$link = empty($term) ? '' : get_term_link($term);

?>

    <?php if (!empty($title)) : ?>
        <h3 class="widget-title"><?php echo $title ?></h3>
    <?php endif ?>

    <ul class="product_list_widget">
        <?php
            // Main loop
            while ($items->have_posts()) {
                $items->the_post();

                $_product = [
                    'title'     => get_the_title(),
                    'link'      => get_permalink(),
                ];

                // Display product
            ?>
                <li>
                    <a href="<?php echo $_product['link'] ?>" title="<?php echo esc_html($_product['title']) ?>">
                        <span class="product-title"><?php echo $_product['title'] ?></span>
                    </a>
                </li>
            <?php
            }

            wp_reset_postdata();
            unset($_product);
            unset($items);
        ?>
    </ul>

    <?php if (!empty($more) && !empty($link)) : ?>
        <a href="<?php echo $link ?>" class="ui main icon button right" rel="next">
            <b><?php echo $more ?></b> <i class="plus icon"></i>
        </a>
    <?php endif ?>

<?php

unset($term);
unset($link);
unset($title);
unset($category);
unset($number);
unset($more);
