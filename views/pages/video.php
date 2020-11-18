<?php

/**
 * Post template video
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

the_post();
//$_post = include OL_APOLLON_VIEWSPATH.'singles'.S.'_post.php';

// Custom
$videolink = get_post_meta($_post['id'], 'video-link', true);

get_header() ?>

    <?php echo getJsonLD($_post, 'video', $videolink) ?>

    <article class="p-post p-video ui computer centered grid" role="article">
        <figure class="p-thumbnail ui image">
            <div class="flexy-wrapper">
                <?php echo getEmbedContent($videolink, true) ?>
            </div>

            <aside class="p-social extra content">
                <?php echo getSocialButtons($_post['esc_title'], $_post['esc_link']) ?>
            </aside>
        </figure>

        <header class="p-header">
            <div>
                <?php edit_post_link(__('Edit'), '', '') ?>
                <h1 class="p-title header"><?php echo $_post['title'] ?></h1>
                <?php //echo getAuthor($_post['author'], $_post['date']) ?>

                <p class="p-excerpt card-text">
                    <?php echo $_post['excerpt'] ?>
                </p>
            </div>
        </header>

        <div class="p-footer">
            <div>
                <?php echo str_replace('<i>Tags</i> ', '', getTerms($_post['id'], 'post_tag')) ?>
                <?php echo getBreadcrumb() ?>
            </div>
        </div>

        <?php echo getPrevNextPosts('video') ?>
    </article>

    <aside class="p-post p-video ui computer centered grid" role="complementary">
        <div class="p-side">
            <?php echo getComments($_post['id'], $_post['link']) ?>

            <div class="ui hidden divider"></div>

            <?php $sidebar = 'video' ?>
            <?php //include OL_APOLLON_VIEWSPATH.'parts'.S.'sidebars.php' ?>
        </div>

        <div class="p-main">
            <?php //include OL_APOLLON_VIEWSPATH.'singles'.S.'footers'.S.'video.php' ?>
        </div>
    </aside>

<?php
get_footer();
