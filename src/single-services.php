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
 if (have_posts()) :
 while ( have_posts() ) : the_post();
 $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>			
			<section class="cf">
				<div class="row">
					<div class="large-9 large-centered columns cf">
						<div class="image-content">
							<?php if ( isset($featured_image[0]) ) : ?>
                                <img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title_attribute(); ?>"/>
                            <?php else : ?>
                                Set featured image.
                            <?php endif; ?>
						</div>
					</div>
				</div>
			</section>

			<div class="row">
				<div class="large-9 large-centered columns cf">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2 data-root-key="the_title" data-barley-editor="mini" data-root-postid="<?php echo $post->ID; ?>"><?php the_title(); ?></h2>
						<div data-root-key="the_content" data-barley-editor="advanced" data-root-postid="<?php echo $post->ID; ?>">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			</div>

			<div class="row">
				<div class="large-9 large-centered columns cf back-link">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="seperator"><i class="barley-icon-angle-left"></i> <?php echo __('Back Home', 'i18n'); ?></a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>services" title="<?php echo __('View All Services', 'i18n'); ?>"><?php echo __('View All', 'i18n'); ?> <i class="barley-icon-angle-right"></i></a>
				</div>
			</div>
		
<?php endwhile; endif;	
get_footer(); ?>