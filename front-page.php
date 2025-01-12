<?php get_header(); ?>
<!-- Sida för Startsida -->
<main>


    <div id="home" class="wrapper">

        <!-- widget -->
        <?php if (is_active_sidebar('topWidget')): ?>
            <div class="topWidget">
                <?php dynamic_sidebar('topWidget'); ?>
            </div>
        <?php endif; ?>

        <?php if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
                <div class="grid">

                    <div>
                        <!-- form -->
                        <?php the_content(); ?>
                    </div>
                    <div>
                        <?php

                        if (has_post_thumbnail()) {
                            ?>
                            <!-- dynamisk bild -->
                            <?php the_post_thumbnail('img-l');
                        } ?>
                    </div>
                </div>
                <?php
            }
        }
        ?>

        <!-- section for rooms home page -->
        <div id="room-section">
            <h2>Our Rooms & Suites</h2>
            <div class="grid">
                <?php
                query_posts('category_name=rooms&posts_per_page=4');
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="homeRoom">
                            <?php
                            // Finns bild?
                            if (has_post_thumbnail()) { ?>
                                <!-- Dynamisk bild -->
                                <?php the_post_thumbnail('img-l') ?>
                                <h3><?php the_title(); ?></h3><br>
                                <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                            <?php } ?>
                        </div>
                    <?php }
                }
                wp_reset_query(); // Återställer den globala frågan
                ?>
            </div>

            <div class="center">
                <!-- Länk till alla rum -->
                <?php
                $category_id = get_cat_ID('rooms'); // Hämtar kategori-ID för "rooms"
                $category_link = get_category_link($category_id); // Genererar länken för kategorin
                ?>
                <a href="<?php echo esc_url($category_link); ?>" class="btn">
                    View all rooms
                </a>
            </div>
        </div>




        <div id="parallaxHome" class="parallax">

        </div>

        <!-- section for news articles -->
        <div>
            <h2>News</h2>
            <div class="flex">
                <?php
                query_posts('category_name=news&posts_per_page=3');
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>


                        <div class="news-bubble">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                //finns bild?
                                if (has_post_thumbnail()) {
                                    ?>
                                    <!-- dynamisk bild -->
                                    <?php the_post_thumbnail('img-square'); ?>
                                    <h3><?php the_title(); ?></h3>
                                </a>

                            <?php } ?>

                        </div>
                        <?php
                    }
                }
                ?>
            </div>


        </div>


        <!-- services (max:6) -->

        <div id="services">
            <h2>Our Services</h2>
            <div class="flex">
                <?php
                query_posts('category_name=services&posts_per_page=6');
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>

                        <div class="service-bubble">

                            <?php
                            //finns bild?
                            if (has_post_thumbnail()) {
                                ?>
                                <!-- dynamisk bild -->
                                <?php the_post_thumbnail('img-icon'); ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>

                            <?php } ?>

                        </div>


                        <?php
                    }
                }
                ?>
            </div>


        </div>

    </div>


</main>

<?php get_footer(); ?>