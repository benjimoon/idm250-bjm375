<!-- Start ./components/featured-block -->
<section aria-labelledby="social-impact-heading" class="">
  <div class="">
    <div class="">
      <?php
      $image = get_field('cta_background_image');
      if(!empty($image)): ?>
      <img src="<?php echo esc_url($image['url']); ?>" class=""
        alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
    </div>
    <div class="">
      <div class="">
        <h2 id="">
          <?php echo get_field('cta_heading'); ?>
        </h2>
        <p class="">
          <?php echo get_field('cta_description'); ?>
        </p>
        <?php
        $link = get_field('cta_link');
      if($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
        <a class=""
          href="<?php echo esc_url($link_url); ?>"
          target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- End ./components/featured-block -->