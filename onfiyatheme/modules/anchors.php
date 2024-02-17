<section class="section section--anchors">
    <div class="section-wrapper">
        <div class="panels">
            <?php if (have_rows('anchors')) : while (have_rows('anchors')) : the_row(); ?>
                    <a class="panel" href="#<?php echo the_sub_field('id') ?>">
                        <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <div class="title"><?php the_sub_field('title'); ?></div>
                    </a>
            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</section>