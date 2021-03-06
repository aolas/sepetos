content-single.php
<?php while (have_posts()) : the_post(); ?>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h4><?php the_title(); ?></h4></br>
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <div class="panel-body">
       <?php the_content(); ?>
    </div>
    <div class="panel-footer">Panel footer
      link pages</br>
       <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p>p></nav>nav>')); ?>
    </div>
  </div>

  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
