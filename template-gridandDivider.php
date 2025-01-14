<?php
/*
Template Name: Grid and Divider for Wine Tasting
*/
?>
<?php get_header(); ?>
<main>
    <div id="about" class="wrapper">
        <?php
        // Hämta kategorinamn från query string, med fallback till en standardkategori
        $category_name = get_query_var('winetasting', 'winetasting');
        ?>
        <h1><?php echo ucfirst($category_name); ?></h1>

        <!-- Inlägg från vald kategori (max:5) -->
        <?php
        $query_args = array(
            'category_name' => $category_name,
            'posts_per_page' => 5,
        );
        $query = new WP_Query($query_args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="grid">
                    <div class="rs-img">
                        <?php
                        // Kontrollera om inlägget har en bild
                        if (has_post_thumbnail()) {
                            ?>
                            <!-- Dynamisk bild -->
                            <?php the_post_thumbnail('img-m'); ?>
                        <?php } ?>
                    </div>
                    <div class="about-bubble">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <div class="border-img">
                    <img src="<?= get_template_directory_uri(); ?>/media/icons/divider.png" alt="Page divider">
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