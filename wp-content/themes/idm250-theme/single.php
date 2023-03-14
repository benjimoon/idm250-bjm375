<?php get_header();?>

<?php
$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
    foreach ($terms as $term) {
        echo "<span>{$term->name}</span>";
    }
}
?>
<?php get_template_part('components/blogs'); ?>
<?php get_footer();?>
