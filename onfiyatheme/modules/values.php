<section class="section section--values full-width no-padded-sides">
    <div class="two-col">
        <?php if (have_rows('left')) : while (have_rows('left')) : the_row(); ?>
                <div class="col">
                    <div class="section-wrapper">

                        <?php $subheading = get_sub_field('subheading');
                        if ($subheading) : ?>
                            <div class="subheading"><?php echo $subheading; ?></div>
                        <?php endif; ?>

                        <?php $heading = get_sub_field('heading');
                        if ($heading) : ?>
                            <h2 class="heading"><?php echo $heading; ?></h2>
                        <?php endif; ?>

                        <? if (have_rows('list')) : ?>
                            <ul class="list">
                                <? while (have_rows('list')) : the_row(); ?>
                                    <li>
                                        <? if (get_sub_field('icon')) : ?>
                                            <div class="icon">
                                                <img src="<? the_sub_field('icon'); ?>" alt="icon" />
                                            </div>
                                        <? endif; ?>

                                        <? if (get_sub_field('title')) : ?>
                                            <div class="title">
                                                <? the_sub_field('title'); ?>
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

                    </div>
                </div>
        <?php endwhile;
        else :  endif; ?>

        <?php if (have_rows('right')) : while (have_rows('right')) : the_row(); ?>
                <div class="col">
                    <?php $image = get_sub_field('image');
                    if (($image)) : ?>
                        <div class="image-wrapper">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endif; ?>

                </div>
        <?php endwhile;
        else :  endif; ?>

    </div>
</section>