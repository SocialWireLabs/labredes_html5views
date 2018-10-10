<?php

/*
 * © Copyright by Laboratorio de Redes 2010-2013
 */

function lbr_html5views_init() {
    elgg_register_simplecache_view('js/lbr_html5views/friendlytime');
    elgg_register_js('labredes:friendlytime', elgg_get_simplecache_url('js', 'lbr_html5views/friendlytime'), 'footer');

    elgg_register_simplecache_view('js/lbr_html5views/moment'); 
}

elgg_register_event_handler('init', 'system', 'lbr_html5views_init');
