<?php get_header(); ?>
<!-- Sida för resor -->
<main>
    <div id="events-overview" class="wrapper">

        <h1>Events</h1>
        <div class="flex-column">

            <!-- existing events (max:5)-->
            <?php
            query_posts('category_name=eventthemes&posts_per_page=5');
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>

                    <div class="events-overview-bubble">
                        <div>
                            <?php
                            //finns bild?
                            if (has_post_thumbnail()) {
                                ?>
                                <picture>
                                    <!-- dynamisk bild -->
                                    <?php the_post_thumbnail('img-large') ?>
                                </picture>
                            <?php } ?>
                        </div>
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                        </div>

                    </div>

                    <?php
                }
            }
            ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>