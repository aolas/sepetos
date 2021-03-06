<header>
  <div class="navbar navbar-default navbar-static-top menu" role="banner">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle btn-ttc" data-toggle="collapse" data-target=".nav1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <div class="navbar-collapse collapse container nav1">
      <?php
      if (has_nav_menu('secondary_navigation')) :
			 wp_nav_menu(array('theme_location' => 'secondary_navigation' , 'menu_class' => 'nav navbar-nav navbar-right'));
      endif;
      ?>
      <form class="navbar-form navbar-right" method="get" role="search" action="<?php echo home_url('/'); ?>">
	<div class="form-group">
          <input type="search" class="form-control" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
	     <label class="hide"><?php _e('Search for:', 'roots'); ?></label>
	</div>
	<button type="submit" class="btn btn-default"><?php _e('Search', 'roots'); ?></button>
      </form>
      
    </div><!--/.nav-collapse -->
  </div>


  <div class="row-fluid logotipas">
    <div class="span12 container">
      <div class="logo">
      </div>
	<h4 class="padding-left-60">
	  <?php bloginfo('name'); ?>
	</h4>
    </div>
  </div>
  <!-- Main navigation -->
  <div class="navbar container navbar-default menu" role="banner">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle btn-ttc" data-toggle="collapse" data-target=".nav2">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse nav2">
      <?php
      if (has_nav_menu('primary_navigation')) :
                       wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
      ?>   
    </div><!--/.nav-collapse -->
  </div>
</header>

