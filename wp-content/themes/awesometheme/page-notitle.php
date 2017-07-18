<?php
/*
  * Template Name: Page No Title
  */

get_header(); ?>

<?php if (have_posts()) : ?>

    <?php /* Start the Loop */ ?>
    <h1>This is the static title</h1>
    <?php while (have_posts()) : the_post(); ?>

        <small>Posted on:<?php the_time()?> in <?php the_category()?></small>
        <p><?php the_content() ?></p>

        <hr>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

