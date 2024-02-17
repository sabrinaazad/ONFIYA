<div class="topbar desktop-only">
    <div class="content">
        <div class="left">
            <div class="phone-wrapper">
                <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
            </div>
            <div class="icon-wrapper">
                <a href="<?php the_field('ig', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-ig-white.png" alt="instagram" /></a>
                <a href="<?php the_field('fb', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-fbook-white.png" alt="facebook" /></a>
                <a href="<?php the_field('tw', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-twit-white.png" alt="twitter" /></a>
                <a href="<?php the_field('yt', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-ytube-white.png" alt="youtube" /></a>
            </div>
        </div>
        <div class="right">
            <div class="link-wrapper">
                
                <?php $link1 = get_field('link1', 'option');
                    if( $link1 ): 
                    $link1_url = $link1['url'];
                    $link1_title = $link1['title'];
                    $link1_target = $link1['target'] ? $link1['target'] : '_self';
                ?>
                    <a class="link" href="<?php echo $link1_url ?>" target="<?php echo $link1_target ?>"><?php echo $link1_title ?></a>     
                <?php endif; ?>

                <?php $link2 = get_field('link2', 'option');
                    if( $link2 ): 
                    $link2_url = $link2['url'];
                    $link2_title = $link2['title'];
                    $link2_target = $link2['target'] ? $link2['target'] : '_self';
                ?>
                    <a class="link" href="<?php echo $link2_url ?>" target="<?php echo $link2_target ?>"><?php echo $link2_title ?></a>      
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<nav class="main-nav full-width" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/onfiyatheme/assets/onfiya-logo.png" alt="Logo" class="logo">
                </a>
            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>',
                    'menu_id' => 'primaryNav'
                ));
                ?>

            </div>

        </div>
    </div>
</nav>
