<?php

/**
 * Image template
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

the_post();
//$_post = include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'_format.php';

// Details
$_post['parent'] = [
    'link'  => get_permalink($post->post_parent),
    'title' => get_the_title($post->post_parent),
];
$_post['image'] = wp_get_attachment_image($_post['id'], 'original', false, [
    'alt'       => $_post['esc_title'],
    'itemprop'  => 'contentURL',
    'class'     => 'img-fluid',
]);

// Extract image src attribute
preg_match('/src="([^"]*)"/i', $_post['image'], $img);
$_post['src'] = !empty($img) ? $img[1] : '';

get_header() ?>

    <?php echo getJsonLD($_post, 'image') ?>

    <article class="p-post p-image ui computer centered grid" role="article">
        <header class="p-header">
            <?php edit_post_link(__('Edit'), '', '') ?>
            <h1 class="p-title header"><?php echo $_post['title'] ?></h1>
            <?php //echo getAuthor($_post['author'], $_post['date']) ?>
        </header>

        <figure class="p-thumbnail ui image" role="img">
            <?php echo $_post['image'] ?>
        </figure>

        <aside id="rs" class="p-social extra content">
            <?php echo getSocialButtons($_post['esc_title'], $_post['esc_link'], $_post['src']) ?>
        </aside>

        <main class="p-content">
            <?php echo sprintf(
                '<a href="%s" title="%s" class="huge fluid basic ui left labeled icon button">%s</a>',
                $_post['parent']['link'],
                esc_html($_post['parent']['title']),
                '<i class="left arrow icon"></i>'.$_post['parent']['title']
            ) ?>
        </main>

        <footer class="p-footer extra content">
            <?php echo getBreadcrumb() ?>
        </footer>
    </article>

<?php
get_footer();
