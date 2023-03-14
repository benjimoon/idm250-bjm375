<?php
/**
 * This component is used to display a single blog post card.
 * It should be used inside a loop.
 */
?>
<section class="all-recent">
<article class="" data-component="">
  <div class="">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_the_title(); ?> Featured Image"
      class="featured-img">
    <div class=""></div>
  </div>
  <div class="all-featured">
    <div class="featured-time">
      <time datetime="2020-03-16"
        class=""><?php echo get_the_date(); ?></time>
      <?php get_template_part('components/blog-categories-list'); ?>

    </div>
    <div class="featured-stuff">
      <h3 class="featured-title">
        <a class="featured-link"href="<?php echo get_the_permalink(); ?>">
          <span class=""></span>
          <?php echo get_the_title(); ?>
        </a>
      </h3>
      <p class="featured-excerpt">
        <!-- <?php echo get_the_excerpt(); ?> -->
      </p>
    </div>
  </div>
</article>
</section>