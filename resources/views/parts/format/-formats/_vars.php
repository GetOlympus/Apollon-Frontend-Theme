<?php

/**
 * Vars builder.
 * 
 * @package ApollonFrontendTheme
 * @author Achraf Chouk <achrafchouk@gmail.com>
 * @since 0.0.1
 */

// Set defaults
$_post = [
    'id'        => isset($id) && !empty($id) ? $id : get_the_ID(),
    'title'     => get_the_title(),
    'link'      => get_permalink(),
    'content'   => get_the_content(),
    'excerpt'   => isset($excerpt) && empty($excerpt) ? '' : get_the_excerpt(),
    'length'    => isset($excerpt) && !empty($excerpt) ? intval($excerpt) : 20,
    'is_sticky' => isset($sticky) ? $sticky : false,
    'has_thumb' => has_post_thumbnail(),
    'cover'     => isset($cover) ? $cover : 'rvs-default',
    'image'     => [],
    'src'       => '',
];


// Content and excerpt
$_post['content'] = wpautop(wptexturize($_post['content']));
$_post['excerpt'] = wp_trim_words($_post['excerpt'], $_post['length'], '...');


// Other details
$_post['esc_title'] = esc_html($_post['title']);
$_post['esc_link'] = urlencode($_post['link']);


// Image's
if ($_post['has_thumb']) {
    $_post['image'] = get_the_post_thumbnail($_post['id'], $_post['cover'], [
        'alt'       => $_post['esc_title'],
        'class'     => 'img-fluid',
    ]);

    // Extract image src attribute
    preg_match('/src="([^"]*)"/i', $_post['image'], $img);
    $_post['src'] = !empty($img) ? $img[1] : '';
}


// Author's
$author_id = get_post_field('post_author', $_post['id']);
$avatar = get_avatar_data(get_the_author_meta('user_email', $author_id), ['size' => 22]);

$_post['author'] = [
    'link'          => get_author_posts_url($author_id),
    'name'          => get_the_author_meta('display_name', $author_id),
    'avatar'        => [
        'full'  => $avatar,
        'url'   => $avatar['url'],
    ],
    'description'   => get_the_author_meta('description', $author_id),
    'twitter'       => '',
];


// Date's
$_post['date'] = [
    'c'         => get_the_date('Y/m/j H:i:00'),
    'display'   => get_the_date('j.m.Y - H:i'),
    'mini'      => get_the_date('j.m.Y'),
];


// Return data
return $_post;
