<?php

/**
 * Searchform simple part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_searchform)) {
    die('You are not authorized to directly access to this page');
}

// Build args
$a = $_searchform['options'];
$a['inputcss'] = 'uk-search-input '.$a['inputcss'];

// Build search query
$s = get_search_query();

// Build content
$_searchform['content'] = <<<html
<form action="{$a['action']}" class="uk-search uk-search-default {$a['formcss']}">
    <button type="submit" class="uk-icon uk-search-icon uk-search-icon-flip" uk-search-icon></button>
    <input type="search" name="s" class="{$a['inputcss']}" placeholder="{$a['placeholder']}" value="$s"/>
</form>
html;

// Freedom
unset($a);
unset($s);

// Include template
include __DIR__.S.'default.php';
