<?php

/**
 * Post template ad
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

    <?php echo getJsonLD($_post, 'ad') //WPAdBlock ?>

    <div class="p-post ui computer centered grid">
        <article class="p-main" role="article">
            <main class="p-content">
                <?php
                    // Custom
                    $code = get_post_meta($_post['id'], 'ad-code', true);

                    // Check code
                    if (!empty($code['code'])) {
                        echo stripslashes($code['code']);
                    }
                ?>

                <?php echo getPostNextPage() ?>
            </main>

            <div id="ead_native_infinite"></div>

            <?php echo getPostPagination() ?>

            <?php $adtype = 'ad_post_content' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>
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
