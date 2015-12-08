<?php if ( get_previous_posts_link() || get_next_posts_link() ) : ?>
<div class="pagination">
	<div class="row">
		<div class="large-9 large-centered columns cf">
			<div class="large-4 columns">
				<?php if ( get_previous_posts_link() ) : ?>
				<!-- previous --><a href="<?php echo get_previous_posts_link(); ?>" class="newer inactive"><img src="<?php echo get_template_directory_uri(); ?>/images/right_arrow.svg"> <?php __('Newer Posts', 'i18n'); ?></a><!-- endprevious -->&nbsp;
				<?php endif; ?>
			</div>	
			<div class="large-4 columns archives">
				
			</div>	
			<div class="large-4 columns">
				<?php if ( get_next_posts_link() ) : ?>
				<!-- next --><a href="<?php echo get_next_posts_link(); ?>" class="older"><?php __('Older Posts', 'i18n'); ?> <img src="<?php echo get_template_directory_uri(); ?>/images/right_arrow.svg"></a><!-- endnext -->&nbsp;
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>