<?php

/**
 * Comments function
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_comments)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Callback for opening comment item.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 */
function custom_comment_list_open($comment, $args, $depth)
{
    /**
     * Build comments list open.
     *
     * @param  object  $comment
     * @param  array   $args
     * @param  integer $depth
     *
     * @return array
     */
    $f = apply_filters('ol.apollon.comments_build_list_open', $comment, $args, $depth);

    // Display items
    printf($f['wrapper'], $f['tag'], $f['id'], $f['class'], $f['ctn'], $f['children']);
    unset($f);
}


/**
 * Callback for closing comment item.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 */
function custom_comment_list_close($comment, $args, $depth)
{
    /**
     * Build comments list open.
     *
     * @param  object  $comment
     * @param  array   $args
     * @param  integer $depth
     *
     * @return array
     */
    $f = apply_filters('ol.apollon.comments_build_list_close', $comment, $args, $depth);

    // Display items
    printf($f['wrapper'], $f['children'], $f['tag']);
    unset($f);
}


/**
 * Build format data.
 *
 * @param  array   $data
 *
 * @return array
 */
add_filter('ol.apollon.comments_build_data', function ($data = []) {
    /**
     * Build comments default data.
     *
     * @param  array   $data
     * @param  string  $mode
     *
     * @return array
     */
    $data = apply_filters('ol.apollon.comments_build_default_data', array_merge([
        'comments'     => [],
        'labels'       => [],
        'opts'         => [],
        'req'          => [],
        'texts'        => [],

        'author'       => wp_get_current_commenter(),
        'display'      => 'default',
        'link'         => apply_filters('the_permalink', $data['args']['link']),
        'open'         => comments_open($data['args']['id']),
    ], $data), 'data');


    // Build _fields and _texts
    $data['_f'] = [
        'field'     => '<div class="uk-margin %s">%s <div class="uk-form-controls %s">%s</div></div>',
        'label'     => '<label class="uk-form-label %s" for="%s">%s</label>',
    ];
    $data['_t'] = [
        'textarea'  => __('Comment', OL_APOLLON_DICTIONARY),
        'author'    => __('Name', OL_APOLLON_DICTIONARY),
        'email'     => __('Email', OL_APOLLON_DICTIONARY),
        'url'       => __('Website', OL_APOLLON_DICTIONARY),
        'mustlogin' => __('You must <a href="%s">log in</a> to comment.', OL_APOLLON_DICTIONARY),
        'loggedas'  => __('You are logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out">Log out ?</a>', OL_APOLLON_DICTIONARY),
        'before'    => __('Your email will not be displayed.', OL_APOLLON_DICTIONARY),
        'after'     => __('You can use these <abbr title="HyperText Markup Language">HTML</abbr> tags: %s', OL_APOLLON_DICTIONARY),
        'closed'    => __('Comments are closed.', OL_APOLLON_DICTIONARY),
        'leave'     => __('Leave a comment', OL_APOLLON_DICTIONARY),
    ];


    // Build req
    $data['req'] = [
        'req'  => isset($data['req']['req']) ? $data['req']['req'] : get_option('require_name_email'),
        'aria' => isset($data['req']['aria']) ? $data['req']['aria'] : 'aria-required="true"',
        'css'  => isset($data['req']['css']) ? $data['req']['css'] : 'required',
    ];


    // Build comments
    $data['comments']['list']  = get_comments(['post_id' => $data['args']['id']]);
    $data['comments']['count'] = count($data['comments']['list']);
    $data['comments']['pages'] = get_option('page_comments') ? get_comment_pages_count($data['comments']['list']) : 1;
    $data['comments']['links'] = paginate_comments_links([
        'echo'      => false,
        'end_size'  => 0,
        'mid_size'  => 0,
        'next_text' => '<li><span uk-pagination-next></span></li>',
        'prev_text' => '<li><span uk-pagination-previous></span></li>',
    ]);


    // Build labels
    $data['labels'] = [
        'textarea'  => isset($data['labels']['textarea']) ? $data['labels']['textarea'] : $data['_t']['textarea'],
        'author'    => isset($data['labels']['author']) ? $data['labels']['author'] : $data['_t']['author'],
        'email'     => isset($data['labels']['email']) ? $data['labels']['email'] : $data['_t']['email'],
        'url'       => isset($data['labels']['url']) ? $data['labels']['url'] : $data['_t']['url'],
        'closed'    => isset($data['labels']['closed']) ? $data['labels']['closed'] : $data['_t']['closed'],
        'leave'     => isset($data['labels']['leave']) ? $data['labels']['leave'] : $data['_t']['leave'],
        'next_page' => isset($data['labels']['next_page'])
            ? $data['labels']['next_page']
            : __('Next page', OL_APOLLON_DICTIONARY).' <span uk-pagination-next></span>',
        'prev_page' => isset($data['labels']['prev_page'])
            ? $data['labels']['prev_page']
            : '<span uk-pagination-previous></span> '.__('Previous page', OL_APOLLON_DICTIONARY),
        'count'     => 1 === $data['comments']['count']
            ? sprintf(
                _x('One reply on &ldquo;%s&rdquo;', 'comments title', OL_APOLLON_DICTIONARY),
                $data['args']['title']
            )
            : sprintf(
                _nx(
                    '%1$s reply on &ldquo;%2$s&rdquo;',
                    '%1$s replies on &ldquo;%2$s&rdquo;',
                    $data['comments']['count'],
                    'comments title',
                    OL_APOLLON_DICTIONARY
                ),
                number_format_i18n($data['comments']['count']),
                $data['args']['title']
            ),
    ];


    // Build texts
    $data['texts'] = [
        'mustlogin' => isset($data['texts']['mustlogin']) ? $data['texts']['mustlogin'] : $data['_t']['mustlogin'],
        'loggedas'  => isset($data['texts']['loggedas']) ? $data['texts']['loggedas'] : $data['_t']['loggedas'],
        'before'    => isset($data['texts']['before']) ? $data['texts']['before'] : $data['_t']['before'],
        'after'     => isset($data['texts']['after']) ? $data['texts']['after'] : $data['_t']['after'],
    ];


    /**
     * Check whether comments form to display.
     *
     * @param  string  $template
     *
     * @return string
     */
    $data['display'] = apply_filters('ol.apollon.comments_form_display', 'default');

    // Build options
    $data['opts'] = include __DIR__.S.'form'.S.$data['display'].'.php';


    // Freedom
    unset($data['_f']);
    unset($data['_t']);

    return $data;
});


