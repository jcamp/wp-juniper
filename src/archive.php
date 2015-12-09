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
					<div class="archive-list">
						<?php if ( is_category() ) { ?>
							<h2><?php single_cat_title(); ?> <?php echo __('Category', 'i18n'); ?></h2>
							
						<?php } ?>
							
						<?php if ( is_tag() ) { ?>
							<h2><?php single_tag_title(); ?> <?php echo __('Tag', 'i18n'); ?></h2>
							
						<?php } ?>
						
						<?php if ( is_date() ) { ?>
							<h2><?php echo __('Browsing Posts by Date', 'i18n'); ?></h2>
							
						<?php } ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?> <span class="published_on"><?php echo get_the_date('F jS, Y'); ?></span></h3></a>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			
			<?php get_template_part( 'partials/pagination' ); ?>
		
<?php
endif; 
get_footer(); ?>