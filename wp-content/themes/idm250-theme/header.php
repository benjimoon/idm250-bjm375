<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Title</title>
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<?php
wp_body_open();
?>
<div class="nav">
<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" class="logo"alt="Logo">
<?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>

</div>