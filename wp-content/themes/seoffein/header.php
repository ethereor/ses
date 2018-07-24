
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>


  <body>

<div class="blog-masthead">
  <div class="container">
    <div class="logo">
      <h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo "seogan";#get_bloginfo( 'name' ); ?></a></h1>
      <h2><?php echo get_bloginfo( 'description' ); ?></h2>
    </div>
    <nav class="blog-nav" style="float: right;">
      <?php wp_nav_menu(array("menu" => "main","menu_class" => "title_li")); ?>
    </nav>
  </div>
</div>

    <div class="container">
