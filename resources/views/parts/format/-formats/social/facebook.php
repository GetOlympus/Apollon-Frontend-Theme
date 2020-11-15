<?php

/**
 * Facebook post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_post['extra']['content'] = getEmbedContent($_post['extra']['link']);

$_post['extra']['content'] = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $_post['extra']['content']);
$_post['extra']['content'] = str_replace('<div class="fb-video"', '<div class="fb-video" data-show-text="true" data-show-captions="true"', $_post['extra']['content']);

?>

<article class="f-post f-social f-facebook ui card" role="article">
    <?php echo $_post['extra']['content'] ?>
</article>
