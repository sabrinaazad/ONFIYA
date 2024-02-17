<section class="section section--hero-banner full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
	<div class="section-wrapper">
        <div class="content-wrapper">

            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h1 class="heading large"><?php echo $heading; ?></h1>
            <?php endif; ?>
          
        </div>
    </div>
</section>
