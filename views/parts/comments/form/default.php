<?php

/**
 * Comments form default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_comments)) {
    die('You are not authorized to directly access to this page');
}

global $user_identity;

$form = [
    'class_form'    => 'uk-form-'.($_comments['options']['formstacked'] ? 'stacked' : 'horizontal'),
    'class_submit'  => 'uk-button uk-button-primary',
    'comment_field' => sprintf(
        $_comments['form']['field'],
        // class
        '',
        // label
        !$_comments['options']['labels'] ? '' : sprintf(
            $_comments['form']['label'],
            // class
            '',
            // for
            'comment',
            // label
            $_comments['labels']['textarea']
        ),
        // required css
        $_comments['required']['req'] ? $_comments['required']['css'] : '',
        // field
        sprintf(
            '<textarea id="%s" name="%s" class="uk-textarea" %s placeholder="%s" rows="6"></textarea>',
            // ID
            'comment',
            // name
            'comment',
            // aria-required
            $_comments['required']['req'] ? $_comments['required']['aria'] : '',
            // placeholder
            $_comments['labels']['leavecomment']
        )
    ),
    'fields'        => [
        'author' => sprintf(
            $_comments['form']['field'],
            '',
            !$_comments['options']['labels'] ? '' : sprintf(
                $_comments['form']['label'],
                '',
                'author',
                $_comments['labels']['author']
            ),
            $_comments['required']['req'] ? $_comments['required']['css'] : '',
            sprintf(
                '<input type="%s" id="%s" name="%s" class="uk-input" value="%s" size="100" %s placeholder="%s"/>',
                'text',
                'author',
                'author',
                esc_attr($_comments['data']['author']['comment_author']),
                $_comments['required']['req'] ? $_comments['required']['aria'] : '',
                $_comments['labels']['author']
            )
        ),
        'email' => sprintf(
            $_comments['form']['field'],
            '',
            !$_comments['options']['labels'] ? '' : sprintf(
                $_comments['form']['label'],
                '',
                'email',
                $_comments['labels']['email']
            ),
            $_comments['required']['req'] ? $_comments['required']['css'] : '',
            sprintf(
                '<input type="%s" id="%s" name="%s" class="uk-input" value="%s" %s placeholder="%s"/>',
                'email',
                'email',
                'email',
                esc_attr($_comments['data']['author']['comment_author_email']),
                $_comments['required']['req'] ? $_comments['required']['aria'] : '',
                $_comments['labels']['email']
            )
        ),
        'closed' => sprintf($_comments['form']['field'], '', $_comments['labels']['closed'], '', ''),
    ],
    'must_log_in'   => sprintf($_comments['labels']['mustlogin'], wp_login_url($_comments['data']['link'])),
    'logged_in_as'  => sprintf(
        $_comments['labels']['loggedas'],
        admin_url('profile.php'),
        $user_identity,
        wp_logout_url($_comments['data']['link'])
    ),
    'comment_notes_before' => $_comments['labels']['before'],
    'comment_notes_after'  => $_comments['options']['htmltags'] ? sprintf(
        $_comments['labels']['after'],
        ' <code>'.allowed_tags().'</code>'
    ) : '',
    'title_reply'          => '',
    'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h3>',
];

if ($_comments['options']['website']) {
    $form['fields']['url'] = sprintf(
        $_comments['form']['field'],
        '',
        !$_comments['options']['labels'] ? '' : sprintf(
            $_comments['form']['label'],
            '',
            'url',
            $_comments['labels']['url']
        ),
        // required css
        $_comments['required']['req'] ? $_comments['required']['css'] : '',
        // field
        sprintf(
            '<input type="%s" id="%s" name="%s" class="uk-input" value="%s" %s placeholder="%s"/>',
            'url',
            'url',
            'url',
            esc_attr($_comments['data']['author']['comment_author_url']),
            $_comments['required']['req'] ? $_comments['required']['aria'] : '',
            $_comments['labels']['url']
        )
    );
}

return $form;
