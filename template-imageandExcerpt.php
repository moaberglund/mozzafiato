<?php
/*
Template Name: Grid: Image and Excerpt for News
*/
?>
<?php get_header(); ?>
<!-- Dynamisk kategori-sida -->
<main>
    <div id="roomsAndSuites" class="wrapper">
        <?php
        // Hämta kategorinamn från query string, med fallback till "rooms"
        $category_name = get_query_var('news', 'news');
        ?>
        <h1><?php echo ucfirst($category_name); ?></h1>
        <!-- Inlägg från vald kategori (max:20) -->
        <?php
        $query_args = array(
            'category_name' => $category_name,
            'posts_per_page' => 20,
        );
        $query = new WP_Query($query_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>

                <div class="room-bubble">
                    <h2><?php the_title(); ?></h2>
                    <div class="grid">
                        <div class="rs-img">
                            <?php
                            // Kontrollera om inlägget har en bild
                            if (has_post_thumbnail()) {
                                ?>
                                <picture>
                                    <!-- Dynamisk bild -->
                                    <?php the_post_thumbnail('img-square'); ?>
                                </picture>
                            <?php } ?>
                        </div>
                        <div class="rs-text">
                            <p><?php the_excerpt(); ?></p><br>
                            <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            ?>
            <p>No posts were found in this category... <strong><?php echo esc_html($category_name); ?></strong>.</p>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</main>
<?php get_footer(); ?>