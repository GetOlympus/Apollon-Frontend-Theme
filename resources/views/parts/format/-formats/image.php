<?php

/**
 * Image post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$cover = isset($cover) ? $cover : 'rvs-cover-big';
$cover = $cover;

// Details
$_post = include __DIR__.S.'_vars.php';
$_post['extra']['size'] = 'rvs-cover' === $cover ? 'even' : 'odd';

// Category
$_post['extra']['cats'] = $_post['is_sticky'] ? false : get_the_category($_post['id']);

// Socials
$_post['extra']['fb_text'] = sprintf(__('Partager &quot;%s&quot; sur Facebook', OL_APOLLON_DICTIONARY), $_post['esc_title']);
$_post['extra']['tw_text'] = sprintf(__('Partager &quot;%s&quot; sur Twitter', OL_APOLLON_DICTIONARY), $_post['esc_title']);

?>

<article class="blog-post" role="article">
    <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
        <!-- Featured image -->
        <div class="featured-image">
            <?php if (!empty($_post['image'])) : ?>
                <?php echo $_post['image'] ?>
            <?php endif ?>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="post-title">
                <?php echo $_post['title'] ?>
                <time datetime="<?php echo $_post['date']['c'] ?>" class="blog-date"><?php echo $_post['date']['mini'] ?></time>
            </div>

            <p><?php echo $_post['excerpt'] ?></p>

            <!-- Meta -->
            <div class="post-meta">
                <div class="author-block">
                    <div class="image is-32x32">
                        <img src="<?php echo $_post['author']['avatar']['url'] ?>" alt="<?php echo $_post['author']['name'] ?>"/>
                    </div>
                    <div class="author-name">by <?php echo $_post['author']['name'] ?></div>
                </div>

                <div class="stats-block">
                    <div class="comments">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span>3</span>
                    </div>
                    <div class="likes">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <span>9</span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</article>

<?php /*
<article class="f-post f-image ui card <?php echo $_post['extra']['size'] ?>" role="article">
    <div class="f-inner ui card">
        <div class="f-thumbnail ui image" role="img">
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                <?php if (!empty($_post['image'])) : ?>
                    <?php echo $_post['image'] ?>
                <?php endif ?>
            </a>
        </div>

        <?php if ($_post['is_sticky']) : ?>
            <aside class="f-category meta">
                <i class="star icon"></i>
            </aside>
        <?php elseif (!empty($_post['extra']['cats'])) : ?>
            <aside class="f-category meta">
                <a href="<?php echo get_category_link($_post['extra']['cats'][0]->term_id) ?>">
                    <?php echo $_post['extra']['cats'][0]->cat_name ?>
                </a>
            </aside>
        <?php endif ?>

        <div class="f-content content">
            <?php if ($_post['is_sticky']) : ?>
                <h1 class="f-title header">
                    <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                        <strong><?php echo $_post['title'] ?></strong>
                    </a>
                </h1>
            <?php else : ?>
                <h2 class="f-title header">
                    <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                        <strong><?php echo $_post['title'] ?></strong>
                    </a>
                </h2>
            <?php endif ?>

            <?php if (!$_post['is_sticky'] && !empty($_post['excerpt'])) : ?>
                <div class="f-excerpt">
                    <?php echo $_post['excerpt'] ?>
                </div>
            <?php endif ?>

            <time datetime="<?php echo $_post['date']['c'] ?>" class="f-more"><?php echo $_post['date']['mini'] ?></time>

            <?php if (defined('FACEBOOK_APPID')) : ?>
                <a href="https://www.facebook.com/sharer/sharer.php?app_id=<?php echo FACEBOOK_APPID ?>&amp;u=<?php echo $_post['esc_link'] ?>" title="<?php echo $_post['extra']['fb_text'] ?>" class="f-more ui facebook openit">
                    <i class="facebook f icon"></i>
                </a>
            <?php endif ?>

            <?php if (defined('TWITTER_USER')) : ?>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $_post['esc_link'] ?>&amp;original_referer=<?php echo $_post['esc_link'] ?>&amp;text=<?php echo $_post['esc_title'] ?>&amp;via=<?php echo TWITTER_USER ?>" title="<?php echo $_post['extra']['tw_text'] ?>" class="f-more ui twitter openit">
                    <i class="twitter icon"></i>
                </a>
            <?php endif ?>
        </div>
    </div>
</article>

<?php*/

unset($cover);
unset($_post);
