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
	
	Functions File for Custom Header
*/

function juniper_custom_header_setup() {
    
    $args = array(
        'default-image'      => get_template_directory_uri() . '/images/background.jpg',
        'width'              => 3000,
        'height'             => 1841,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'juniper_custom_header_setup' );

?>