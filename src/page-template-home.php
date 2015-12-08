<?php
/*
	Template Name: Home Page
	
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
 if ( have_posts() ) :
 ?>

		<div id="home-content">

			<section class="cf">
				<div class="row">
					<div class="large-12 columns cf">
						<div class="intro">
							<p><?php echo get_post_meta( $post->ID, 'homepage_intro', true ); ?></p>
						</div>
					</div>
				</div>
			</section>

			<?php
			// Begin Portfolio Items
			$portfolio_items = new WP_Query( 'post_type=portfolio&posts_per_page=8&order=asc' );
			if ( $portfolio_items->have_posts() ) : ?>
			<section class="image-gallery cf">
				<div class="row">
					<div class="large-12 columns cf">
						<?php while ( $portfolio_items->have_posts() ) : $portfolio_items->the_post();
						$portfolio_items_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="large-3 small-6 columns gallery-piece">
							<p><img src="<?php echo $portfolio_items_featured_image[0]; ?>" alt="<?php the_title_attribute(); ?>"/></p>
							<a class="zoom-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/zoom.svg"></a>
						</div>
						<?php endwhile; ?>
						<?php if ( intval(wp_count_posts('portfolio')->publish) > 8 ) : ?>
						<div class="cf"></div>
						<div class="view-more-link portfolio-index">
							<a href="/portfolio">View All <i class="barley-icon-angle-right"></i></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php endif; // end Portfolio Items ?>

			<?php
			// Begin Services
			$services_items = new WP_Query( 'post_type=services&posts_per_page=3&order=asc' );
			if ( $services_items->have_posts() ) : ?>
			<section class="focus-container cf">
				<div class="row">
					<div class="large-12 columns cf three-up">
						<?php while ( $services_items->have_posts() ) : $services_items->the_post();
						$services_items_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="large-4 columns info-block focus">
							<?php if (is_array($services_items_featured_image) > 0) { ?>
							<div>
								<img src="<?php echo $services_items_featured_image[0]; ?>" alt="<?php the_title_attribute(); ?>">
							</div>
							<?php } ?>
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<div>
								<?php the_excerpt(); ?>
							</div>
						</div>
						<?php endwhile; ?>
						<?php if ( intval(wp_count_posts('services')->publish) > 3 ) : ?>
						<div class="cf"></div>
						<div class="view-more-link focus-index">
							<a href="/services">View All <i class="barley-icon-angle-right"></i></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php endif; // End Services ?>

			<?php
			// Begin Testimonials
			$testimonials_items = new WP_Query( 'post_type=testimonials&posts_per_page=2&order=asc' );
			if ( $testimonials_items->have_posts() ) : ?>
			<section class="blurb-container cf">
				<div class="row">
					<div class="large-12 columns cf two-up">
						<?php while ( $testimonials_items->have_posts() ) : $testimonials_items->the_post(); ?>
						<div class="large-6 columns info-block blurb">
							<div>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; ?>
						<?php if ( intval(wp_count_posts('testimonials')->publish) > 2 ) : ?>
						<div class="cf"></div>
						<div class="view-more-link blurb-index">
							<a href="/testimonials">View All <i class="barley-icon-angle-right"></i></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php endif; // End Testimonials ?>

			<?php
			// Begin Blog Posts
			$recent_blogposts = new WP_Query( array ('post_type' => 'post', 'posts_per_page' => '4', 'order' => 'DESC' ) );
			if ( $recent_blogposts->have_posts() ) : ?>
			<section class="blog-container cf">
				<div class="row">
					<div class="large-12 columns cf three-up">
						<?php while ( $recent_blogposts->have_posts() ) : $recent_blogposts->the_post(); ?>
						<div class="large-4 columns blog-post">
							<h3><a href="<?php the_permalink(); ?>" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<span class="blog-date"><?php echo get_the_date('F jS, Y'); ?></span>
							<div>
								<?php the_excerpt(); ?>
							</div>
							<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
						</div>
						<?php endwhile; ?>
						<?php if ( intval(wp_count_posts()->publish) > 3 ) : ?>
						<div class="cf"></div>
						<div class="view-more-link blog-index">
							<a href="/blog">View All <i class="barley-icon-angle-right"></i></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php endif; // End Blog Posts ?>

		</div>
		
<?php
endif; // end top If
get_footer() ; ?>