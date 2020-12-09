<?php

/**
 * Back to top button default part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_backtotop)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Fires before displaying default back to top button.
 *
 * @param  array   $_backtotop
 */
do_action('ol.apollon.backtotop_part_default_before', $_backtotop);

echo sprintf('
    <a href="#" class="uk-position-fixed %s %s %s%s" uk-scroll%s>%s</a>',
    'uk-position-'.$_backtotop['options']['margin'],
    'uk-position-bottom-'.$_backtotop['options']['position'],
    'uk-button uk-button-small uk-button-'.$_backtotop['options']['style'],
    !$_backtotop['options']['mobile'] ? '' : ' uk-visible@s',
    !$_backtotop['options']['icon'] ? '' : ' uk-icon="icon:chevron-up"',
    $_backtotop['options']['label']
);


/**
 * Fires after displaying default back to top button.
 *
 * @param  array   $_backtotop
 */
do_action('ol.apollon.backtotop_part_default_after', $_backtotop);
