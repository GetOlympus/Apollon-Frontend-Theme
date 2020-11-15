<?php

/**
 * Twitter post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

$_post['extra']['content'] = getEmbedContent($_post['extra']['link']);

if (isset($no_script)) {
    $_post['extra']['content'] = str_replace('<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>', '', $_post['extra']['content']);
}

?>

<article class="f-post f-social f-twitter ui card" role="article">
    <?php echo $_post['extra']['content'] ?>
</article>
