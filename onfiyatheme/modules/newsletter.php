<section class="section section--newsletter full-width">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="left col">
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
                </div>
                <div class="form">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]') ?>
                </div>
            </div>
            <div class="right col">
                <?php $image = get_sub_field('image');
                if (($image)) : ?>
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>