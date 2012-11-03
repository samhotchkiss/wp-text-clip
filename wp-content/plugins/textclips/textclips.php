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

    define( 'TEXTCLIP_PLUGIN_PATH', plugin_dir_path(__FILE__) );


    function roccos_scripts() {
	wp_enqueue_script(
		'testingscript',
		TEXTCLIP_PLUGIN_PATH. 'test.js'
	);
}

add_action( 'wp_enqueue_scripts', 'roccos_scripts' );

?>