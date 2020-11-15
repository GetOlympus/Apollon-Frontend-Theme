<?php

/**
 * Contents game
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

if ($_post['extra']['recap']) {
    echo '<div class="l-tab ui active tab segment" data-tab="recap">';
    include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents'.S.'editorial.php';
    include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents'.S.'news.php';
    echo '</div>';
}

echo '<div class="l-tab ui '.($_post['extra']['recap'] ? '' : 'active ').'tab segment" data-tab="teamstats">';
include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents'.S.'statistics.php';
echo '</div>';

echo '<div class="l-tab ui tab segment" data-tab="boxscores">';
include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents'.S.'boxscores.php';
echo '</div>';

if ($_post['extra']['video']) {
    echo '<div class="l-tab ui tab segment" data-tab="video">';
    echo '<div class="p-content">';
    include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents'.S.'video.php';
    echo '</div>';
    echo '</div>';
}

echo '<div class="l-tab ui tab segment" data-tab="comments">';
include OL_APOLLON_VIEWSPATH.'singles'.S.'game'.S.'contents'.S.'comments.php';
echo '</div>';
