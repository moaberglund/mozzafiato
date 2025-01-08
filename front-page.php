<?php get_header(); ?>
<!-- Sida för Startsida -->
<main>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
        }
    }
    ?>

    <div id="home" class="wrapper">

        <!-- widget -->
        <?php if (is_active_sidebar('topWidget')): ?>
            <div id="topWidget">
                <?php dynamic_sidebar('topWidget'); ?>
            </div>
        <?php endif; ?>
        <div class="grid">

            <!-- plugin form booking rooms? -->
            <!-- logotyp -->
            <?php the_content(); ?>

        </div>

        <!-- section for rooms home page -->
        <?php
        query_posts('category_name=rooms&posts_per_page=4');
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <div id="room-section">
                    <h2>Our Rooms & Suites</h2>
                    <div class="grid">
                        < class="homeRoom">
                            <?php
                            //finns bild?
                            if (has_post_thumbnail()) {
                                ?>
                                <!-- dynamisk bild -->
                                <?php the_post_thumbnail('img-l') ?>
                                <h3><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="btn"></a>

                            <?php } ?>


                    </div>


                </div>

                <?php
            }
        }
        ?>

        <div class="center">
            <!-- RÄTT LÄNK HÄR -->
            <button>View all rooms</button>
        </div>





        <div id="parallaxHome" class="parallax">

        </div>

        <!-- section for news articles -->
        <?php
        query_posts('category_name=news&posts_per_page=3');
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <div>
                    <h2>News</h2>
                    <div class="flex">
                        <div class="news-bubble">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                //finns bild?
                                if (has_post_thumbnail()) {
                                    ?>
                                    <!-- dynamisk bild -->
                                    <?php the_post_thumbnail('img-square') ?>
                                    <h3><?php the_title(); ?></h3>
                                </a>

                            <?php } ?>

                        </div>
                    </div>


                </div>

                <?php
            }
        }
        ?>

        <!-- services (max:6) -->

        <?php
        query_posts('category_name=services&posts_per_page=6');
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <div id="services">
                    <h2>Our Services</h2>
                    <div class="flex">
                        <div class="service-bubble">

                            <?php
                            //finns bild?
                            if (has_post_thumbnail()) {
                                ?>
                                <!-- dynamisk bild -->
                                <?php the_post_thumbnail('img-square') ?>
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>

                            <?php } ?>

                        </div>
                    </div>


                </div>

                <?php
            }
        }
        ?>
    </div>


</main>

<?php get_footer(); ?>