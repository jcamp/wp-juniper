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

*/ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
	if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function theme_slug_render_title() {
	?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php
		}
		add_action( 'wp_head', 'theme_slug_render_title' );
	} ?>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- Background Image -->
	<div id="background" id="bg-image">
		<img src="<?php header_image(); ?>">
		<div class="bg-fade"></div>
	</div>

	<!-- Header -->
	<header>
		<div class="row">
			<!-- Mobile Menu Icon -->
			<div class="large-12 columns" id="mobile-header">
				<a href="#menu" class="menu-trigger"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile_menu.svg"></a>
			</div>
			<!-- Navigation -->
			<nav class="large-12 columns hide-for-small">
				<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'menu', 'menu_class'=>'main-navigation', 'theme_location'=>'primary-menu' ) ); ?>
			</nav>
			<!-- Logo & Icons -->
			<div class="large-12 columns">
				<div id="logo">
					<div id="logo-image">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
					</div>
				</div>
				<h1 class="site-title"><?php echo bloginfo('name'); ?></h1>
				
				<?php get_sidebar('header'); ?>
				
			</div>
		</div>
		<div id="placeholder"></div>
	</header>
