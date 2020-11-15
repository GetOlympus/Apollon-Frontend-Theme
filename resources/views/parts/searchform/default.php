<?php

/**
 * Searchform default part
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
            'action="%s" class="%s%s" %s',
            $_searchform['args']['action'],
            'uk-search uk-search-navbar ',
            $_searchform['args']['formcss'],
            ''
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
    'icon'  => '<span uk-search-icon></span>',
];

$_searchform['html']['form'] = sprintf(
    '<form %s>%s<input %s/></form>',
    $_searchform['html']['attrs']['form'],
    $_searchform['html']['icon'],
    $_searchform['html']['attrs']['input']
);


/**
 * Fires before displaying default searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_default_before', $_searchform);

?>

<div class="uk-navbar-item <?php echo $_searchform['args']['navbarcss'] ?>">
    <?php echo $_searchform['html']['form'] ?>
</div>

<?php


/**
 * Fires after displaying default searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_default_after', $_searchform);
