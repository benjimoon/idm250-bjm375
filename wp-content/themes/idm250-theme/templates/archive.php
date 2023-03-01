<?php
get_header();
$title = get_the_archive_title();

$description = get_the_archive_description();
?>
<div class="">
<?php get_template_part('components/content-archive');?>
</div>
<?php get_footer();?>