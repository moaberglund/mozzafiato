<?php get_header(); ?>
<!-- Sida för resor -->
<main>
    <div id="roomsAndSuites" class="wrapper">

        <h1>Rooms & Suites</h1>

        <!-- existing rooms (max:20)-->
        <?php
        query_posts('category_name=rooms&posts_per_page=20');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>

                <div class="room-bubble">
                    <h2><?php the_title(); ?></h2>
                    <div class="grid">
                        <div class="rs-img">
                            <?php
                            //finns bild?
                            if (has_post_thumbnail()) {
                                ?>
                                <img class="trip-img">
                                <!-- dynamisk bild -->
                                <?php the_post_thumbnail('img-large') ?>
                                </img>
                            <?php } ?>
                        </div>
                        <div class="rs-text">
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
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