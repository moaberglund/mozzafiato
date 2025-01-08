<?php get_header(); ?>

<main>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
        }
    }
    ?>
    <div class="wrapper">

        <?php the_content(); ?>

    </div>

</main>

<?php get_footer(); ?>