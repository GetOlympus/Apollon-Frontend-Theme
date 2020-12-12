<?php

/**
 * Apollon comments features hooks
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

add_filter('ol.apollon.comments_labels', function ($comments = []) {
    return [
        'comments'     => __('apollon.th.comments.comments', OL_APOLLON_DICTIONARY),
        'comment'      => __('apollon.th.comments.comment', OL_APOLLON_DICTIONARY),
        'textarea'     => __('apollon.th.comments.textarea', OL_APOLLON_DICTIONARY),
        'author'       => __('apollon.th.comments.author', OL_APOLLON_DICTIONARY),
        'email'        => __('apollon.th.comments.email', OL_APOLLON_DICTIONARY),
        'url'          => __('apollon.th.comments.url', OL_APOLLON_DICTIONARY),
        'mustlogin'    => __('apollon.th.comments.mustlogin', OL_APOLLON_DICTIONARY),
        'loggedas'     => __('apollon.th.comments.loggedas', OL_APOLLON_DICTIONARY),
        'before'       => __('apollon.th.comments.before', OL_APOLLON_DICTIONARY),
        'after'        => __('apollon.th.comments.after', OL_APOLLON_DICTIONARY),
        'closed'       => __('apollon.th.comments.closed', OL_APOLLON_DICTIONARY),
        'waiting'      => __('apollon.th.comments.waiting', OL_APOLLON_DICTIONARY),
        'leavecomment' => __('apollon.th.comments.leavecomment', OL_APOLLON_DICTIONARY),
        'nextpage'     => __('apollon.th.comments.nextpage', OL_APOLLON_DICTIONARY),
        'prevpage'     => __('apollon.th.comments.prevpage', OL_APOLLON_DICTIONARY),
        '1reply'       => __('apollon.th.comments.1reply', OL_APOLLON_DICTIONARY),
        'reply'        => __('apollon.th.comments.reply', OL_APOLLON_DICTIONARY),
        'replies'      => __('apollon.th.comments.replies', OL_APOLLON_DICTIONARY),
        'addcomment'   => __('apollon.th.comments.addcomment', OL_APOLLON_DICTIONARY),
    ];
});

add_filter('ol.apollon.comments_options', function ($comments = []) {
    return [
        'avatar'       => apollonGetOption('comments_avatar'),
        'website'      => apollonGetOption('comments_website'),
        'htmltags'     => apollonGetOption('comments_htmltags'),
        'header'       => apollonGetOption('comments_header'),
        'formstacked'  => apollonGetOption('comments_formstacked'),
        'labels'       => apollonGetOption('comments_labels'),
        'highlight'    => apollonGetOption('comments_highlight'),
        'formposition' => apollonGetOption('comments_formposition'),
        'navsposition' => apollonGetOption('comments_navsposition'),
        'formlayout'   => apollonGetOption('comments_formlayout'),
        'listlayout'   => apollonGetOption('comments_listlayout'),
    ];
});

add_filter('ol.apollon.comments_vars', function ($comments = []) {
    // Build defaults data
    $comments['data'] = isset($comments['data']) ? $comments['data'] : [];

    if (!isset($comments['data']['id']) || empty($comments['data']['id'])) {
        $comments['data']['id']    = get_the_ID();
        $comments['data']['link']  = apply_filters('the_permalink', get_permalink());
        $comments['data']['title'] = get_the_title();
    }

    $comments['data']['author'] = wp_get_current_commenter();
    $comments['data']['open']   = comments_open($comments['data']['id']);


    // Build comments
    $comments['items'] = [
        'count' => 0,
        'links' => paginate_comments_links([
            'echo'      => false,
            'end_size'  => 0,
            'mid_size'  => 0,
            'next_text' => '<li>'.$comments['labels']['nextpage'].' <span uk-pagination-next></span></li>',
            'prev_text' => '<li><span uk-pagination-previous></span> '.$comments['labels']['prevpage'].'</li>',
        ]),
        'list'  => get_comments([
            'post_id' => $comments['data']['id']
        ]),
        'pages' => 1,
    ];

    $comments['items']['count'] = count($comments['items']['list']);
    $comments['items']['pages'] = get_option('page_comments') ? get_comment_pages_count($comments['items']['list']) : 1;


    // Build form
    $comments['form'] = [
        'field'     => '<div class="uk-margin %s">%s <div class="uk-form-controls %s">%s</div></div>',
        'label'     => '<label class="uk-form-label %s" for="%s">%s</label>',
        'separator' => '<hr class="uk-divider-small"/>',
    ];


    // Build required
    $comments['required'] = [
        'req'  => get_option('require_name_email'),
        'aria' => 'aria-required="true"',
        'css'  => 'required',
    ];


    return $comments;
});
