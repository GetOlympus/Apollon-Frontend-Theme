<?php

/**
 * Comments form default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($data)) {
    die('You are not authorized to directly access to this page');
}

return [
    'class_form'    => 'uk-form-'.($data['stacked'] ? 'stacked' : 'horizontal'),
    'class_submit'  => !empty($data['opts']['class_submit'])
        ? $data['opts']['class_submit']
        : 'uk-button uk-button-primary',
    'comment_field' => sprintf(
        $data['_f']['field'],
        // class
        '',
        // label
        sprintf(
            $data['_f']['label'],
            // class
            '',
            // for
            'comment',
            // label
            $data['labels']['textarea']
        ),
        // required css
        $data['req']['req'] ? $data['req']['css'] : '',
        // field
        '<textarea id="comment" name="comment" class="uk-textarea" aria-required="true"></textarea>'
    ),
    'fields'        => [
        'author' => sprintf(
            $data['_f']['field'],
            // class
            '',
            // label
            sprintf($data['_f']['label'], '', 'author', $data['labels']['author']),
            // required css
            $data['req']['req'] ? $data['req']['css'] : '',
            // field
            sprintf(
                '<input type="%s" id="%s" name="%s" class="uk-input" value="%s" size="100" %s placeholder="%s"/>',
                'text',
                'author',
                'author',
                // value
                esc_attr($data['author']['comment_author']),
                // aria
                $data['req']['req'] ? $data['req']['aria'] : '',
                // placeholder
                $data['labels']['author']
            )
        ),
        'email' => sprintf(
            $data['_f']['field'],
            // class
            '',
            // label
            sprintf($data['_f']['label'], '', 'email', $data['labels']['email']),
            // required css
            $data['req']['req'] ? $data['req']['css'] : '',
            // field
            sprintf(
                '<input type="%s" id="%s" name="%s" class="uk-input" value="%s" %s placeholder="%s"/>',
                'email',
                'email',
                'email',
                esc_attr($data['author']['comment_author_email']),
                $data['req']['req'] ? $data['req']['aria'] : '',
                $data['labels']['email']
            )
        ),
        'url' => !$data['website'] ? '' : sprintf(
            $data['_f']['field'],
            // class
            '',
            // label
            sprintf($data['_f']['label'], '', 'url', $data['labels']['url']),
            // required css
            $data['req']['req'] ? $data['req']['css'] : '',
            // field
            sprintf(
                '<input type="%s" id="%s" name="%s" class="uk-input" value="%s" %s placeholder="%s"/>',
                'url',
                'url',
                'url',
                esc_attr($data['author']['comment_author_url']),
                $data['req']['req'] ? $data['req']['aria'] : '',
                $data['labels']['url']
            )
        ),
        'closed' => sprintf($data['_f']['field'], '', $data['labels']['closed'], '', ''),
    ],
    'must_log_in'   => sprintf($data['texts']['mustlogin'], wp_login_url($data['link'])),
    'logged_in_as'  => sprintf(
        $data['texts']['loggedas'],
        admin_url('profile.php'),
        $data['user'],
        wp_logout_url($data['link'])
    ),
    'comment_notes_before' => $data['texts']['before'],
    'comment_notes_after'  => $data['htmltags'] ? sprintf(
        $data['texts']['after'],
        ' <code>'.allowed_tags().'</code>'
    ) : '',
    'title_reply'          => '',
    'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h3>',
];
