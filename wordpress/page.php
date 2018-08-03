<?php get_header(); ?>
<section class="content">
  <?php if(is_page()) : the_post(); ?>
      <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php endif; ?>
      <h2>
        <?php the_title(); ?>
      </h2>
        <?php the_content(); ?>
<?php endif; ?>
</section>
<?php if(is_active_sidebar('sidebar')) : ?>
  <section class="sidebar">
  <?php dynamic_sidebar('sidebar'); ?>
</section>
<?php endif; ?>
<?php get_footer(); ?>
