<?php get_header(); ?>
<!-- enkel grid layout med fetare h3:a -->
<main>
    <div class="wrapper">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        }
        ?>
        <h1><?php the_title(); ?></h1>
        <div class="grid">
            <div>
                <?php
                //finns bild?
                if (has_post_thumbnail()) {
                    ?>
                    <picture>
                        <!-- dynamisk bild -->
                        <?php the_post_thumbnail('img-ml') ?>
                    </picture>
                <?php } ?>
            </div>
            <div class="contact-info">
                <?php the_content(); ?>
            </div>
        </div>        
        <?php
        ?>
    </div>
</main>
<?php get_footer(); ?>