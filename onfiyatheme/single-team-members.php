<?php get_header(); ?>
<section class="section--team-member">
    <div class="section-wrapper">
        <div class="single">
            <?php while (have_posts()) : the_post(); ?>
                <input class="btn-back desktop-only" type="button" onclick="javascript:history.back();return false;" value="Go Back">

                <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
                <h1 class="heading"><?php the_title(); ?></h1>
                <div class="content">
                    <div class="position"><?php the_field("title"); ?></div>
                    <div class="phone"><a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a></div>
                    <div class="email"><a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a></div>
                </div>

                <?php the_field("bio"); ?>
        </div>

    <?php endwhile; ?>
    </div>
    </div>
</section>
<?php get_footer(); ?>