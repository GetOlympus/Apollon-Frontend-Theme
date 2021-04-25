<?php

/**
 * Apollon metas elements
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_element)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<ul class="%s">',
    'uk-iconnav uk-text-small uk-margin-remove-top uk-margin-small-bottom'
);

foreach ($_element['metas'] as $key => $value) {
    echo '<li>';

    apollonGetPart('element.php', [
        'data' => $_element['data'],
        'part' => $key,
    ]);

    echo '</li>';
}

echo '</ul>';
