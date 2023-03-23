
<?php get_header();?>
<!-- <h1><?php echo get_the_title();?></h1> -->

<div class="content-blocks">

    <?php 
    
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    } else {
        echo 'no posts found';
    }
    
    ?>
    <div class="home-recents">
    <?php get_template_part('components/recent-blogs');?>

</div>
</div>

