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
	
	Functions File
*/

// JavaScripts and Stylesheets
include('functions-scripts.php');

/* Custom Post Types */
include('functions-portfolio.php'); // Portfolio
include('functions-testimonials.php'); // Testimonials 
include('functions-services.php'); // Services

// Navigation Menus
include('functions-navigation.php');

// Custom Header
include('functions-custom-header.php');

// Social Widget for Header
include('functions-sidebars.php');

// Social Widget for Header NO LONGER USED
//include('functions-social-widget.php');

// Weird WordPress things.
add_theme_support( 'post-thumbnails' , array('post', 'page', 'portfolio', 'testimonials', 'services') );
add_theme_support( 'html5', array('gallery','search-form') );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

?>