<?php
/*
Plugin Name: Text Clips
Plugin URI: 
Description: 
Version: 
Author: Rocco
Author URI: 
License:  GPL2
*/

/*  Copyright 2012  Rocco  (email : rocco@hotchkissconsulting.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

 define( 'TEXTCLIP_PLUGIN_PATH', plugin_dir_url(__FILE__) );

function textclip_init() {
  $labels = array(
    'name' => __('Text Clips'),
    'singular_name' => __('Text Clip')

  );
  $args = array(
    'labels' => $labels,
    'public' => false,
    'exclude_from_seart' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_nav_menus' => false,
    'show_in_menu' => true, 
    'query_var' => true,
    'menu_position' => 5,
    'rewrite' => false
  ); 
  register_post_type('textclip', $args);
}
add_action( 'init', 'textclip_init' );
 

?>