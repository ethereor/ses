<?php if ( post_password_required() ) {
	return;
} ?>
	<div id="comments" class="comments-area single-post">
		<?php if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?php
				printf( _nx( 'Ein Kommentar', '%1$s Kommentare', get_comments_number(), 'comments title'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h2>
			<ul class="comment-list">
				<?php 
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
				?>
			</ul>
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>