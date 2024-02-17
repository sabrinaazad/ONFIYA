<?php get_header();
/* Template Name: Programs Archive Template */
?>
<?php $args = array(
    'p' => 191,
    'post_type' => 'any'
);
$page_fields = new WP_Query($args);
if ($page_fields->have_posts()) : while ($page_fields->have_posts()) : $page_fields->the_post(); ?>
<?php // Check value exists.
        if (have_rows('modules')) :

            // Loop through rows.
            while (have_rows('modules')) : the_row();
               
                // Case: blurb layout.
                if (get_row_layout() == 'blurb') :
                    get_template_part('modules/blurb');
                endif;
                
                // Case: hero-banner layout.
                if (get_row_layout() == 'hero_banner') :
                    get_template_part('modules/hero-banner');
                endif;
            
        // End loop.
            endwhile;

        // No value.
        else :
        // Do something...
        endif;

    endwhile;
endif; ?>

<?php wp_reset_postdata(); ?>

<section class="section section--programs full-width">
    <div class="section-wrapper">
        <?php
        $args = array(
            'post_type' => 'programs',
            'post_status' => 'publish',
            'orderby' => 'title',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="panels">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <a href="<?php the_permalink() ?>" class="panel">
                        <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                        <h4 class="heading"><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                    </a>

                <?php endwhile; ?>

        </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>