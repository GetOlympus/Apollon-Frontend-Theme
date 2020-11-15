<?php

/**
 * Comments list facebook part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($comment)) {
    die('You are not authorized to directly access to this page');
}

$data['_']['avatar'] = !$data['_']['avatar'] ? '' : sprintf(
    '<div class="uk-width-auto">%s</div>',
    get_avatar($comment, 32, '', '', ['class' => 'uk-comment-avatar uk-border-circle'])
);

$data['_']['class'] = !$data['_']['highlight']
    ? ' class="uk-comment uk-grid-small"'
    : comment_class('uk-comment uk-grid-small', null, null, false);
$data['_']['content'] = false === strpos($data['_']['class'], 'bypostauthor') ? 'uk-background-muted' : 'uk-background-secondary uk-light';

return sprintf(
    '
<article %s uk-grid>
    %s
    <div class="uk-width-expand">
        <div class="%s uk-padding-small-vertical uk-padding-medium-horizontal uk-border-rounded uk-link-primary uk-text-small">%s · %s</div>
        <small class="uk-margin-small-top">%s · <time datetime="%s">%s</time></small>
    </div>
</article>
    ',
    $data['_']['class'],
    $data['_']['avatar'],
    $data['_']['content'],
    $data['_']['author'],
    $data['_']['text'],
    str_replace('comment-reply-link', 'comment-reply-link uk-link-primary', $data['_']['reply']),
    $data['_']['time']['c'],
    sprintf(
        __('%1$s, %2$s', OL_APOLLON_DICTIONARY),
        $data['_']['date'],
        $data['_']['time']['f']
    )
);
