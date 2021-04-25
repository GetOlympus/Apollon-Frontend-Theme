<?php

/**
 * Apollon feature block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

if (empty($_block['feature'])) {
    return;
}

// Update defaults
$_block['feature'] = array_merge([
    'header' => ['thumbnail', 'title', 'categories', 'author'],
    'width'  => 'expand',
], $_block['feature']);

echo sprintf(
    '<header class="%s %s" uk-img data-src="%s">',
    'uk-section uk-section-xlarge uk-margin-medium-bottom uk-dark uk-position-relative',
    'uk-background-cover uk-background-center-center',
    empty($_block['data']['images']) || !in_array('thumbnail', $_block['feature']['header'])
        ? ''
        : $_block['data']['images']['src-orig']
);

// Overlay
if (in_array('overlay', $_block['feature']['header'])) {
    apollonGetPart('block.php', [
        'part' => 'overlay',
    ]);
}

//
echo sprintf(
    '<div class="uk-width-1-1@s uk-width-%s@m uk-position-relative uk-position-z-index">',
    $_block['feature']['width']
);

// Category
if (in_array('categories', $_block['feature']['header']) && !empty($_block['data']['categories'])) {
    apollonGetPart('block.php', [
        'data' => $_block['data'],
        'part' => 'categories',
    ]);
}

// Title
if (in_array('title', $_block['feature']['header'])) {
    apollonGetPart('block.php', [
        'data' => $_block['data'],
        'part' => 'title',
    ]);
}

// Metas
echo '<div class="uk-margin uk-iconnav uk-text-small uk-flex-center">';

foreach (['author', 'comments', 'readingtime'] as $meta) {
    // Check meta
    if (!in_array($meta, $_block['feature']['header'])) {
        continue;
    }

    echo '<span>';

    apollonGetPart('element.php', [
        'data' => $_block['data'],
        'part' => $meta,
    ]);

    echo '</span>';
}

echo '</div></div></header>';
