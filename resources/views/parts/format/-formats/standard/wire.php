<?php

/**
 * Standard Wire post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Get tags
$_post['extra']['tags'] = wp_get_post_tags($_post['id']);

// Get default team vars
$_post['extra']['team'] = [
    'image' => OL_TPL_DIR_URI.'/resources/assets/img/wire-90.png',
    'code'  => 'NBA',
    'color' => '#fff',
];

// Iterate on tags
if (!empty($_post['extra']['tags'])) {
    foreach ($_post['extra']['tags'] as $tag) {
        // Check if tag is a team
        $is_team = term_exists($tag->slug, 'team');

        // Check
        if (0 !== $is_team && null !== $is_team) {
            $is_team = is_array($is_team) ? $is_team['term_id'] : $is_team;

            $_post['extra']['team']['code']  = get_term_meta($is_team, 'team-code', true);
            $_post['extra']['team']['image'] = getNbaAvatar($_post['extra']['team']['code'], 90);
            $_post['extra']['team']['color'] = getNbaColor($_post['extra']['team']['code']);

            break;
        }
    }

    unset($is_team);
}

?>

<article class="f-post f-wire ui card" role="article">
    <div class="f-inner ui card">
        <div class="f-thumbnail ui image" role="img">
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>" style="background-color:<?php echo $_post['extra']['team']['color'] ?>">
                <?php if ('NBA' === $_post['extra']['team']['code']) : ?>
                    <img src="<?php echo OL_TPL_DIR_URI ?>/resources/assets/img/wire-90.png" alt="NBA" width="90" height="90" />
                <?php else : ?>
                    <span class="i-team i-90 <?php echo $_post['extra']['team']['code'] ?>"></span>
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
        </main>
    </div>
</article>
