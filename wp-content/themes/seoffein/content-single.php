<div class="blog-post single-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<?php if ( has_post_thumbnail() ) {
  	?><div style="float: right;"><?php the_post_thumbnail(); ?></div><?php
} 	?>
 <?php the_content(); ?><div style="clear: both;"></div>
</div><!-- /.blog-post -->