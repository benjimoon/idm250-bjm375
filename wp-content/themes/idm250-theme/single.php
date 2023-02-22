<?php get_header();?>
this is single php

<?php
$currentPostId = get_the_id();

$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
    foreach ($terms as $term) {
        echo "<span>{term->name}</span>";
    }
}
?>
<?php get_footer();?>
