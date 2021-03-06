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
 while ( have_posts() ) : the_post(); ?>
			
			<div class="row">
				<div class="large-9 large-centered columns cf">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h2 data-root-key="the_title" data-barley-editor="mini" data-root-postid="<?php echo $post->ID; ?>"><?php the_title(); ?></h2>
						<div class="meta">
							<span class="published_on"><?php the_date('F jS, Y'); ?></span>
						</div>
						<div data-root-key="the_content" data-barley-editor="advanced" data-root-postid="<?php echo $post->ID; ?>">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			</div>
			
			<div class="row">
				<div class="large-9 large-centered columns cf back-link">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="barley-icon-angle-left"></i> <?php echo __('Back Home', 'i18n'); ?></a>
				</div>
			</div>
			
			<?php comments_template(); ?>
			
			
<?php endwhile; endif;	
get_footer(); ?>