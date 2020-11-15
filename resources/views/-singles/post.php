<?php

/**
 * Post template default
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

// Works on format
$format = get_post_format() ? : 'standard';
$format = in_array($format, ['image']) ? $format : 'standard';

// Get the top level category
$currentcat = get_the_category();
$toplevel = getTopLevelCategory($currentcat[0]->term_id);

get_header() ?>

    <?php echo getJsonLD($_post) ?>

    <div class="p-post ui computer centered grid">
        <?php if ('image' === $format && $_post['has_thumb'] && !empty($_post['original']) && 'wire' !== $toplevel): ?>
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

            <?php if ('standard' === $format && $_post['has_thumb'] && !empty($_post['image']) && 'wire' !== $toplevel): ?>
                <figure class="p-thumbnail ui image" role="img">
                    <?php echo $_post['image'] ?>
                </figure>
            <?php endif ?>

            <p class="p-excerpt card-text">
                <?php echo $_post['excerpt'] ?>
            </p>

            <aside id="rs" class="p-social extra content">
                <?php echo getSocialButtons($_post['esc_title'], $_post['esc_link'], $_post['src']) ?>
            </aside>

            <?php echo getPostPagination() ?>

            <main class="p-content">
                <?php the_content() ?>
                <?php echo getPostNextPage() ?>
            </main>

            <div id="ead_native_infinite"></div>

            <?php if ('hoopculture' !== $toplevel) : ?>
                <div id="taboola-below-article-thumbnails"></div>
                <script type="text/javascript">window._taboola=window._taboola||[];_taboola.push({mode:'thumbnails-a',container:'taboola-below-article-thumbnails',placement:'Below Article Thumbnails',target_type:'mix'});</script>
            <?php endif ?>

            <footer class="p-footer extra content">
                <?php echo getTerms($_post['id'], 'post_tag') ?>
                <?php echo getBreadcrumb() ?>
            </footer>

            <?php echo getPostPagination() ?>

            <?php $adtype = 'ad_post_content' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>

            <?php echo getComments($_post['id'], $_post['link']) ?>
            <?php echo getRelatedPosts($_post['id']) ?>
            <?php echo getPrevNextPosts('post') ?>
        </article>

        <aside class="p-side">
            <?php $adtype = 'ad_post_sidebar' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>

            <?php $sidebar = 'post' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'sidebars.php' ?>
        </aside>

        <?php include OL_APOLLON_VIEWSPATH.'singles'.S.'footers'.S.'post.php' ?>
    </div>

<?php
get_footer();
