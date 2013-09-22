<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Sepetos
 * 
 * 
 */
?><!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="navbar navbar-default navbar-static-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle btn-ttc" data-toggle="collapse" data-target=".nav1">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
	
      </div>
      <div class="navbar-collapse collapse nav1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Default</a></li>
          <li><a href="wp-login.php">Login</a></li>
          <li><a href="#">Fixed top</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
    <div id="page" class="hfeed site container wrap">
    	<div class="row-fluid h1 logotipas"> 
	<p><?php bloginfo( 'description' ); ?></p>
    </div>
    <div class="navbar navbar-default">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle btn-ttc" data-toggle="collapse" data-target=".nav2">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div class="navbar-collapse collapse nav2">
        <ul class="nav navbar-nav">
	  <?php if (function_exists('getNavMenu')): ?>
          <?php echo getNavMenu('mainmenu'); ?>
          <?php endif; ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>

	

	<div id="main" class="wrapper">