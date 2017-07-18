<?php get_header(); ?>

<h1>This is index</h1>
<?php if (have_posts()) : ?>

    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

        <h3><?php the_title() ?></h3>
<!--        get the post feature img-->
        <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail')?></div>

        <small>Posted on:<?php the_time()?> in <?php the_category()?></small>
        <p><?php the_content() ?></p>

        <hr>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

