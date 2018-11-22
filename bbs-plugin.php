<?php
/*
Plugin Name: My test plugin
Description: I have not yet invented
Version: 1.0
Author: Babenkobs
*/


// Добавляет ссылку в админ бар
add_action( 'admin_bar_menu', 'my_admin_bar_menu', 30 );
function my_admin_bar_menu( $wp_admin_bar ) {
    if( get_current_screen()->base == "post" ){
        // echo "<test>". get_current_screen()->base . "</test>";
        $wp_admin_bar->add_menu( array(
            'id'    => 'menu_id',
            'title' => 'ссылка',
            'href'  => 'http://site.ru',
        ) );
    }
}