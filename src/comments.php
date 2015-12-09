<div class="row">
	<div id="comments" class="large-9 large-centered columns cf comments">
	
	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( _nx( 'One response to &ldquo;%2$s&rdquo;', '%1$s responsess to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'i18n' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>
	
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol>
	
	<?php endif; ?>
	
	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php __( 'Comments are closed.', 'i18n' ); ?></p>
	<?php endif; ?>
	
	<?php comment_form(); ?>
	
	</div>
</div>