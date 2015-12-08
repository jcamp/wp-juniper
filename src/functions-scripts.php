<?php
/*
 	Juniper for WordPress
    Copyright (C) 2015 Plain, LLC. http://plainmade.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	See license.txt

----------------------------------------------------------------- 
	
	Functions for enqueing styles and scripts
*/

function juniper_enqueue_style() {
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css', false );
	wp_enqueue_style( 'juniper_styles', get_template_directory_uri() . '/stylesheets/juniper_styles.css', false );
    wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:300,700,300italic,700italic', false );
}

function juniper_enqueue_script() {
	wp_enqueue_script( 'my-js', get_template_directory_uri() . '/javascripts/juniper.js', array('jquery') );
}

add_action( 'wp_enqueue_scripts', 'juniper_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'juniper_enqueue_script' );

?>