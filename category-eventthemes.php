<?php get_header(); ?>
<main>
    <div id="events-overview" class="wrapper">
        <h1>Events</h1>
        <div class="flex-column">
            <?php
            // Hämta kategori-objektet för eventthemes
            $eventthemes_cat = get_category_by_slug('eventthemes');
            // Hämta ENDAST poster från eventthemes, exkludera underkategorier
            $args = array(
                'category__in' => array($eventthemes_cat->term_id),
                'category__not_in' => get_term_children($eventthemes_cat->term_id, 'category'),
                'posts_per_page' => 10
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();
                    // Hämta postens titel i lowercase och ta bort mellanslag för att matcha slug
                    $post_name_slug = strtolower(str_replace(' ', '', get_the_title()));
                    // Hämta kategorin som matchar post-titeln
                    $matching_category = get_category_by_slug($post_name_slug);
                    ?>
                    <div class="events-overview-bubble">
                        <div>
                            <?php if (has_post_thumbnail()): ?>
                                <picture>
                                    <?php the_post_thumbnail('img-large'); ?>
                                </picture>
                            <?php endif; ?>
                        </div>
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <?php if ($matching_category): ?>
                                <a href="<?php echo get_category_link($matching_category->term_id); ?>" class="btn">Read more</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>