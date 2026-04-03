<?php
/**
 * Minimal theme header (head.php)
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <span class="logo">
      <?php
        // Buraya kendi logonu (SVG veya img etiketi) koyabilirsin, şimdilik site adı yazıyor
        bloginfo('name');
      ?>
    </span>
</header>
