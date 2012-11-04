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

// register our custom post type, textclip
 add_action( 'init', 'textclip_init' );

function textclip_init() {
  // Define Lables
  $labels = array(
    'name' => __('Text Clips'),
    'singular_name' => __('Text Clip')

  );
  $args = array(
    'labels' => $labels,
    'public' => false, // text clips won't appear in the loop
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_nav_menus' => false,
    'show_in_menu' => true,  // text clips will appear in the admin menu
    'query_var' => true,
    'register_meta_box_cb' => 'add_textclip_meta_boxes', // create custom meta boxes on the edit post page
    'menu_position' => 5,
    'rewrite' => false
  ); 
  register_post_type('textclip', $args);
}

function add_textclip_meta_boxes() {
    // make a meta box for the 'Show Edit Link' option to the side menu
    add_meta_box( 
        'textclip_edit_link',
        'Edit Link',
        'textclip_edit_link_html',
        'textclip',
        'side' 
    );
}

function textclip_edit_link_html() {
    // echo the html for the 'Show Edit Link' option
    $checked = ' checked="checked"'; // option is pre checked
    echo '<label for="show_edit_link">Show Edit Link</label><br />';
    echo '<input type="checkbox" name="show_edit_link"'.$checked.'> Yes, show an edit link';
}
 

?>