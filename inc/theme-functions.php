<?php

/********************************************************
 * Header
 ********************************************************/
/**
 * Header My Account
 */
function header_account(){
    if (get_theme_mod('top_header_account_enable', '1')) {
        $login_register = get_permalink(get_theme_mod('header_login_register'));
        $header_myaccount = get_permalink(get_theme_mod('header_myaccount'));
        ?><li class="dropdown"><a data-toggle="dropdown" href="#" aria-expanded="true"><i class="fa fa-user"></i></a><ul class="dropdown-menu list-unstyled user-dropdown"><?php
        if (is_user_logged_in()) {
            echo '<li><a href="' . $header_myaccount . '">' . get_theme_mod('top_header_account', 'Account') . '</a></li><li><a href="' . wp_logout_url() . '">Logout</a></li>';
        } else {
            echo '<li><a href="' . $login_register . '">Login</a></li><li><a href="' . $login_register . '">Register</a></li>';
        }
        ?></li></ul><?php
    }
}
add_action( 'themetim_header_account', 'header_account' );
/********************************************************
 * Footer
 ********************************************************/
/**
 * Footer Newsletter
 */
function footer_newsletter(){
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12 newsletter">
        <h4>Powered by</h4>
        <h1><a href="http://www.eatsitupmarketing.com/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/eats-up.png';?>" class="img-responsive" alt=""></a></h1>
    </div>
    <?php
}
add_action( 'themetim_footer_newsletter', 'footer_newsletter' );

/**
 * Middle Footer Description
 */
function middle_footer_description(){
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <h4><?php echo get_theme_mod('footer_about_us','Location'); ?></h4>
        <p class="margin-top-20"><?php echo get_theme_mod('middle_footer_text','723 S. Alamo <br/>San Antonio, Tx 78205'); ?></p>
        <h4>Contact</h4>
        <p>210-223-1285</p>
        <h4>Hours:</h4>
        <p>Closed Mondays<br/>Tuesday - Saturday : 3 PM - 2 AM<br/>Sunday : 12 PM - 12 AM</p>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_description', 'middle_footer_description' );

/**
 * Middle Footer Nav 1
 */
function middle_footer_nav_1(){
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <h4><?php echo get_theme_mod('middle_footer_nav_heading_2','Information'); ?></h4>
        <?php
        if ( has_nav_menu( 'footer-1' ) ) :
            wp_nav_menu( array( 'theme_location' => 'footer-1', 'menu_class' => 'list-unstyled text-capitalize', 'menu_id' => 'primary-menu','container' => '' ) );
        else: echo '<p class="text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Footer Nav 2</a> </p>';
        endif;
        ?>
    </div>
    <?php
}
add_action( 'themetim_middle_footer_nav_1', 'middle_footer_nav_1' );

/**
 * Bottom Footer Copyright
 */
function bottom_footer_copyright(){
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12 site-info text-center">
        <p class="margin-null"><?php echo get_theme_mod('bottom_footer_copyright','© 2016. The content on this website is owned by us and our licensors. Do not copy any content (including images) without our consent.'); ?></p>
    </div>
    <?php
}
add_action( 'themetim_bottom_footer_copyright', 'bottom_footer_copyright' );


/**
 * Social Sharing
 */
function themetim_social_sharing(){
    ?>
    <ul class="list-inline">
        <li class="margin-top-10"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="margin-top-10"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="margin-top-10"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li class="margin-top-10"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="margin-top-10"><a href="https://pinterest.com/pin/create/button/?url=&media=&description=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
    </ul>
    <?php
}