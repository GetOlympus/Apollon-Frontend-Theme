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

// Build args
$a = $_searchform['options'];
$a['inputcss'] = 'uk-search-input uk-text-center '.$a['inputcss'];

// Build search query
$s = get_search_query();

// Build autofocus
$f = 'autofocus';

// Build content
$_searchform['content'] = <<<html
<a href="#search-modal" class="uk-navbar-toggle" uk-toggle>
    <span uk-search-icon class="uk-margin-small-right"></span>
    {$a['placeholder']}
</a>

<div id="search-modal" class="uk-modal-full uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
        <button type="button" class="uk-modal-close-full" uk-close></button>

        <form action="{$a['action']}" class="uk-search uk-search-large {$a['formcss']}">
            <input type="search" name="s" class="{$a['inputcss']}" placeholder="{$a['placeholder']}" value="$s" $f/>
        </form>
    </div>
</div>
html;

// Freedom
unset($a);
unset($f);
unset($s);

// Include template
include __DIR__.S.'default.php';
