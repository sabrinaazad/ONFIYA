<section class="section section--contact">
    <div class="two-col">

        <div class="col first">
            <div class="location-details">
                <a class="phone" href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a>
                <div class="hours">
                    <div class="title">Hours of Operations</div>
                    <div class="text"><?php the_sub_field('hours'); ?></div>
                </div>
            </div>
            <div class="contact-details">
                <h3>Contact our Team</h3>
                <?php if (have_rows('team_members')) : ?>
                <div class="team">
                    <?php while (have_rows('team_members')) : the_row(); ?>
                        <?php 
                            
                            $name = get_sub_field('name');
                            $title = get_sub_field('title');
                            $phone = get_sub_field('phone');
                            $email = get_sub_field('email');
                        ?>
                        <div class="team-member">
                            <div class="name"><? echo $name ?></div>
                            <div class="title"><? echo $title ?></div>
                            <a class="phone" href="tel:<? echo $phone ?>"><? echo $phone ?></a>
                            <a class="email" href="mailto:<? echo $email ?>"><? echo $email ?></a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php else : endif; ?>
            </div>
        </div>

        <div class="col second"> 
            <div class="subheading desktop-only"><?php the_sub_field('subheading'); ?></div>
            <h3 class="heading desktop-only"><?php the_sub_field('heading'); ?></h3>
            <div class="form">
                <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49"]') ?>
            </div> 
        </div>
    </div>
</section>