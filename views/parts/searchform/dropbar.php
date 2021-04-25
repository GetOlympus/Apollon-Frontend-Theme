<?php

/**
 * Searchform dropbar part
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
$a['drops'] = 'mode:click;cls-drop:uk-navbar-dropdown;boundary:!nav;boundary-align:true;pos:bottom-justify;flip:x';
$a['inputcss'] = 'uk-search-input '.$a['inputcss'];

// Build search query
$s = get_search_query();

// Build content
$_searchform['content'] = <<<html
<div class="uk-navbar-item {$a['navbarcss']}">
    <a href="#" class="uk-navbar-toggle" uk-search-icon></a>

    <div class="uk-navbar-dropdown" uk-drop="{$a['drops']}">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <form action="{$a['action']}" class="uk-search uk-search-navbar uk-width-1-1 {$a['formcss']}">
                    <input type="search" name="s" class="{$a['inputcss']}" placeholder="{$a['placeholder']}" value="$s"/>
                </form>
            </div>

            <div class="uk-width-auto">
                <a href="#close" class="uk-navbar-dropdown-close" uk-close></a>
            </div>
        </div>
    </div>
</div>
html;

// Freedom
unset($a);
unset($s);

// Include template
include __DIR__.S.'default.php';
