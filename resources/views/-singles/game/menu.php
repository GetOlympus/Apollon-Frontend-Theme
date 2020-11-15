<?php

/**
 * Menu game
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Check details
if (empty($_post['extra']['details'])) {
    return;
}

?>

    <nav class="m-menu ui secondary pointing menu">
        <a href="<?php echo $_post['extra']['team1']['link'] ?>" class="left menu">
            <img src="<?php echo $_post['extra']['team1']['logo']['mini'] ?>" alt="<?php echo $_post['extra']['team1']['esc_name'] ?>" width="54" height="54"/>

            <span class="item" style="<?php echo $_post['extra']['team1']['style'] ?>">
                <?php echo $_post['extra']['team1']['score'] ?>
            </span>
        </a>

        <?php if ($_post['extra']['recap']) : ?>
            <a class="active item" data-tab="recap">
                <i class="align left icon"></i>
                <span><?php echo __('Récap', OL_APOLLON_DICTIONARY) ?></span>
            </a>
        <?php endif ?>

        <a class="<?php echo $_post['extra']['recap'] ? '' : 'active ' ?>item" data-tab="teamstats">
            <i class="tasks icon"></i>
            <span><?php echo __('Stats équipes', OL_APOLLON_DICTIONARY) ?></span>
        </a>

        <?php if (!empty($_post['extra']['details']) && !empty($_post['extra']['details']['statistics'])) : ?>
            <a class="item" data-tab="boxscores">
                <i class="bar chart icon"></i>
                <span><?php echo __('Boxscores', OL_APOLLON_DICTIONARY) ?></span>
            </a>
        <?php endif ?>

        <?php if (!empty($_post['extra']['video'])) : ?>
            <a class="item" data-tab="video">
                <i class="video play icon"></i>
                <span><?php echo __('Vidéo', OL_APOLLON_DICTIONARY) ?></span>
            </a>
        <?php endif ?>

        <a class="item" data-tab="comments">
            <i class="comments icon"></i>
            <span><?php echo __('En discuter', OL_APOLLON_DICTIONARY) ?></span>
        </a>

        <a href="<?php echo $_post['extra']['team2']['link'] ?>" class="right menu">
            <span class="item" style="<?php echo $_post['extra']['team2']['style'] ?>">
                <?php echo $_post['extra']['team2']['score'] ?>
            </span>

            <img src="<?php echo $_post['extra']['team2']['logo']['mini'] ?>" alt="<?php echo $_post['extra']['team2']['esc_name'] ?>" width="54" height="54"/>
        </a>
    </nav>
