<?php

/**
 * Quote social post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

?>

<article class="f-post f-social f-quote ui card" role="article">
    <div class="f-inner ui card">
        <div class="f-thumbnail ui image" role="img"<?php echo !empty($_post['src']) ? ' style="background-image:url('.$_post['src'].');"' : '' ?>>
            <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>"></a>
        </div>

        <div class="f-content content">
            <blockquote>
                <?php echo $_post['excerpt'] ?>

                <cite>
                    <h2 class="f-title header">
                        <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>">
                            <strong><?php echo $_post['title'] ?></strong>
                        </a>
                    </h2>
                </cite>
            </blockquote>
        </div>
    </div>
</article>
