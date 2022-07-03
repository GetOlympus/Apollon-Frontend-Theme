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

// Checks content
if (empty($_searchform['content'])) {
    // Build args
    $a = $_searchform['options'];
    $a['inputcss'] = 'uk-search-input '.$a['inputcss'];

    // Build search query
    $s = get_search_query();

    // Build content
    $_searchform['content'] = <<<html
<div class="uk-navbar-item {$a['navbarcss']}">
    <form action="{$a['action']}" class="uk-search uk-search-navbar {$a['formcss']}">
        <span uk-search-icon></span>
        <input type="search" name="s" class="{$a['inputcss']}" placeholder="{$a['placeholder']}" value="$s"/>
    </form>
</div>
html;

    // Freedom
    unset($a);
    unset($s);
}


/**
 * Fires before displaying default searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_default_before', $_searchform);

// Display content
echo $_searchform['content'];


/**
 * Fires after displaying default searchform.
 *
 * @param  array   $_searchform
 */
do_action('ol.apollon.searchform_part_default_after', $_searchform);