/**
 * Build comments list open.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 *
 * @return array
 */
add_filter('ol.apollon.comments_build_list_open', function ($comment, $args, $depth) {
    /**
     * Build comments default data.
     *
     * @param  array   $data
     * @param  string  $mode
     *
     * @return array
     */
    $data = apply_filters('ol.apollon.comments_build_default_data', [
        'wrapper'  => '<%s%s class="%s media is-comment">%s%s',
        'tag'      => 'div' === $args['style'] ? 'article' : 'li',
        'id'       => '',
        'class'    => '',
        'ctn'      => '',
        'children' => '',
        'display'  => 'default',
    ], 'list');


    // Pingback and trackback case
    if (in_array($comment->comment_type, ['pingback', 'trackback'])) {
        unset($type);

        $data['id']    = '';
        $data['class'] = 'post '.$comment->comment_type;
        $data['ctn']   = '<p>'.__('Pingback:', OL_APOLLON_DICTIONARY).' '.get_comment_author_link().'</p>';

        return $data;
    }


    $data['id']    = ' id="comment-'.$comment->comment_ID.'"';
    $data['class'] = '';
    $data['ctn']   = '';


    // Build useful vars
    $data['_'] = [
        'author'    => get_comment_author_link(),
        'avatar'    => $data['avatar'],
        'date'      => get_comment_date(),
        'highlight' => $data['highlight'],
        'reply'     => get_comment_reply_link(array_merge($args, [
            'reply_text' => __('Reply', OL_APOLLON_DICTIONARY),
            'add_below'  => 'div' === $args['style'] ? 'comment' : 'div-comment',
            'depth'      => $depth,
            'max_depth'  => $args['max_depth'],
            'before'     => '',
            'after'      => '',
        ])),
        'text'      => ('0' == $comment->comment_approved ? '<em class="comment-awaiting-moderation">'.__('Your comment is awaiting for moderation.', OL_APOLLON_DICTIONARY).'</em>' : '').get_comment_text(),
        'time'      => [
            'c' => get_comment_time('c'),
            'f' => get_comment_time(),
        ],
    ];

    /**
     * Check whether comments list to display.
     *
     * @param  string  $template
     *
     * @return string
     */
    $data['display'] = apply_filters('ol.apollon.comments_list_display', 'default');

    // Works on contents
    $data['ctn'] = include __DIR__.S.'list'.S.$data['display'].'.php';


    // Freedom
    unset($data['_']);
    unset($type);

    return $data;
}, 10, 3);


/**
 * Build comments list close.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 *
 * @return array
 */
add_filter('ol.apollon.comments_build_list_close', function ($comment, $args, $depth) {
    return [
        'wrapper'  => '%s</%s>',
        'children' => '',
        'tag'      => 'div' === $args['style'] ? 'article' : 'li',
    ];
}, 10, 3);
