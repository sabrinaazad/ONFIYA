<footer class="footer full-width" id="footer">
    <section class="section section--footer">
        <div class="utility-container">
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-1',
                    'container' => '',
                    'items_wrap' => '
                                    <ul class="footer-nav footer-nav-1">
                                        %3$s
                                    </ul>
                                    ',
                    'menu_id' => ''
                ));
                ?>
            </div>
            <div class="logo-container">
                <a href="/"><img src="/wp-content/themes/onfiyatheme/assets/onfiya-logo.png"  alt="Logo" class="logo"></a>
            </div>
            <div class="menu-container">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-nav-2',
                    'container' => '',
                    'items_wrap' => '
                                    <ul class="footer-nav footer-nav-2">
                                        %3$s
                                    </ul>
                                    ',
                    'menu_id' => ''
                ));
                ?>
            </div>
        </div>
        <div class="info-container">
            <div class="icon-wrapper">
                <a href="<?php the_field('ig', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-ig-orange.png" alt="instagram" /></a>
                <a href="<?php the_field('fb', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-fbook-orange.png" alt="facebook" /></a>
                <a href="<?php the_field('tw', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-twit-orange.png" alt="twitter" /></a>
                <a href="<?php the_field('yt', 'option'); ?>" target="_blank"><img src="/wp-content/themes/onfiyatheme/assets/icon-ytube-orange.png" alt="youtube" /></a>
            </div>
            <div class="info-block">
                <p>&copy; 2022 ONFIYA Agency. All rights reserved.
                    <br>Website Design & Development <a
                        href="https://www.cardinaldigitalmarketing.com/">Cardinal Digital Marketing</a>
                </p>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
<?php the_field('insert_in_footer', 'option'); ?>
</html>