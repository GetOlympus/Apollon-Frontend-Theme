<?php

/**
 * Standard post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

?>

<article class="f-post f-standard ui card" role="article">
    <div class="f-inner ui card">
        <div class="f-thumbnail ui image" role="img">
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                <?php if (!empty($_post['image'])) : ?>
                    <?php echo $_post['image'] ?>
                <?php endif ?>
            </a>
        </div>

        <main class="f-content content">
            <?php if (!empty($_post['extra']['cats'])) : ?>
                <aside class="f-category meta">
                    <a href="<?php echo get_category_link($_post['extra']['cats'][0]->term_id) ?>">
                        <?php echo $_post['extra']['cats'][0]->cat_name ?>
                    </a>
                </aside>
            <?php endif ?>

            <h2 class="f-title header">
                <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                    <strong><?php echo $_post['title'] ?></strong>
                </a>
            </h2>

            <div class="f-excerpt">
                <?php echo $_post['excerpt'] ?>
            </div>
        </main>

        <footer class="f-footer extra content">
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
        </footer>
    </div>
</article>
