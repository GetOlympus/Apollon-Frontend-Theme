<?php

/**
 * Searchform drop part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_searchform)) {
    die('You are not authorized to directly access to this page');
}

// Content starts
$_searchform['html'] = [
    'attrs' => [
        'form'  => sprintf(
            'action="%s" class="%s"',
            $_searchform['args']['action'],
            'uk-search uk-search-navbar uk-width-1-1 '.$_searchform['args']['formcss']
        ),
        'input' => sprintf(
            'type="%s" name="%s" class="%s" placeholder="%s" %s',
            'search',
            's',
            'uk-search-input '.$_searchform['args']['inputcss'],
            $_searchform['args']['placeholder'],
            'value="'.get_search_query().'"'
        ),
    ],
    'icon'  => '<a href="#" class="uk-navbar-toggle" uk-search-icon></a>',
];

$_searchform['html']['form'] = sprintf(
    '<form %s><input %s/></form>',
    $_searchform['html']['attrs']['form'],
    $_searchform['html']['attrs']['input']
);


/**
 * Fires before displaying drop searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_drop_before', $_searchform);

?>

<div class="uk-navbar-item <?php echo $_searchform['args']['navbarcss'] ?>">
    <?php echo $_searchform['html']['icon'] ?>

    <div class="uk-drop" uk-drop="mode:click; pos:left-center; offset:0">
        <?php echo $_searchform['html']['form'] ?>
    </div>
</div>

<?php


/**
 * Fires after displaying drop searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_drop_after', $_searchform);
