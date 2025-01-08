<?php get_header(); ?>
<!-- Sida för enskilda post-inlägg ? -->
<main>
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            //if ROOM
            if (in_category('rooms')) {
                ?>
                <div class="room wrapper">
                    <h1><?php the_title(); ?></h1>
                    <div class="room-flex">

                        <div class="roomft room-left">
                            <?php the_excerpt(); ?>
                            <!-- form ??? hur i helvete ska jag få in den där :') -->
                        </div>
                        <div class="room-right">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('img-ml');
                                the_content();

                            }
                            ?>
                        </div>
                    </div>


                </div>
                <?php
            }

            //if NEWS
            else if (in_category('news')) {
                ?>
                    <div class="news wrapper">
                        <h1><?php the_title(); ?></h1>
                        <div class="grid">
                            <div>
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('img-ml');


                                }
                                ?>
                            </div>

                            <div>
                            <?php the_content(); ?>
                            </div>

                        </div>


                    </div>


                <?php
            }
        }
    }
    ?>



</main>

<?php get_footer(); ?>