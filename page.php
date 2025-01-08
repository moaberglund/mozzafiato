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
                        <?php the_post_thumbnail('img-m') ?>
                    </picture>
                <?php } ?>
            </div>
            <div>

                <?php the_content(); ?>
            </div>

        </div>
        <?php


        ?>

    </div>


</main>

<?php get_footer(); ?>