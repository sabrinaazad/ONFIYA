<section class="section section--statistics full-width" style="background-color: <?php the_sub_field('background_color'); ?>">
    <div class="section-wrapper">
        <div class="panels" id="counter">
            <?php if (have_rows('panels')) : $count=0; while (have_rows('panels')) : the_row(); ?>
                    <div id="counter<?php echo $count ?>" class="panel" style="background-color: <?php the_sub_field('background_color'); ?>">
                        <div class="icon-wrapper">
                            <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        </div>
                        <div class="stat-wrapper">
                            <h2 class="number" data-value="<?php the_sub_field('number'); ?>"></h2><span class="percent">%</span>
                            <p class="title"><?php the_sub_field('title'); ?></p>
                        </div>
                    </div>
            <?php $count++; endwhile;
            else : endif; ?>
        </div>
    </div>
</section>
