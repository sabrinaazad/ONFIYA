<?php
if (get_sub_field("black_quotes")) {
    $blackquotes = "black-quotes";
} else {
    $blackquotes = "";
}
?>
<section class="section section--testimonials full-width">
    <div class="section-wrapper">
        <? if (get_sub_field('subheading')) : ?><div class="subheading"><? the_sub_field('subheading'); ?></div><? endif; ?>
        <? if (get_sub_field('heading')) : ?><h2 class="heading"><? the_sub_field('heading'); ?></h2><? endif; ?>
        <div class="two-col">
            <div class="col first">
            <?php $image = get_sub_field('featured_image');
                if (($image)) : ?>
                    <div class="featured-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
            <?php endif; ?>

            </div>
            <div class="col second">
                <? if (have_rows('slider')) : ?>
                    <div class="testimonials-slider <?php echo $blackquotes ?>">
                        <? while (have_rows('slider')) : the_row(); ?>

                            <div class="slide" style="background-color: <?php echo the_sub_field('slider_background') ?>;">
                                <? if (get_sub_field('blurb')) : ?><div class="blurb" style="color: <?php echo the_sub_field('blurb_color') ?>;"><? the_sub_field('blurb'); ?></div><? endif; ?>
                                <div class="bio">
                                    <? if (get_sub_field('name')) : ?><div class="name" style="color: <?php echo the_sub_field('name_color') ?>;"><? the_sub_field('name'); ?></div><? endif; ?>
                                    <? if (get_sub_field('title')) : ?><div class="title" style="color: <?php echo the_sub_field('title_color') ?>;"><? the_sub_field('title'); ?></div><? endif; ?>
                                </div>
                            </div>

                        <? endwhile; ?>
                    </div>
                <? else : endif; ?>
            </div>
        </div>
    </div>
</section>