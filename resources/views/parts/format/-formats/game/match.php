<?php

/**
 * Match game post format.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

?>

<article class="f-post f-game ui card" role="article">
    <a href="<?php echo $_post['link'] ?>" title="<?php echo $_post['esc_title'] ?>" class="f-inner bg">
        <div class="f-scores">
            <div class="f-result" style="border-color:<?php echo getNbaColor($_post['extra']['details']['team_1']['code']) ?>">
                <span class="i-team <?php echo $_post['extra']['details']['team_1']['code'] ?>"></span>

                <div class="f-score">
                    <?php echo $_post['extra']['details']['team_1']['code'] ?>
                    <b><?php echo $_post['extra']['details']['team_1']['score'] ?></b>
                </div>
            </div>

            <div class="f-result" style="border-color:<?php echo getNbaColor($_post['extra']['details']['team_2']['code']) ?>">
                <div class="f-score">
                    <b><?php echo $_post['extra']['details']['team_2']['score'] ?></b>
                    <?php echo $_post['extra']['details']['team_2']['code'] ?>
                </div>

                <span class="i-team <?php echo $_post['extra']['details']['team_2']['code'] ?>"></span>
            </div>
        </div>

        <small><i class="wait icon"></i> <?php echo $_post['date']['mini'] ?></small>
    </a>
</article>
