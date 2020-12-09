<?php

/**
 * Comments list default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($comment)) {
    die('You are not authorized to directly access to this page');
}

// Author highlight
$data['_']['class'] = !$data['_']['highlight']
    ? ' class="uk-comment"'
    : comment_class('uk-comment', null, null, false);

// Update author css class
$data['_']['class'] = str_replace(' bypostauthor ', ' uk-comment-primary ', $data['_']['class']);

// Use avatar
$data['_']['avatar'] = !$data['_']['avatar'] ? '' : sprintf(
    '<div class="uk-width-auto">%s</div>',
    get_avatar($comment, 32, '', '', ['class' => 'uk-comment-avatar'])
);

return sprintf(
    '
<article %s>
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        %s
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove">%s</h4>
            <small class="uk-comment-meta uk-margin-remove-top"><time datetime="%s">%s</time> - %s</small>
        </div>
    </header>

    <div class="uk-comment-body">
        <p>%s</p>
    </div>
</article>
    ',
    $data['_']['class'],
    $data['_']['avatar'],
    $data['_']['author'],
    $data['_']['time']['c'],
    sprintf(
        __('apollon.th.comments.time', OL_APOLLON_DICTIONARY),
        $data['_']['date'],
        $data['_']['time']['f']
    ),
    $data['_']['reply'],
    $data['_']['text']
);
