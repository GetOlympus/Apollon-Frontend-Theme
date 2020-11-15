<?php

/**
 * 404 default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_404)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_404['html'] = [
    'title' => __('Error 404 Page', OL_APOLLON_LANGUAGESPATH),
];


/**
 * Fires before displaying default 404.
 *
 * @param  array   $_404
 */
do_action('ol.apollon.404_part_default_before', $_404);

?>

<section class="uk-container uk-margin-large-top">
    <nav class="uk-navbar-container" uk-navbar>
        <?php
            $_inc = [
                'filename' => 'searchform.php',
                'part'     => true,
                'vars'     => [
                    'template' => 'default',
                    'args'     => [
                        'formcss'    => 'uk-width-1-1',
                        'inputcss'   => 'uk-width-expand',
                        'navbar'     => true,
                        'navbarcss'  => 'uk-width-1-1',
                        'searchicon' => true,
                    ],
                ],
            ];

            include OL_APOLLON_VIEWSPATH.'_inc.php';
        ?>
    </nav>
</section>

<?php


/**
 * Fires after displaying default 404.
 *
 * @param  array   $_404
 */
do_action('ol.apollon.404_part_default_after', $_404);
