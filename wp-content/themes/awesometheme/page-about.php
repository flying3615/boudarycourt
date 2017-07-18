<?php get_header(); ?>

<h1>This is index</h1>
<?php if (have_posts()) : ?>

    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

        <p><?php the_content() ?></p>

        <hr>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
