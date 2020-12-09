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

// Build args
$a = $_searchform['options'];
$a['inputcss'] = 'uk-search-input '.$a['inputcss'];

// Build search query
$s = get_search_query();

// Build content
$_searchform['content'] = <<<html
<div class="uk-navbar-item {$a['navbarcss']}">
    <a href="#" class="uk-navbar-toggle" uk-search-icon></a>

    <div class="uk-drop" uk-drop="mode:click;pos:left-center;offset:0">
        <form action="{$a['action']}" class="uk-search uk-search-navbar uk-width-1-1 {$a['formcss']}">
            <input type="search" name="s" class="{$a['inputcss']}" placeholder="{$a['placeholder']}" value="$s"/>
        </form>
    </div>
</div>
html;

// Freedom
unset($a);
unset($s);

// Include template
include __DIR__.S.'default.php';
