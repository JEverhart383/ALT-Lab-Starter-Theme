<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	<?php the_title('', ' |', true); ?>
	<?php bloginfo('name') ?>
		
	</title>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <?php 
          	$custom_logo_id = get_theme_mod('custom_logo');
          	$logo = wp_get_attachment_image_src($custom_logo_id, 'full'); 
          ?>

          <?php if( has_custom_logo()): ?>
          	<a href="<?php bloginfo('url') ?>"><img class="img img-responsive" src="<?php echo $logo[0] ?>"> </a>
          <?php else: ?>	
          <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
      <?php endif;?> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <!-- Print out menu items here -->
        <?php wp_nav_menu(
	        array(
	        'container' => 'ul', 	
	       	'menu_class' => 'nav navbar-nav', 
	        'theme_location' => 'primary' 
	        )
        );  ?>

        </div><!--/.navbar-collapse -->
      </div>
 </nav>
 <div class="jumbotron">
	<div class="container">
		
	</div>
</div>

 <!-- Begin Main Content Container  -->
<div class="container">
 	

