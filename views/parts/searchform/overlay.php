<?php

/**
 * Searchform overlay part
 *
 * @package    ApollonFrontendTheme
 * @author     Achraf Chouk <achrafchouk@gmail.com>
 * @since      0.0.1
 */

if (!isset($_searchform)) {
    die('You are not authorized to directly access to this page');
}


/**
 * Build main content after navs.
 *
 * @return string
 */
add_filter('ol.apollon.main_navs_'.$_searchform['nav'].'_after', function ($content) use ($_searchform) {
    // Build args
    $a = $_searchform['options'];
    $a['inputcss'] = 'uk-search-input '.$a['inputcss'];
    $a['toggle']   = 'target:.'.$_searchform['nav'].'-overlay;animation:uk-animation-fade';

    // Build search query
    $s = get_search_query();

    // Display content
    $content = <<<html
<div class="uk-navbar-left uk-flex-1 {$_searchform['nav']}-overlay" hidden>
    <div class="uk-navbar-item uk-width-expand">
        <form action="{$a['action']}" class="uk-search uk-search-navbar uk-width-1-1 {$a['formcss']}">
            <input type="search" name="s" class="{$a['inputcss']}" placeholder="{$a['placeholder']}" value="$s"/>
        </form>

        <a href="#" class="uk-navbar-toggle" uk-close uk-toggle="{$a['toggle']}"></a>
    </div>
</div>
html;

    // Freedom
    unset($a);
    unset($s);

    return $content;
});


// Build args
$a = $_searchform['options'];
$a['inputcss'] = 'uk-search-input '.$a['inputcss'];
$a['toggle']   = 'target:.'.$_searchform['nav'].'-overlay;animation:uk-animation-fade';

// Build content
$_searchform['content'] = <<<html
<div class="uk-navbar-item {$a['navbarcss']}">
    <a href="#" class="uk-navbar-toggle" uk-search-icon uk-toggle="{$a['toggle']}"></a>
</div>
html;

// Freedom
unset($a);

// Include template
include __DIR__.S.'default.php';
