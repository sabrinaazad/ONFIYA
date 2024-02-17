<?php get_header();
/* Template Name: Team Archive Template */
?>
<?php $args = array(
    'p' => 749,
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

<section class="section section--team-members">
    <div class="team-grid">
        <?php
        $args = array(
            'post_type' => 'team-members',
            'post_status' => 'publish',
            'orderby' => 'title',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="team_slider_2">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <?php
        $args = array(
            'post_type' => 'team-members',
            'post_status' => 'publish',
            'orderby' => 'title',
            'order'   => 'ASC',
            'posts_per_page' => -1
        );

        $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()) : ?>
            <div class="team_slider">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="slide">
                        <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                        <div class="content">
                            <h2 class="heading"><?php the_title(); ?></h2>
                            <div class="subheading"><?php the_field("title"); ?></div>
                            <div class="phone"><a href="tel:<?php the_field('phone'); ?>"><?php the_field("phone"); ?></a></div>
                            <div class="email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field("email"); ?></a></div>
                            <?php the_field("bio"); ?>
                            <a class="btn btn-primary" href="<?php the_permalink() ?>">Read Biography</a>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        <?php else : ?>

            <p>Sorry, no posts exist.</p>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_footer(); ?>