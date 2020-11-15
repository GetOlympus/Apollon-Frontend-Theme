<?php

/**
 * Post template game
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
$_post['extra']['details'] = get_post_meta($_post['id'], 'game-details', true);
$_post['extra']['video'] = get_post_meta($_post['id'], 'game-video', true);
$_post['extra']['content'] = get_the_content();

// Get matchs
$matchs = new WP_Query([
    'posts_per_page'=> 20,
    'post_type'     => ['post', 'video', 'social'],
    'post_status'   => 'publish',
    'ignore_sticky_posts' => 1,
    'meta_query'    => [
        'relation'  => 'OR',
        [
            'key'   => 'post-match_id',
            'value' => $_post['id'],
        ],
        [
            'key'   => 'video-match_id',
            'value' => $_post['id'],
        ],
        [
            'key'   => 'social-match_id',
            'value' => $_post['id'],
        ],
    ]
]);

// Vars
$_post['extra']['recap'] = !empty($_post['extra']['content']) || $matchs->have_posts() ? true : false;
$_post['extra']['build'] = [
    'team1' => [
        'slug' => sanitize_title_with_dashes($_post['extra']['details']['team_1']['name']),
        'color' => getNbaColor($_post['extra']['details']['team_1']['code']),
    ],
    'team2' => [
        'slug' => sanitize_title_with_dashes($_post['extra']['details']['team_2']['name']),
        'color' => getNbaColor($_post['extra']['details']['team_2']['code']),
    ],
];
$_post['extra']['team1'] = [
    'slug'      => $_post['extra']['build']['team1']['slug'],
    'name'      => $_post['extra']['details']['team_1']['name'],
    'esc_name'  => esc_html($_post['extra']['details']['team_1']['name']),
    'link'      => get_term_link($_post['extra']['build']['team1']['slug'], 'team'),
    'logo'      => [
        'tiny'      => getNbaAvatar($_post['extra']['details']['team_1']['code'], 30),
        'mini'      => getNbaAvatar($_post['extra']['details']['team_1']['code'], 55),
        'big'       => getNbaAvatar($_post['extra']['details']['team_1']['code'], 90),
    ],
    'color'     => $_post['extra']['build']['team1']['color'],
    'score'     => empty($_post['extra']['details']['team_1']['score']) ? '-' : $_post['extra']['details']['team_1']['score'],
    'style'     => 'border-color:'.$_post['extra']['build']['team1']['color'].';color:'.$_post['extra']['build']['team1']['color'],
];
$_post['extra']['team2'] = [
    'slug'      => $_post['extra']['build']['team2']['slug'],
    'name'      => $_post['extra']['details']['team_2']['name'],
    'esc_name'  => esc_html($_post['extra']['details']['team_2']['name']),
    'link'      => get_term_link($_post['extra']['build']['team2']['slug'], 'team'),
    'logo'      => [
        'tiny'      => getNbaAvatar($_post['extra']['details']['team_2']['code'], 30),
        'mini'      => getNbaAvatar($_post['extra']['details']['team_2']['code'], 55),
        'big'       => getNbaAvatar($_post['extra']['details']['team_2']['code'], 90),
    ],
    'color'     => $_post['extra']['build']['team2']['color'],
    'score'     => empty($_post['extra']['details']['team_2']['score']) ? '-' : $_post['extra']['details']['team_2']['score'],
    'style'     => 'border-color:'.$_post['extra']['build']['team2']['color'].';color:'.$_post['extra']['build']['team2']['color'],
];

get_header() ?>

    <?php echo getJsonLD($_post, 'game') ?>

    <?php include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'scores.php' ?>
    <?php include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'menu.php' ?>

    <div class="m-social">
        <?php echo getSocialButtons($_post['esc_title'], $_post['esc_link']) ?>
    </div>

    <div class="p-post p-game ui computer centered grid">
        <article class="p-main" role="article">
            <?php include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents.php' ?>

            <footer class="p-footer extra content">
                <?php echo getBreadcrumb() ?>
            </footer>

            <?php echo getPrevNextPosts('game') ?>
        </article>

        <aside class="p-side">
            <?php $adtype = 'ad_post_sidebar' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'ads.php' ?>

            <?php $sidebar = 'game' ?>
            <?php include OL_APOLLON_VIEWSPATH.'parts'.S.'sidebars.php' ?>
        </aside>
    </div>

<?php
get_footer();
