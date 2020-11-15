<?php

/**
 * Post template social
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

get_header() ?>

    <?php echo getJsonLD($_post, 'social') ?>

    <div class="p-post p-social ui computer centered grid">
        <article class="p-main" role="article">
            <header class="p-header">
                <?php echo getTerms($_post['id']) ?>
                <?php edit_post_link(__('Edit'), '', '') ?>

                <h1 class="p-title header"><?php echo $_post['title'] ?></h1>
                <?php echo getAuthor($_post['author'], $_post['date']) ?>
            </header>

            <p class="p-excerpt card-text">
                <?php echo $_post['excerpt'] ?>
            </p>

            <aside id="rs" class="p-social extra content">
                <?php echo getSocialButtons($_post['esc_title'], $_post['esc_link'], $_post['src']) ?>
            </aside>

            <?php echo getPostPagination() ?>

            <main class="p-content">
                <?php
                    $type = get_post_meta($_post['id'], 'social-type', true);
                    $type = in_array($type, ['social', 'quote', 'other']) ? $type : 'quote';

                    include OL_APOLLON_VIEWSPATH.'singles'.S.'social'.S.$type.'.php';
                ?>
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
            <?php echo getPrevNextPosts('social') ?>
        </article>

        <aside class="p-side">
            <?php $adtype = 'ad_post_sidebar' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>

            <?php $sidebar = 'social' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'sidebars.php' ?>
        </aside>

        <?php include OL_APOLLON_VIEWSPATH.'singles'.S.'footers'.S.'social.php' ?>
    </div>

<?php
get_footer();
