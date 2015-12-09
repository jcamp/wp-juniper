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
	
	Testimonial Archive

*/

 get_header();
 if (have_posts()) : ?>
			<div class="row">
				<div class="large-9 large-centered columns cf">
					<h2 class="page-title">Testimonials</h2>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="row focus-index-entry">
						<div class="large-3 columns">
							<div class="focus-image">
								<img src="<!-- @path cogs.svg -->">
							</div>
						</div>
						<div class="large-9 columns info-block">
							<h3><?php the_title(); ?></h3>
							<div>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			
			<?php get_template_part( 'partials/pagination' ); ?>

			<div class="row">
				<div class="large-9 large-centered columns cf back-link">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="barley-icon-angle-left"></i> <?php echo __('Back', 'i18n'); ?></a>
				</div>
			</div>

<?php
 endif;
 get_footer(); ?>
