<?php
/* Template Name: Page with Sidebar */
get_header();
?>
<div class="">
  <div class="">
    <div class="">
      <h2 class="">
      </h2>

    </div>
  </div>
</div>


<div class=""
  data-component="">
  <div class="sidebar-content">
  <?php get_template_part('components/blogs'); ?>
  </div>
  <div class="">
    <?php get_template_part('components/sidebar'); ?>
  </div>
</div>
<?php get_footer(); ?>