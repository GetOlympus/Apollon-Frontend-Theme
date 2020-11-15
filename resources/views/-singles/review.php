<?php

/**
 * Post template review
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

the_post();
$_post = include OL_APOLLON_VIEWSPATH.'singles'.S.'_post.php';

// Custom
$source = get_post_meta($_post['id'], 'review-source', true);

get_header() ?>

    <?php echo getJsonLD($_post, 'review') ?>

    <div class="p-post p-review ui computer centered grid">
        <?php if ($_post['has_thumb'] && !empty($_post['image'])): ?>
            <figure class="p-thumbnail ui image" role="img">
                <?php echo $_post['original'] ?>
            </figure>
        <?php endif ?>

        <article class="p-main" role="article">
            <header class="p-header">
                <?php echo getTerms($_post['id']) ?>
                <?php edit_post_link(__('Edit'), '', '') ?>

                <h1 class="p-title header"><?php echo $_post['title'] ?></h1>
                <?php echo getAuthor($_post['author'], $_post['date']) ?>
            </header>

            <main class="p-content">
                <?php the_content() ?>
                <?php echo stripslashes($source) ?>
            </main>

            <?php $adtype = 'ad_post_content' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>

            <?php echo getComments($_post['id'], $_post['link']) ?>
            <?php echo getRelatedPosts($_post['id']) ?>
            <?php echo getPrevNextPosts('review') ?>
        </article>

        <aside class="p-side">
            <?php $adtype = 'ad_post_sidebar' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>

            <?php $sidebar = 'post' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'sidebars.php' ?>
        </aside>
    </div>

<?php
get_footer();
