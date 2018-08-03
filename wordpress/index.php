<?php get_header(); ?>
<section class="content">
  <?php if(have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article class="blogpost">
      <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php endif; ?>
      <h2 class="blogpost-title">
        <?php the_title(); ?>
      </h2>
      <section class="blogpost-meta-container">
        <ul class="blogpost-meta">
          <li>
            <?php
            $categories = get_the_category();
            $separator = ', ';
            $output = '';

            if($categories) {
              foreach ($categories as $category) {
                $output .=
                '<a href="'.get_category_link(
                  $category->term_id).'">'
                  .$category->cat_name.'</a>'.$separator;
              }
            }
            echo trim($output, $separator);
             ?>
          </li>
          <li><?php the_time('F j, Y'); ?></li>
          <li>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>
            </a>
          </li>
          <li>
            <a href="<?php comments_link(); ?>">
            <?php comments_number( 'no comment', 'one comment', '% comments' ); ?>
          </a>
        </li>
        </ul>
      </section>
      <p class="blogpost-excerpt">
        <?php the_excerpt(); ?>
      </p>
      <a href="<?php the_permalink(); ?>" class="blogpost-readmore">
        <?php echo __('Continue reading'); ?>
        <i class="fa fa-arrow-right"></i>
      </a>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <p>No posts to display yet.</p>
<?php endif; ?>
</section>
<?php if(is_active_sidebar('sidebar')) : ?>
  <section class="sidebar">
  <?php dynamic_sidebar('sidebar'); ?>
</section>
<?php endif; ?>
<?php get_footer(); ?>
