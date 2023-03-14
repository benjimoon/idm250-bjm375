<?php get_header('404');?>
<div class="error-all">
<p class="error-title">
WHOOPS...
</p>
<span class="error-color">
404 ERROR
</span>
<p class="error-title">
PAGE NOT FOUND
</p>
<div class="error-button-link">
<a href="<?php echo site_url();?>">
          <button class="error-button">BACK TO HOME</button>
          </a>
</div>
</div>
<?php get_footer(); ?>