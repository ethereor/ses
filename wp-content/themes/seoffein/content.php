<div class="blog-post">
<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta"><?php the_date("m/Y"); ?> von <a href="#"><?php the_author(); ?></a>
  </p>

<?php if ( has_post_thumbnail() ) {?>
  <div class="row">

    <div class="col-md-8">
      <?php the_excerpt(); ?>
    </div>
        <div class="col-md-4">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
  </div>
  <?php } else { ?>
  <?php the_excerpt(); ?>
  <?php } ?>

<a href="<?php the_permalink(); ?>"><button>Weiterlesen</button></a>
</div><!-- /.blog-post -->