<?php get_header(); ?>
<main>
    <div id="events-theme" class="wrapper">
        <div class="flex-column">
            <?php
            // Hämta den aktuella kategorin
            $current_cat = get_queried_object();

            // Hämta parent-kategorin (eventthemes)
            $parent_cat = get_category_by_slug('eventthemes');

            // Hämta posten från eventthemes som matchar denna underkategori
            $args = array(
                'category__in' => array($parent_cat->term_id),
                'category__not_in' => get_term_children($parent_cat->term_id, 'category'),
                'posts_per_page' => 1,
                'title' => $current_cat->name
            );

            $parent_query = new WP_Query($args);

            // Visa parent-information först i top-div-event
            if ($parent_query->have_posts()):
                while ($parent_query->have_posts()):
                    $parent_query->the_post(); ?>
                    <div class="top-div-event grid">
                        <div>
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('img-large'); ?>
                            <?php endif; ?>
                        </div>
                        <div>
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;

            // Visa underkategorins poster
            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="events-overview-bubble">
                        <div>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div>
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('img-large'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>