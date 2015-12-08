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

*/

 get_header();
 if (have_posts()) : ?>
			
			<div class="row">
				<div class="large-9 large-centered columns cf">
					<h2 class="page-title"><?php __('Portfolio', 'i18n'); ?></h2>
					<section class="image-gallery cf">
						<div class="row">
							<div class="large-12 columns cf">
								<?php while ( have_posts() ) : the_post();
								$portfolio_items_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
								<div class="large-3 small-6 columns gallery-piece">
									<p><img src="<?php echo $portfolio_items_featured_image[0]; ?>" alt="<?php the_title_attribute(); ?>"/></p>
									<a class="zoom-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/zoom.svg"></a>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</section>
				</div>
			</div>
			
			<?php get_template_part( 'partials/pagination' ); ?>

			<div class="row">
				<div class="large-9 large-centered columns cf back-link">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="barley-icon-angle-left"></i> <?php __('Back', 'i18n'); ?></a>
				</div>
			</div>
		
<?php
 endif;
 get_footer(); ?>