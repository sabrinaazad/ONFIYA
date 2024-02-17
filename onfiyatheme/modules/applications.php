<section class="section section--applications full-width">
    <div class="section-wrapper">
        <div class="panels">
            <?php if (have_rows('apps')) : while (have_rows('apps')) : the_row(); ?>
                    <a class="panel" href="<?php the_sub_field('link'); ?>">
                        <?php if (get_sub_field('icon')) : ?><img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" /><? endif; ?>
                        <?php if (get_sub_field('title')) : ?><div class="title"><?php the_sub_field('title'); ?></div><? endif; ?>
                        <?php if (get_sub_field('blurb')) : ?><p class="blurb"><?php the_sub_field('blurb'); ?></p><? endif; ?>
                    </a>
            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</section>