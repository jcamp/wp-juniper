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
?>
			<section class="search-container cf">
				<div class="row">
					<div class="large-12 columns cf">
							<?php get_search_form( true ); ?>
					</div>
				</div>
			</section>
			
			<!-- Footer -->
			<footer class="cf">
				<a class="scrollup"><img src="<?php echo get_template_directory_uri(); ?>/images/up_arrow.svg"></a>
				<div class="row">
					<div class="large-12 columns">
						<div class="large-6 columns">
							<span class="copyright">&copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> <?php echo __('All rights reserved.', 'i18n'); ?></span>
						</div>
						<div class="large-6 columns">
							<span class="barley-logo">Theme made by <a href="http://plainmade.com/" title="Plain, Design and Development in Scranton, PA.">Plain</a>.</span>
						</div>
					</div>
				</div>
			</footer>
	
<?php wp_footer(); ?>
</body>
</html>
