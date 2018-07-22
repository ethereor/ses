<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-signup">
<h4>Gratis E-Learning Kurs</h4>
<p>
<img src="http://localhost/seoffein/wp-content/uploads/2018/07/authority-seo-150x150.png" alt="rocket" />
</p>
<p style="color: #fff;">Grow your blog to 100,000 visitors per month from Google.
</p>
<button>Jetzt Anmelden</button>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
<ol class="list-unstyled">
  <?php wp_get_archives( 'type=monthly' ); ?>
</ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->