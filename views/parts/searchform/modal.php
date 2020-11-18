<?php

/**
 * Searchform modal part
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
            'uk-search uk-search-large '.$_searchform['args']['formcss']
        ),
        'input' => sprintf(
            'type="%s" name="%s" class="%s" placeholder="%s" %s',
            'search',
            's',
            'uk-search-input uk-text-center '.$_searchform['args']['inputcss'],
            $_searchform['args']['placeholder'],
            'value="'.get_search_query().'" autofocus'
        ),
    ],
    'icon'  => 'uk-navbar-toggle',
];

$_searchform['html']['form'] = sprintf(
    '<form %s><input %s/></form>',
    $_searchform['html']['attrs']['form'],
    $_searchform['html']['attrs']['input']
);


/**
 * Fires before displaying modal searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_modal_before', $_searchform);

?>

<a href="#search-modal" class="<?php echo $_searchform['html']['icon'] ?>" uk-toggle>
    <span uk-search-icon class="uk-margin-small-right"></span>
    <?php echo $_searchform['args']['placeholder'] ?>
</a>

<div id="search-modal" class="uk-modal-full uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
        <button type="button" class="uk-modal-close-full" uk-close></button>
        <?php echo $_searchform['html']['form'] ?>
    </div>
</div>

<?php


/**
 * Fires after displaying modal searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_modal_after', $_searchform);
