<section class="section section--featured-slider full-width">
    <div class="section-wrapper">
        <? if (have_rows('slider')) : ?>
            <div class="featured-slider">
                <? while (have_rows('slider')) : the_row(); ?>

                    <div class="slide">
                        <div class="two-col">

                            <? if (have_rows('left_column')) : ?>
                                <? while (have_rows('left_column')) : the_row(); ?>

                                    <div class="first col">
                                        <? if (get_sub_field('subheading')) : ?><div class="subheading"><? the_sub_field('subheading'); ?></div><? endif; ?>
                                        <? if (get_sub_field('heading')) : ?><h2 class="heading"><? the_sub_field('heading'); ?></h2><? endif; ?>
                                        <? if (get_sub_field('blurb')) : ?><div class="blurb"><? the_sub_field('blurb'); ?></div><? endif; ?>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                            <? if (have_rows('right_column')) : ?>

                                <? while (have_rows('right_column')) : the_row(); ?>

                                    <div class="second col">
                                        <?php if (get_sub_field('list_or_image') == 'List') { ?>
                                            <? if (have_rows('list')) : ?>
                                                <ul class="list">
                                                    <? while (have_rows('list')) : the_row(); ?>
                                                        <li>
                                                            <? if (get_sub_field('icon')) : ?>
                                                                <div class="icon">
                                                                    <img src="<? the_sub_field('icon'); ?>" alt="icon" />
                                                                </div>
                                                            <? endif; ?>

                                                            <? if (get_sub_field('text')) : ?>
                                                                <div class="text">
                                                                    <? the_sub_field('text'); ?>
                                                                </div>
                                                            <? endif; ?>
                                                        </li>
                                                    <? endwhile; ?>
                                                </ul>
                                            <? endif; ?>
                                        <?php } elseif (get_sub_field('list_or_image') == 'Image') { ?>
                                            <?php $image = get_sub_field('image');
                                            if (($image)) : ?>
                                                <div class="image-wrapper">
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </div>
                                            <?php endif; ?>
                                        <?php } ?>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                <? endwhile; ?>
            </div>
        <? else : endif; ?>
    </div>
</section>