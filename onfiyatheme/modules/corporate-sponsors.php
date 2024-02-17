<?php

if ( get_sub_field("question") == "Peach" ) {
    $peach = "peach";
    $gold = "";
    $hotpink = "";
} 
if ( get_sub_field("question") == "Gold") {
    $gold = "gold";
    $peach = "";
    $hotpink = "";
}
if ( get_sub_field("question") == "Hotpink" ) {
    $hotpink = "hotpink";
    $gold = "";
    $peach = "";
} 

?>
<section class="section section--corporate-sponsors">
    <div class="section-wrapper">

        <?php $heading = get_sub_field('sponsor_level');
        if ($heading) : ?>
            <div class="sponsor-level <?php echo $peach; ?> <?php echo $gold; ?> <?php echo $hotpink; ?>">
                <h3 class="heading"><?php echo $heading; ?></h3>
            </div>
        <?php endif; ?>

        <div class="content-wrapper">

            <?php if (have_rows('companies')) : ?>

                <?php while (have_rows('companies')) : the_row(); ?>
                    <div class="company">

                        <?php $image = get_sub_field('logo');
                        if (($image)) : ?>
                            <div class="logo-wrapper">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                        <?php endif; ?>

                        <div class="details-wrapper">
                            <?php $title = get_sub_field('title');
                            if ($title) : ?>
                                <h3 class="heading"><?php echo $title; ?></h3>
                            <?php endif; ?>

                            <?php $subheading = get_sub_field('subheading');
                            if ($subheading) : ?>
                                <div class="subheading"><?php echo $subheading; ?></div>
                            <?php endif; ?>

                            <?php $blurb = get_sub_field('blurb');
                            if ($blurb) : ?>
                                <?php echo $blurb; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </div>
</section>