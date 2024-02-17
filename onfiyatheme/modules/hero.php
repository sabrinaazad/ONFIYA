<section class="section section--hero full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
	<div class="section-wrapper">
        <div class="content-wrapper">
            
            <?php $subheading = get_sub_field('subheading');
            if ($subheading) : ?>
                <div class="subheading"><?php echo $subheading; ?></div>
            <?php endif; ?>
            
            <?php $heading = get_sub_field('heading');
            if ($heading) : ?>
                <h1 class="heading large"><?php echo $heading; ?></h1>
            <?php endif; ?>
            
            <?php $blurb = get_sub_field('blurb');
            if ($blurb) : ?>
                <?php echo $blurb; ?>
            <?php endif; ?>

            <?php $button = get_sub_field('button');
            if ($button) :
                $link_url = $button['url'];
                $link_title = $button['title'];
                $link_target = $button['target'] ? $button['target'] : '_self';
            ?>
            <div class="button-wrapper">
                <a class="btn btn-primary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
            </div>
            <?php endif; ?>
          
        </div>
    </div>
</section>