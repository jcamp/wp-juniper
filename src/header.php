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
					<?php if ( get_theme_mod( 'juniper_logo' ) ) : ?>
					<div id="logo">
						<div id="logo-image">
							<img src="<?php echo esc_url( get_theme_mod( 'juniper_logo' ) ); ?>">
						</div>
					</div>
					<?php else : ?>
					<div id="logo">
						<div id="logo-image">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
						</div>
					</div>
					<?php endif; ?>
				<h1 class="site-title"><?php echo bloginfo('name'); ?></h1>
				<?php if ( get_theme_mod( 'juniper_twitter' ) || get_theme_mod( 'juniper_facebook' ) || get_theme_mod( 'juniper_linkedin' ) || get_theme_mod( 'juniper_instagram' )|| get_theme_mod( 'juniper_googleplus' ) || get_theme_mod( 'juniper_flickr' ) ||  get_theme_mod( 'juniper_behance' ) || get_theme_mod( 'juniper_dribbble' ) || get_theme_mod( 'juniper_pinterest' ) ): ?>
				<div class="social-icons hide-for-small">
					<div id="social">
						<?php if ( get_theme_mod( 'juniper_twitter' ) ) : echo '<a href="https://twitter.com/' . get_theme_mod( 'juniper_twitter' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/twitter.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_facebook' ) ) : echo '<a href="https://facebook.com/' . get_theme_mod( 'juniper_facebook' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/facebook.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_instagram' ) ) : echo '<a href="https://instagram.com/' . get_theme_mod( 'juniper_instagram' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/instagram.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_linkedin' ) ) : echo '<a href="https://linkedin.com/in/' . get_theme_mod( 'juniper_linkedin' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/linkedin.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_behance' ) ) : echo '<a href="https://behance.net/' . get_theme_mod( 'juniper_behance' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/behance.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_pinterest' ) ) : echo '<a href="https://pinterest.com/' . get_theme_mod( 'juniper_pinterest' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/pinterest.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_flickr' ) ) : echo '<a href="https://flickr.com/photos/' . get_theme_mod( 'juniper_flickr' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/flickr.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_dribbble' ) ) : echo '<a href="https://dribbble.com/' . get_theme_mod( 'juniper_dribbble' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/dribbble.svg"></a>'; endif; ?>
						<?php if ( get_theme_mod( 'juniper_googleplus' ) ) : echo '<a href="https://plus.google.com/u/0/' . get_theme_mod( 'juniper_googleplus' ) .'"><img src="' . get_template_directory_uri() . '/images/social_icons/googleplus.svg"></a>'; endif; ?>
					</div>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
		<div id="placeholder"></div>
	</header>
