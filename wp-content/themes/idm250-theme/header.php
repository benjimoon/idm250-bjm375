<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Title</title>
<div class="main-head">
<div class="nav">
    <?php wp_head(); ?>
    </div>
    </div>
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
?>
<?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
