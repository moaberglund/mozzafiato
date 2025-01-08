<?php get_header(); ?>
<!-- Sida för undersida ? behövs den ?? jag vet inte vad du gööör :') -->
 <!-- utvecklad för övre delen av contact atm -->
<main>
    <div id="contact" class="wrapper">

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
        <!-- statiskt innehåll atm -->
        <div class="staff">
            <img src="<?= get_template_directory_uri();?>/media/luisa.jpg" alt="Profile picture of Luisa">
            <h3>Luisa</h3>
            <p>Hi! I'm the person behind Mozzafiato.</p>
        </div>
        <?php


        ?>

    </div>


</main>

<?php get_footer(); ?>