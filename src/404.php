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
	
	404 Page Template

*/

 get_header(); ?>

			<div class="row">
				<div class="large-9 large-centered columns cf">
					<article>
						<h2 class="four-o-four"><?php __('Oops!', 'i18n'); ?></h2>
						<div>
							<p><?php __('Not sure what happened, but the page you\'re looking for doesn\'t exist.', 'i18n'); ?></p>
						</div>	
					</article>
				</div>
			</div>

			<div class="row">
				<div class="large-9 large-centered columns cf back-link four-o-four">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="barley-icon-angle-left"></i> <?php __('Back Home', 'i18n'); ?></a>
				</div>
			</div>
		
<?php get_footer(); ?>