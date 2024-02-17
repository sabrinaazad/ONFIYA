<section class="section section--three-panels full-width" style="background-color: <?php the_sub_field('background_color'); ?>">
    <div class="section-wrapper">
        <div class="panels">
            <?php if (have_rows('panels')) : while (have_rows('panels')) : the_row(); ?>
                    <div class="panel" style="background-color: <?php the_sub_field('background_color'); ?>">
                        <img class="icon" src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <div class="title" style="color: <?php the_sub_field('title_color'); ?>"><?php the_sub_field('title'); ?></div>
                        <p class="blurb" style="color: <?php the_sub_field('blurb_color'); ?>"><?php the_sub_field('blurb'); ?></p>
                        <?php $button = get_sub_field('button');
                        if ($button) :
                            $button_url = $button['url'];
                            $button_title = $button['title'];
                            $button_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                            <div class="button-wrapper">
                                <a class="btn btn-secondary" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"><?php echo esc_html($button_title); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
            <?php endwhile;
            else : endif; ?>
        </div>
    </div>
</section>