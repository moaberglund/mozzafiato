<?php get_header(); ?>

<main>
    <div id="about" class="wrapper">
        <h1>About</h1>

        <!-- about (max:5)-->
        <?php
        query_posts('category_name=about&posts_per_page=5');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="grid">
                    <div class="about-bubble">
                        <?php
                        //finns bild?
                        if (has_post_thumbnail()) {
                            ?>
                            <!-- dynamisk bild -->
                            <?php the_post_thumbnail('img-m') ?>
                        <?php } ?>
                    </div>
                    <div class="about-bubble">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>

                    </div>

                </div>

                <?php
            }
        }
        ?>

        <!-- not working -->
        <div id="diningtable" class="parallax">
            <!-- parallax dining table -->


        </div>
    </div>

</main>

<?php get_footer(); ?>