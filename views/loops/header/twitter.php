<?php

/**
 * Loop header twitter part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_loop)) {
    die('You are not authorized to directly access to this page');
}

// Check title
if (empty($_loop['title'])) {
    return;
}

add_filter('ol.apollon.body_header_section_check', function ($check) {
    return true;
});

add_filter('ol.apollon.body_header_section', function ($header, $options) use ($_loop) {
    // Define vars
    $container = 'expand' === $options['grid-container'] ? '' : ' uk-container-'.$options['grid-container'];
    $title = $_loop['title'];

    // Build header
    $header = <<<EOT
<!-- title -->
<header class="uk-section uk-section-primary" uk-height-viewport="expand:true">
    <div class="uk-container $container">
        <h1 class="uk-h2">{$_loop['title']}</h1>
        <h2 class="uk-h3 uk-margin-remove-top">{$_loop['meta']}</h2>
    </div>
</header>
EOT;

    return $header;
}, 10, 2);
