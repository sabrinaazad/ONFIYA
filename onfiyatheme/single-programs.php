<?php

get_header();

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        
        // Case: anchors layout.
        if (get_row_layout() == 'anchors') :
            get_template_part('modules/anchors');
        endif;

        // Case: applications layout.
        if (get_row_layout() == 'applications') :
            get_template_part('modules/applications');
        endif;

        // Case: blurb layout.
        if (get_row_layout() == 'blurb') :
            get_template_part('modules/blurb');
        endif;

        // Case: contact layout.
        if (get_row_layout() == 'contact') :
            get_template_part('modules/contact');
        endif;

        // Case: corporate-sponsors layout.
        if (get_row_layout() == 'corporate_sponsors') :
            get_template_part('modules/corporate-sponsors');
        endif;

        // Case: events layout.
        if (get_row_layout() == 'events') :
            get_template_part('modules/events');
        endif;

        // Case: faqs layout.
        if (get_row_layout() == 'faqs') :
            get_template_part('modules/faqs');
        endif;

        // Case: featured-slider layout.
        if (get_row_layout() == 'featured_slider') :
            get_template_part('modules/featured-slider');
        endif;

        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

        // Case: hero-banner layout.
        if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;

        // Case: icons-panel layout.
        if (get_row_layout() == 'icons_panel') :
            get_template_part('modules/icons-panel');
        endif;

        // Case: newsletter layout.
        if (get_row_layout() == 'newsletter') :
            get_template_part('modules/newsletter');
        endif;

        // Case: packages layout.
        if (get_row_layout() == 'packages') :
            get_template_part('modules/packages');
        endif; 

        // Case: process layout.
         if (get_row_layout() == 'process') :
            get_template_part('modules/process');
        endif; 

        // Case: side-by-side layout.
        if (get_row_layout() == 'side_by_side') :
            get_template_part('modules/side-by-side');
        endif;  

        // Case: side-by-side-alt layout.
        if (get_row_layout() == 'side_by_side_alt') :
            get_template_part('modules/side-by-side-alt');
        endif;   
        
        // Case: side-by-side-two-buttons layout.
        if (get_row_layout() == 'side_by_side_two_buttons') :
            get_template_part('modules/side-by-side-two-buttons');
        endif;   

        // Case: skyline-bottom layout.
        if (get_row_layout() == 'skyline_bottom') :
            get_template_part('modules/skyline-bottom');
        endif;     

        // Case: skyline-top layout.
        if (get_row_layout() == 'skyline_top') :
            get_template_part('modules/skyline-top');
        endif;  

        // Case: sponsors layout.
        if (get_row_layout() == 'sponsors') :
            get_template_part('modules/sponsors');
        endif;

        // Case: statistics layout.
        if (get_row_layout() == 'statistics') :
            get_template_part('modules/statistics');
        endif;  

        // Case: three-panels layout.
        if (get_row_layout() == 'three_panels') :
            get_template_part('modules/three-panels');
        endif;

        // Case: team-members layout.
        if (get_row_layout() == 'team_members') :
            get_template_part('modules/team-members');
        endif;

        // Case: testimonials layout.
        if (get_row_layout() == 'testimonials') :
            get_template_part('modules/testimonials');
        endif;

        // Case: values layout.
        if (get_row_layout() == 'values') :
            get_template_part('modules/values');
        endif;



    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_footer();
