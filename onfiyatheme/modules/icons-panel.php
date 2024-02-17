<section class="section section--icons-panel full-width" style="background-color: <?php echo the_sub_field('background_color') ?>;">
    <div class="section-wrapper">
        <div class="content-wrapper align--center">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <span class="subheading"><?php echo $subheading; ?></span>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>
        </div>
        <?php if (have_rows('icons_panel')) : ?>

            <div class="icons-panel">

                <?php while (have_rows('icons_panel')) : the_row(); ?>
                    <?php 
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                    ?>

                    <div class="panel">
                        <div class="icon">
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                        </div>
                        <div class="title uppercase"><? echo $title ?></div>
                    </div>

                <?php endwhile; ?>

            </div>

        <?php else : endif; ?>

    </div>
</section>