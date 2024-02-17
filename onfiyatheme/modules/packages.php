<section class="section section--packages full-width">
    <div class="section-wrapper">
        <div class="heading-wrapper">

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

        </div>
        <div class="package-slider">
            <?php if (have_rows('packages')) : while (have_rows('packages')) : the_row(); ?>

                    <div class="package">
                        <h4 class="title"><?php the_sub_field('title'); ?></h4>
                        <p class="price"><?php the_sub_field('price'); ?></p>
                        <?php the_sub_field('list'); ?>
                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self'; ?>
                            <a class="btn btn-primary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                        <?php endif; ?>
                    </div>

            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</section>