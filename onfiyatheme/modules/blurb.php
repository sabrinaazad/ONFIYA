<div class="section section--blurb align--center">
    <div class="section-wrapper">

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
</div>