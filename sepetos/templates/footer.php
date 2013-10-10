<!--
<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">


    </div>
  </div>
</footer>
-->

<div class="row-fluid footer">
      <div class="span12">
	<?php dynamic_sidebar('sidebar-footer'); ?>
	<p>
	  &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
	    </p>
      </div>
</div>
<?php wp_footer(); ?>
