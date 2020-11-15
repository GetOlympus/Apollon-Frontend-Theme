<?php

/**
 * Dailymotion post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

?>

<article class="f-post f-social f-dailymotion ui card" role="article">
    <?php echo getEmbedContent($_post['extra']['link']) ?>
</article>
