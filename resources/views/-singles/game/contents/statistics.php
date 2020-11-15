<?php

/**
 * Content teams
 *
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

if (!defined('ABSPATH')) {
    die('You are not authorized to directly access to this page');
}

// Check details and stats
if (empty($_post['extra']['details']) || empty($_post['extra']['details']['statistics'])) {
    return;
}

// Initialize scorelist
$scoreslist = [
    'player'        => [__('Joueur', OL_APOLLON_DICTIONARY), __('Joueur', OL_APOLLON_DICTIONARY)],
    'time_played'   => [__('Temps joué', OL_APOLLON_DICTIONARY), __('MIN', OL_APOLLON_DICTIONARY)],
    'shot_success'  => [__('Tirs réussis', OL_APOLLON_DICTIONARY), __('TIRS', OL_APOLLON_DICTIONARY)],
    'shot_attempt'  => [__('Tirs tentés', OL_APOLLON_DICTIONARY), __('% TIRS', OL_APOLLON_DICTIONARY)],
    '3pts_success'  => [__('Tirs à 3 points réussis', OL_APOLLON_DICTIONARY), __('3PTS', OL_APOLLON_DICTIONARY)],
    '3pts_attempt'  => [__('Tirs à 3 points tentés', OL_APOLLON_DICTIONARY), __('% 3PTS', OL_APOLLON_DICTIONARY)],
    'ft_success'    => [__('Lancers francs réussis', OL_APOLLON_DICTIONARY), __('LF', OL_APOLLON_DICTIONARY)],
    'ft_attempt'    => [__('Lancers francs tentés', OL_APOLLON_DICTIONARY), __('% LF', OL_APOLLON_DICTIONARY)],
    'rb_off'        => [__('Rebonds offensifs', OL_APOLLON_DICTIONARY), __('OFF', OL_APOLLON_DICTIONARY)],
    'rb_def'        => [__('Rebonds défensifs', OL_APOLLON_DICTIONARY), __('DEF', OL_APOLLON_DICTIONARY)],
    'rb_total'      => [__('Rebonds totaux', OL_APOLLON_DICTIONARY), __('% RBDS', OL_APOLLON_DICTIONARY)],
    'turnovers'     => [__('Turnovers', OL_APOLLON_DICTIONARY), __('TO', OL_APOLLON_DICTIONARY)],
    'steals'        => [__('Interceptions', OL_APOLLON_DICTIONARY), __('STL', OL_APOLLON_DICTIONARY)],
    'assists'       => [__('Passes décisives', OL_APOLLON_DICTIONARY), __('AST', OL_APOLLON_DICTIONARY)],
    'blocks'        => [__('Contres', OL_APOLLON_DICTIONARY), __('C', OL_APOLLON_DICTIONARY)],
    'faults'        => [__('Fautes', OL_APOLLON_DICTIONARY), __('FTES', OL_APOLLON_DICTIONARY)],
    'points'        => [__('Points', OL_APOLLON_DICTIONARY), __('PTS', OL_APOLLON_DICTIONARY)],
];

// Initialize data
$data = [];
$matchup = [];

// Titles
$matchup = [
    'shot_success'  => ['team_1' => 0, 'team_2' => 0],
    'shot_attempt'  => ['team_1' => 0, 'team_2' => 0],
    '3pts_success'  => ['team_1' => 0, 'team_2' => 0],
    '3pts_attempt'  => ['team_1' => 0, 'team_2' => 0],
    'ft_success'    => ['team_1' => 0, 'team_2' => 0],
    'ft_attempt'    => ['team_1' => 0, 'team_2' => 0],
    'rb_off'        => ['team_1' => 0, 'team_2' => 0],
    'rb_def'        => ['team_1' => 0, 'team_2' => 0],
    'rb_total'      => ['team_1' => 0, 'team_2' => 0],
    'turnovers'     => ['team_1' => 0, 'team_2' => 0],
    'steals'        => ['team_1' => 0, 'team_2' => 0],
    'assists'       => ['team_1' => 0, 'team_2' => 0],
    'blocks'        => ['team_1' => 0, 'team_2' => 0],
    'faults'        => ['team_1' => 0, 'team_2' => 0],
    'points'        => ['team_1' => 0, 'team_2' => 0],
];

// Iterate on teams
for ($i = 1; $i < 3; $i++) {
    $team = 'team_'.$i;

    $data[$team] = [
        'TIRS'  => ['curr' => 0, 'total' => 0],
        '3PTS'  => ['curr' => 0, 'total' => 0],
        'LF'    => ['curr' => 0, 'total' => 0],
    ];

    // Get stats
    foreach ($_post['extra']['details']['statistics'][$team]['stats'] as $st) {
        foreach ($st as $k => $v) {
            if (in_array($k, ['player', 'time_played', 'rb_total'])) {
                continue;
            }

            $matchup[$k][$team] += intval($v);
        }

        // Main stats
        $data['team_'.$i]['TIRS']['curr']   += intval($st['shot_success']);
        $data['team_'.$i]['TIRS']['total']  += intval($st['shot_attempt']);
        $data['team_'.$i]['3PTS']['curr']   += intval($st['3pts_success']);
        $data['team_'.$i]['3PTS']['total']  += intval($st['3pts_attempt']);
        $data['team_'.$i]['LF']['curr']     += intval($st['ft_success']);
        $data['team_'.$i]['LF']['total']    += intval($st['ft_attempt']);
    }
}

?>

    <div class="p-board">
        <?php for ($i = 1; $i < 3; $i++) : ?>
            <div class="p-board-main"<?php echo 1 == $i ? ' dir="rtl"' : '' ?>>
                <?php foreach ($data['team_'.$i] as $tp => $st) : ?>
                    <div class="ui progress" data-value="<?php echo $st['curr'] ?>" data-total="<?php echo $st['total'] ?>">
                        <div class="label"><?php echo $tp ?></div>
                        <div class="bar" style="background-color:<?php echo $_post['extra']['team'.$i]['color'] ?>">
                            <div class="progress"></div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endfor ?>
    </div>

    <table class="table p-board-details">
        <thead>
            <tr>
                <th>Matchup</th>
                <th><?php echo $details['team_1']['name'] ?></th>
                <th><?php echo $details['team_2']['name'] ?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($matchup as $k => $score) :
                    $lbl = $scoreslist[$k][0];
                    $sc1 = $score['team_1'];
                    $sc2 = $score['team_2'];

                    if ('rb_total' === $k) {
                        $lbl = '<b>&nbsp;&nbsp;&nbsp;'.$lbl.'</b>';
                        $sc1 = '<b>'.($matchup['rb_off']['team_1'] + $matchup['rb_def']['team_1']).'</b>';
                        $sc2 = '<b>'.($matchup['rb_off']['team_2'] + $matchup['rb_def']['team_2']).'</b>';
                    } else if (in_array($k, ['shot_attempt', '3pts_attempt', 'ft_attempt', 'points'])) {
                        $lbl = '<b>&nbsp;&nbsp;&nbsp;'.$lbl.'</b>';
                        $sc1 = '<b>'.$sc1.'</b>';
                        $sc2 = '<b>'.$sc2.'</b>';
                    }
            ?>
                <tr>
                    <td><?php echo $lbl ?></td>
                    <td><?php echo $sc1 ?></td>
                    <td><?php echo $sc2 ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
