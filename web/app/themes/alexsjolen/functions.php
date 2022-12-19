<?php
add_action('set_permalinks_cron', 'set_permalink');
function set_permalink(){
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
}