<?php
/**
 * This component is used to display a single blog post card.
 * It should be used inside a loop.
 */
?>

<section class="all-recent">

  <a class="featured-link" href="<?php echo get_the_permalink(); ?>">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_the_title(); ?> Featured Image"
      class="featured-img">
      <h3 class="featured-title">
          <?php echo get_the_title(); ?>      
      </h3>
      </a>
      <p class="exc">
      <?php echo get_the_excerpt(); ?>
      </p>
</section>