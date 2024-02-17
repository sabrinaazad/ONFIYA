<section class="section section--events full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
    <div class="section-wrapper">
        <div class="content-wrapper">
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading"><?php echo $subheading; ?></div>
            <?php endif; ?>

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>

            <?php $button = get_sub_field('button');
            if ($button) :
                $button_url = $button['url'];
                $button_title = $button['title'];
                $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
                <div class="button-wrapper">
                    <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>