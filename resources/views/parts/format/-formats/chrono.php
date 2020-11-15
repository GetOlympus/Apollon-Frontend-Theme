<?php

/**
 * Latest post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$format = get_post_format() ? : 'standard';
$format = in_array($format, ['image']) && (!isset($sticky) || !$sticky) ? $format : '';

$cover = 'image' === $format ? 'rvs-default' : 'thumbnail';

// Details
$_post = include OL_APOLLON_VIEWSPATH.'loops'.S.'formats'.S.'_format.php';

// Custom
$_post['extra']['cats'] = 'image' === $format ? [] : get_the_category($_post['id']);
$_post['extra']['type'] = isset($type) ? $type : 'post';
$_post['extra']['format'] = 'image' === $format ? ' image' : '';
$_post['extra']['game'] = [];

// Game
if ('game' === $_post['extra']['type']) {
    $_post['extra']['game'] = get_post_meta($_post['id'], 'game-details', true);
}
// Wire
else if (!empty($_post['extra']['cats']) && 'wire' === $_post['extra']['cats'][0]->category_nicename) {
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
                $_post['extra']['team']['color'] = getNbaColor($_post['extra']['team']['code']);
                $_post['extra']['team']['image'] = '<span class="i-team i-90 '.$_post['extra']['team']['code'].'" style="background-color:'.$_post['extra']['team']['color'].'"></span>';

                break;
            }
        }

        unset($is_team);
    }

    // Build vars
    $_post['image'] = 'NBA' === $_post['extra']['team']['code'] ? '<img src="'.OL_TPL_DIR_URI.'/resources/assets/img/wire-90.png" alt="NBA" width="90" height="90" style="background-color:#fff" />' : $_post['extra']['team']['image'];
}

?>

<article class="f-post f-chrono <?php echo $_post['extra']['type'].$_post['extra']['format'] ?>" role="article">
    <?php if (!empty($_post['image'])): ?>
        <div class="f-thumbnail ui image" role="img">
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                <?php echo $_post['image'] ?>
            </a>
        </div>
    <?php endif ?>

    <div class="f-content content">
        <?php if (!empty($_post['extra']['game'])) : ?>
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['extra']['game']['team_1']['code'] ?> vs <?php echo $_post['extra']['game']['team_2']['code'] ?>" class="f-scores">
                <div class="f-result" style="border-color:<?php echo getNbaColor($_post['extra']['game']['team_1']['code']) ?>">
                    <span class="i-team i-40 i-30 <?php echo $_post['extra']['game']['team_1']['code'] ?>"></span>

                    <div class="f-score">
                        <?php echo $_post['extra']['game']['team_1']['code'] ?>
                        <b><?php echo $_post['extra']['game']['team_1']['score'] ?></b>
                    </div>
                </div>

                <div class="f-result" style="border-color:<?php echo getNbaColor($_post['extra']['game']['team_2']['code']) ?>">
                    <div class="f-score">
                        <b><?php echo $_post['extra']['game']['team_2']['score'] ?></b>
                        <?php echo $_post['extra']['game']['team_2']['code'] ?>
                    </div>

                    <span class="i-team i-40 i-30 <?php echo $_post['extra']['game']['team_2']['code'] ?>"></span>
                </div>
            </a>
        <?php endif ?>

        <?php if ($_post['is_sticky']) : ?>
            <i class="star icon"></i>
        <?php endif ?>

        <?php if (!empty($_post['extra']['cats'])) : ?>
            <aside class="f-category">
                <a href="<?php echo get_category_link($_post['extra']['cats'][0]->term_id) ?>">
                    <?php echo $_post['extra']['cats'][0]->cat_name ?>
                </a>
            </aside>
        <?php endif ?>

        <h3 class="f-title">
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                <strong><?php echo $_post['title'] ?></strong>
            </a>
        </h3>
    </div>
</article>

<?php

unset($cover);
unset($format);
unset($_post);
