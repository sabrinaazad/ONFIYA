<?php

if ( get_sub_field("design_question") == "Yes" ) {
    $alt = "alt";
} else {
    $alt = "";
}
?>
<section class="section section--sponsors full-width <?php echo $alt; ?>">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <? if (get_sub_field('subheading')) : ?><div class="subheading"><? the_sub_field('subheading'); ?></div><? endif; ?>
            <? if (get_sub_field('heading')) : ?><h2 class="heading"><? the_sub_field('heading'); ?></h2><? endif; ?>
                <? if (get_sub_field('blurb')) : ?><p><?php the_sub_field('blurb'); ?></p><? endif; ?>
        </div>
        <?php if (have_rows('logos')) : ?>
            <div class="logos-slider">
                <?php while (have_rows('logos')) : the_row(); ?>
                    <div class="slide"> <img src="<?php the_sub_field('logo'); ?>"></div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>