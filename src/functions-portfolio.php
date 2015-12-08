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
	
	Portfolio Custom Post Type
*/

add_action( 'init','portfolio_register' );
function portfolio_register() {

    $args = array(
        'label' => __( 'Portfolio' ),
        'singular_label' => __( 'Portfolio Item' ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
        'rewrite' => array( 'slug' => 'portfolio', 'with_front' => false ),
       );

    register_post_type( 'portfolio' , $args );
}

?>