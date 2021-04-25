<?php

/**
 * Apollon metas block
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_block)) {
    die('You are not authorized to directly access to this page');
}

echo sprintf(
    '<div class="%s"><div class="%s">',
    'uk-grid-margin uk-container uk-container-xsmall',
    'uk-text-center uk-iconnav uk-text-small'.(empty($_block['css']) ? '' : ' '.$_block['css'])
);

foreach ($_block['metas'] as $key => $value) {
    echo '<span>';

    apollonGetPart('element.php', [
        'data' => $_block['data'],
        'part' => $key,
    ]);

    echo '</span>';
}

echo '</div></div>';
