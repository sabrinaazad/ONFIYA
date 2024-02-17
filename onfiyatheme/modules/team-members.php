<section class="section section--team-members">
    <div class="section-wrapper">

        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <div class="subheading align--center"><?php echo $subheading; ?></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading align--center"><?php echo $heading; ?></h2>
        <?php endif; ?>


        <div class="team_slider_2">
            <?php $teammembers = get_sub_field('team_members');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="team_slider">
            <?php $teammembers = get_sub_field('team_members');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <div class="image-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content">
                            <h3 class="heading"><?php the_title(); ?></h3>
                            <div class="subheading"><?php the_field("title"); ?></div>
                            <div class="phone"><a href="tel:<?php the_field("phone"); ?>"><?php the_field("phone"); ?></a></div>
                            <div class="email"><a href="mailto:<?php the_field("email"); ?>"><?php the_field("email"); ?></a></div>
                            <?php the_field("bio"); ?>
                            <!-- <a class="btn btn-primary" href="<?php the_permalink() ?>">Read Full Bio</a> -->
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>
</section>