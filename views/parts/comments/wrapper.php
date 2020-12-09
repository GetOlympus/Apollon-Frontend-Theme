<?php

/**
 * Comments _wrapper part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_comments)) {
    die('You are not authorized to directly access to this page');
}

// Build form template vars
$_comments['formlayout'] = include __DIR__.S.'form'.S.$_comments['options']['formlayout'].'.php';


/**
 * Fires before displaying wrapper comments.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_wrapper_before', $_comments);


/**
 * Build separator.
 *
 * @param  string  $separator
 * @param  string  $template
 *
 * @return string
 */
echo apply_filters('ol.apollon.build_separator', '', 'default');

// Header
if ($_comments['options']['header']) {
    echo '<div class="comments-heading">';
    $sep = true;

    if (!$_comments['items']['count']) {
        echo $_comments['data']['open'] ? $_comments['labels']['leavecomment'] : '';
        $sep = $_comments['data']['open'] ? $sep : false;
    } else if (1 === $_comments['items']['count']) {
        echo sprintf(
            $_comments['labels']['1reply'],
            $_comments['data']['title']
        );
    } else {
        $label = 1 < $_comments['items']['count'] ? 'replies' : 'reply';

        echo sprintf(
            $_comments['labels'][$label],
            number_format_i18n($_comments['items']['count']),
            $_comments['data']['title']
        );

        unset($label);
    }

    echo '</div>';

    echo $sep ? '<hr class="uk-divider-small">' : '';
}

// Form layout
if ('top' === $_comments['options']['formposition']) {
    echo '<div class="uk-comment-list">';

    if ($_comments['data']['open']) {
        comment_form($_comments['formlayout']);
    } else {
        echo '<div class="field">'.$_comments['labels']['closed'].'</div>';
    }

    echo '</div>';

    echo '<hr class="uk-divider-small">';
}

// List
if ($_comments['items']['count']) {
    $links = paginate_comments_links([
        'echo'      => false,
        'end_size'  => 0,
        'mid_size'  => 0,
        'next_text' => '<li>'.$_comments['labels']['nextpage'].' <span uk-pagination-next></span></li>',
        'prev_text' => '<li><span uk-pagination-previous></span> '.$_comments['labels']['prevpage'].'</li>',
    ]);

    if ('top' === $_comments['options']['navsposition']) {
        $page_css = false === strpos($links, 'prev page-numbers') ? ' only-next' : '';

        echo sprintf(
            '<nav class="%s" aria-label="%s">%s</nav>',
            'comments-pagination pagination'.$page_css,
            $_comments['labels']['comments'],
            wp_kses_post($links)
        );
    }

    echo '<ul class="uk-comment-list">';

    wp_list_comments([
        'callback'     => 'customCommentListOpen',
        'end-callback' => 'customCommentListClose',
        'style'        => 'ul'
    ], $_comments['items']['list']);

    echo '</ul>';

    if ('bottom' === $_comments['options']['navsposition']) {
        $page_css = false === strpos($links, 'prev page-numbers') ? ' only-next' : '';

        echo sprintf(
            '<nav class="%s" aria-label="%s">%s</nav>',
            'comments-pagination pagination'.$page_css,
            $_comments['labels']['comments'],
            wp_kses_post($links)
        );
    }

    echo '<hr class="uk-divider-small">';
}

// Form layout
if ('bottom' === $_comments['options']['formposition']) {
    echo '<div class="uk-comment-list">';

    if ($_comments['data']['open']) {
        comment_form($_comments['formlayout']);
    } else {
        echo '<div class="field">'.$_comments['labels']['closed'].'</div>';
    }

    echo '</div>';
}


/**
 * Fires after displaying wrapper comments.
 *
 * @param  array   $_comments
 */
do_action('ol.apollon.comments_wrapper_after', $_comments);
