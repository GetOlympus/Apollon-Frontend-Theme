<?php

/**
 * Content boxscores
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Check details
if (empty($_post['extra']['details']) || empty($_post['extra']['details']['statistics'])) {
    return;
}

// Initialize scorelist
$scoreslist = [
    'MIN'   => '<abbr title="'.__('Temps joué', OL_APOLLON_DICTIONARY).'">'.__('MIN', OL_APOLLON_DICTIONARY).'</abbr>',
    'PTS'   => '<abbr title="'.__('Points', OL_APOLLON_DICTIONARY).'">'.__('PTS', OL_APOLLON_DICTIONARY).'</abbr>',
    'TIRS'  => '<abbr title="'.__('Tirs réussis/tentés', OL_APOLLON_DICTIONARY).'">'.__('TIRS', OL_APOLLON_DICTIONARY).'</abbr>',
    '3PTS'  => '<abbr title="'.__('Tirs à 3 points réussis/tentés', OL_APOLLON_DICTIONARY).'">'.__('3PTS', OL_APOLLON_DICTIONARY).'</abbr>',
    'LF'    => '<abbr title="'.__('Lancers francs réussis/tentés', OL_APOLLON_DICTIONARY).'">'.__('LF', OL_APOLLON_DICTIONARY).'</abbr>',
    'OFF'   => '<abbr title="'.__('Rebonds offsensifs', OL_APOLLON_DICTIONARY).'">'.__('OFF', OL_APOLLON_DICTIONARY).'</abbr>',
    'DEF'   => '<abbr title="'.__('Rebonds défensifs', OL_APOLLON_DICTIONARY).'">'.__('DEF', OL_APOLLON_DICTIONARY).'</abbr>',
    'RBDS'  => '<abbr title="'.__('Rebonds totaux', OL_APOLLON_DICTIONARY).'">'.__('RBDS', OL_APOLLON_DICTIONARY).'</abbr>',
    'TO'    => '<abbr title="'.__('Turnovers', OL_APOLLON_DICTIONARY).'">'.__('TO', OL_APOLLON_DICTIONARY).'</abbr>',
    'STL'   => '<abbr title="'.__('Interceptions', OL_APOLLON_DICTIONARY).'">'.__('STL', OL_APOLLON_DICTIONARY).'</abbr>',
    'AST'   => '<abbr title="'.__('Passes décisives', OL_APOLLON_DICTIONARY).'">'.__('AST', OL_APOLLON_DICTIONARY).'</abbr>',
    'C'     => '<abbr title="'.__('Contres', OL_APOLLON_DICTIONARY).'">'.__('C', OL_APOLLON_DICTIONARY).'</abbr>',
    'FTES'  => '<abbr title="'.__('Fautes', OL_APOLLON_DICTIONARY).'">'.__('FTES', OL_APOLLON_DICTIONARY).'</abbr>',
];

?>

    <figure class="p-tabs">
        <?php for ($i = 1; $i < 3; $i++) : ?>
            <a href="#<?php echo $i ?>" class="<?php echo 1 === $i ? 'active ' : '' ?>item" data-tab="team_<?php echo $i ?>">
                <img src="<?php echo $_post['extra']['team'.$i]['logo']['big'] ?>" alt="<?php echo $_post['extra']['team'.$i]['esc_name'] ?>" width="90" height="90"/>
            </a>
        <?php endfor ?>
    </figure>

    <div class="p-panels">
        <?php
            for ($i = 1; $i < 3; $i++) :
                echo '<div class="l-tab ui tab'.(1 === $i ? ' active' : '').' segment" data-tab="team_'.$i.'">';

                echo '<a href="'.$_post['extra']['team'.$i]['link'].'" class="item fluid ui large button">';
                echo 'En savoir plus sur les '.$_post['extra']['team'.$i]['name'];
                echo '</a>';

                // Check stats
                if (empty($_post['extra']['details']['statistics']['team_'.$i])) {
                    echo 'Aucune statistique encore enregistrée';
                    echo '</div>';
                    continue;
                }

                $curr_team = $_post['extra']['details']['team_'.$i];
                $curr_stats = $_post['extra']['details']['statistics']['team_'.$i];
                $curr_slug = $_post['extra']['team'.$i]['slug'];
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3">
                            <img src="<?php echo $_post['extra']['team'.$i]['logo']['tiny'] ?>" alt="<?php echo $_post['extra']['team'.$i]['esc_name'] ?>" width="30" height="30"/>
                        </th>
                        <th colspan="3" class="highlight">
                            <?php echo __('Tirs', OL_APOLLON_DICTIONARY) ?>
                        </th>
                        <th colspan="3" class="highlight">
                            <?php echo __('Rebonds', OL_APOLLON_DICTIONARY) ?>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th><?php echo __('Joueur', OL_APOLLON_DICTIONARY) ?></th>
                        <th><?php echo $scoreslist['MIN'] ?></th>
                        <th><?php echo $scoreslist['PTS'] ?></th>
                        <th><?php echo $scoreslist['TIRS'] ?></th>
                        <th><?php echo $scoreslist['3PTS'] ?></th>
                        <th><?php echo $scoreslist['LF'] ?></th>
                        <th><?php echo $scoreslist['OFF'] ?></th>
                        <th><?php echo $scoreslist['DEF'] ?></th>
                        <th><?php echo $scoreslist['RBDS'] ?></th>
                        <th><?php echo $scoreslist['TO'] ?></th>
                        <th><?php echo $scoreslist['STL'] ?></th>
                        <th><?php echo $scoreslist['AST'] ?></th>
                        <th><?php echo $scoreslist['C'] ?></th>
                        <th><?php echo $scoreslist['FTES'] ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($curr_stats['stats'] as $st) :
                        $slug = isset($st['player']['slug']) ? $st['player']['slug'] : sanitize_title_with_dashes($st['player']['firstname'].' '.$st['player']['lastname']);
                    ?>
                        <tr>
                            <td><a href="<?php echo getNbaPlayerUrl($slug) ?>" title="<?php echo esc_html($st['player']['firstname'].' '.$st['player']['lastname']) ?>"><?php echo $st['player']['firstname'].' '.$st['player']['lastname'] ?></a></td>
                            <td><?php echo $st['time_played'] ?></td>
                            <td><b><?php echo $st['points'] ?></b></td>
                            <td><?php echo $st['shot_success'].'/'.$st['shot_attempt'] ?></td>
                            <td><?php echo $st['3pts_success'].'/'.$st['3pts_attempt'] ?></td>
                            <td><?php echo $st['ft_success'].'/'.$st['ft_attempt'] ?></td>
                            <td><?php echo $st['rb_off'] ?></td>
                            <td><?php echo $st['rb_def'] ?></td>
                            <td><b><?php echo ($st['rb_def']+$st['rb_off']) ?></b></td>
                            <td><?php echo $st['turnovers'] ?></td>
                            <td><?php echo $st['steals'] ?></td>
                            <td><b><?php echo $st['assists'] ?></b></td>
                            <td><?php echo $st['blocks'] ?></td>
                            <td><?php echo $st['faults'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php
            echo '</div>';
            endfor;
        ?>
    </div>
