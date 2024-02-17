<section class="section section--process full-width" id="<?php echo the_sub_field("id");?>" style="background-color:<?php echo the_sub_field("background_color");?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <? if (get_sub_field('subheading')) : ?><div class="subheading"><? the_sub_field('subheading'); ?></div><? endif; ?>
            <? if (get_sub_field('heading')) : ?><h2 class="heading"><? the_sub_field('heading'); ?></h2><? endif; ?>
            <? if (get_sub_field('blurb')) : ?><p class="blurb"><?php the_sub_field('blurb'); ?></p><? endif; ?>
        </div>
       
        <?php if (have_rows('process')) : ?>
            <div class="process-timeline">
                <?php while (have_rows('process')) : the_row(); ?>
                    <div class="process">
                        <div class="image-wrapper">
                            <img src="<?php the_sub_field('image'); ?>">
                        </div>
                        <div class="text-wrapper">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php the_sub_field('blurb'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>