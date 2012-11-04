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

function textclip_edit_link_html($post) {
    // Use nonce for verification
    wp_nonce_field( plugin_basename( __FILE__ ), 'textclip_save' );
    // echo the html for the 'Show Edit Link' option
    $checked = ' checked="checked"'; // option is pre checked
    $show_edit_link = get_post_meta($post->ID, 'textclip_show_edit_link', true);
    if($show_edit_link=='no')
        $checked = '';
    echo '<label for="show_edit_link">Show Edit Link</label><br />';
    echo '<input type="checkbox" name="show_edit_link"'.$checked.' value="yes"> Yes, show an edit link';
}

// lets make sure our custom data gets saved
add_action( 'save_post', 'save_textclip_data' );

function save_textclip_data($post_id) {
    // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['textclip_save'], plugin_basename( __FILE__ ) ) )
      return;

   // Check permissions
  if ( 'page' == $_POST['post_type'] ) 
  {
    if ( !current_user_can( 'edit_page', $post_id ) )
        return;
  }
  else
  {
    if ( !current_user_can( 'edit_post', $post_id ) )
        return;
  }
   // OK, we're authenticated: we need to find and save the data

  $textclip_show_edit_link = ($_POST['show_edit_link']=='yes') ? 'yes' : 'no';
  // either update or add the show_edit_link bolean
  if(!update_post_meta($post_id, 'textclip_show_edit_link', $textclip_show_edit_link))
    add_post_meta($post_id 'textclip_show_edit_link', $textclip_show_edit_link);

}
 

?>