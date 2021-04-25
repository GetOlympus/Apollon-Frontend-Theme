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
 * Callback for closing comment item.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 */
function customCommentListClose($comment, $args, $depth)
{
    // Build comments list open.
    $f = customCommentsListBuilder($comment, $args, $depth, 'close');

    // Display items
    printf($f['wrapper'], $f['children'], $f['tag']);
    unset($f);
}


/**
 * Callback for opening comment item.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 */
function customCommentListOpen($comment, $args, $depth)
{
    // Build comments list open.
    $f = customCommentsListBuilder($comment, $args, $depth);

    // Display items
    printf($f['wrapper'], $f['tag'], $f['id'], $f['class'], $f['ctn'], $f['children']);
    unset($f);
}


/**
 * Custom comments builder.
 *
 * @param  object  $comment
 * @param  array   $args
 * @param  integer $depth
 */
function customCommentsListBuilder($comment, $args, $depth, $mode = 'open')
{
    // Check mode
    if ('close' === $mode) {
        return [
            'wrapper'  => '%s</%s>',
            'children' => '',
            'tag'      => 'div' === $args['style'] ? 'article' : 'li',
        ];
    }


    // Labels & options
    $labels  = apply_filters('ol.apollon.comments_labels', []);
    $options = apply_filters('ol.apollon.comments_options', []);

    // Build comments default data
    $data = array_merge([
        'wrapper'    => '<%s%s class="%s media is-comment">%s%s',
        'tag'        => 'div' === $args['style'] ? 'article' : 'li',
        'id'         => '',
        'class'      => '',
        'ctn'        => '',
        'children'   => '',
        'listlayout' => 'default',
    ], $options);


    // Pingback and trackback case
    if (in_array($comment->comment_type, ['pingback', 'trackback'])) {
        $data['id']    = '';
        $data['class'] = 'post '.$comment->comment_type;
        $data['ctn']   = '<p>'.__('apollon.th.comments.pingback', OL_APOLLON_DICTIONARY);
        $data['ctn']  .= ' '.get_comment_author_link().'</p>';

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
            'reply_text' => $labels['addcomment'],
            'add_below'  => 'div' === $args['style'] ? 'comment' : 'div-comment',
            'depth'      => $depth,
            'max_depth'  => $args['max_depth'],
            'before'     => '',
            'after'      => '',
        ])),
        'text'      => ('0' == $comment->comment_approved ? sprintf(
            '<em class="comment-awaiting-moderation">%s</em>',
            $labels['waiting']
        ) : '').get_comment_text(),
        'time'      => [
            'c' => get_comment_time('c'),
            'f' => get_comment_time(),
        ],
    ];

    // Works on contents
    $data['ctn'] = include __DIR__.S.'list'.S.$data['list-layout'].'.php';

    return $data;
}
