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

$_post['extra']['logotype'] = 'big';
$_post['extra']['logowidth'] = 90;

?>

    <section class="p-scores">
        <div class="p-result" style="<?php echo $_post['extra']['team1']['style'] ?>">
            <img src="<?php echo $_post['extra']['team1']['logo'][$_post['extra']['logotype']] ?>" alt="<?php echo $_post['extra']['team1']['esc_name'] ?>" width="<?php echo $_post['extra']['logowidth'] ?>" height="<?php echo $_post['extra']['logowidth'] ?>"/>

            <div class="p-score">
                <?php echo $_post['extra']['details']['team_1']['code'] ?>
                <b><?php echo $_post['extra']['team1']['score'] ?></b>
            </div>
        </div>

        <div class="p-result" style="<?php echo $_post['extra']['team2']['style'] ?>">
            <div class="p-score">
                <b><?php echo $_post['extra']['team2']['score'] ?></b>
                <?php echo $_post['extra']['details']['team_2']['code'] ?>
            </div>

            <img src="<?php echo $_post['extra']['team2']['logo'][$_post['extra']['logotype']] ?>" alt="<?php echo $_post['extra']['team2']['esc_name'] ?>" width="<?php echo $_post['extra']['logowidth'] ?>" height="<?php echo $_post['extra']['logowidth'] ?>"/>
        </div>

        <?php if (!empty($_post['extra']['details']['statistics'])) : ?>
            <div class="p-stats">
                <ul>
                    <li><?php echo $_post['extra']['details']['team_1']['code'] ?></li>
                    <li><?php echo $_post['extra']['details']['team_2']['code'] ?></li>
                </ul>

                <?php
                    $count = count($_post['extra']['details']['statistics']['team_1']['score']['qts']);

                    for ($i = 0; $i < $count; $i++) :
                ?>
                    <ul>
                        <li><?php echo ($i+1) ?></li>
                        <li><?php echo $_post['extra']['details']['statistics']['team_1']['score']['qts'][$i] ?></li>
                        <li><?php echo $_post['extra']['details']['statistics']['team_2']['score']['qts'][$i] ?></li>
                    </ul>
                <?php
                    endfor;
                    unset($count);
                ?>
            </div>
        <?php endif ?>
    </section>
