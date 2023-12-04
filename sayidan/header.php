<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sayidan
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri() . "/favicon.ico"; ?>" type="image/ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php $imgurl = (get_theme_mod( 'sayidan_logo', '' ));
if(empty($imgurl) || '' == $imgurl){ $imgurl = get_template_directory_uri() . '/images/logo.svg';} 
wp_head(); ?>
</head>
<body <?php body_class(); ?> >

    <div id="page" class="site main-wrapper">
        
    <?php if ( class_exists( 'Kenzap_Plugin' ) ){ Kenzap_Plugin::get_demo_body(); } ?>

    <!--Begin header wrapper  header-position-->
    <div class="header-wrapper">
        <header id="header" class="container-header <?php if ( get_theme_mod( 'sayidan_logo_position' ) == 'left' ) { echo 'type2'; }else{ echo 'type1'; } ?>">
            <div class="top-nav">
                <?php if ( get_theme_mod( 'sayidan_logo_position' ) == 'left' ) : ?>
                <div class="container">
                    <div class="row">
                        <div class="top-right col-md-9 col-sm-12 col-xs-12 pull-right">
                            <ul class="list-inline list-inline-top">
                                <?php if ( get_theme_mod( 'sayidan_email' ) ) : ?>
                                <li class="hidden-xs">
                                    <a href="mailto:<?php echo esc_attr( get_theme_mod( 'sayidan_email' ) ); ?>">
                                        <span class="icon mail-icon"></span>
                                        <span class="text"><?php echo esc_html( get_theme_mod( 'sayidan_email' ) ); ?></span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'sayidan_phone' ) ) : ?>
                                <li class="hidden-xs">
                                    <a href="tel:<?php echo preg_replace("/[^+0-9]/", "", esc_attr( get_theme_mod( 'sayidan_phone' ) ) ); ?>">
                                        <span class="icon phone-icon"></span>
                                        <span class="text"><?php echo esc_html( get_theme_mod( 'sayidan_phone' ) ); ?></span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'social_header' ) ) : ?>
                                <li class="hidden-xs">
                                    <ul class="list-inline text-center">
                                        <?php if ( get_theme_mod( 'facebook' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'facebook' ) ). '"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'twitter' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'twitter' ) ). '"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'youtube' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'youtube' ) ). '"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'linkedin' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'linkedin' ) ). '"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'pinterest' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'pinterest' ) ). '"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'google' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'google' ) ). '"><i class="fa fa-google" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'tumblr' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'tumblr' ) ). '"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'instagram' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'instagram' ) ). '"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'vimeo' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'vimeo' ) ). '"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'vk' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'vk' ) ). '"><i class="fa fa-vk" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'disqus' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'disqus' ) ). '"><i class="fa fa-disqus" aria-hidden="true"></i></a></li>'; } ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                <li class="top-search">
                                    <form class="navbar-form search no-margin no-padding" action="/">
                                        <input type="text" name="s" class="form-control input-search" placeholder="<?php echo esc_attr__( 'search...', 'sayidan' ); ?>" autocomplete="off">
                                        <button type="submit" class="lnr lnr-magnifier"></button>
                                    </form>
                                </li>
                                <?php if( !is_user_logged_in() ) : ?>
                                <li class="login"> 
                                    <?php $sayidan_login_link = get_theme_mod( 'sayidan_login_link', '/login/' );
                                    if ( empty($sayidan_login_link) || $sayidan_login_link == '' ) {

                                        $sayidan_login_link = wp_login_url( get_permalink() );
                                    } ?>
                                    <a href="<?php echo esc_url( $sayidan_login_link ); ?>" title="<?php esc_attr_e( 'Login', 'sayidan' ); ?>"><?php esc_html_e( 'Login', 'sayidan' ); ?></a>
                                </li>
                                <?php else: ?>
                                    <li class="login"> 
                                        <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php esc_attr_e( 'Logout', 'sayidan' ); ?>"><?php esc_html_e( 'Logout', 'sayidan' ); ?></a>
                                    </li>
                                    <?php $sayidan_dash_link = get_theme_mod( 'sayidan_dash_link', '/profile/' ); 
                                    if ( !empty($sayidan_dash_link) && $sayidan_dash_link != '' ) : ?>
                                        <li class="login"> 
                                            <a href="<?php echo esc_url( get_theme_mod( 'sayidan_dash_link', '/profile/' ) ); ?>"><?php esc_html_e( 'Profile', 'sayidan' ); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php else : ?>
                <div class="container">
                    <div class="row">
                        <div class="top-left col-sm-6 hidden-xs">
                            <ul class="list-inline list-inline-top">
                                <?php if ( get_theme_mod( 'sayidan_email' ) ) : ?>
                                <li>
                                    <a href="mailto:<?php echo esc_attr( get_theme_mod( 'sayidan_email' ) ); ?>">
                                        <span class="icon mail-icon"></span>
                                        <span class="text"><?php echo esc_attr( get_theme_mod( 'sayidan_email' ) ); ?></span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'sayidan_phone' ) ) : ?>
                                <li>
                                    <a href="tel:<?php echo preg_replace("/[^+0-9]/","",esc_attr( get_theme_mod( 'sayidan_phone' ) ) ); ?>">
                                        <span class="icon phone-icon"></span>
                                        <span class="text"><?php echo esc_attr( get_theme_mod( 'sayidan_phone' ) ); ?></span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'social_header' ) ) : ?>
                                <li class="hidden-xs">
                                    <ul class="list-inline text-center">
                                        <?php if ( get_theme_mod( 'facebook' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'facebook' ) ). '"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'twitter' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'twitter' ) ). '"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'youtube' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'youtube' ) ). '"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'linkedin' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'linkedin' ) ). '"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'pinterest' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'pinterest' ) ). '"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'google' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'google' ) ). '"><i class="fa fa-google" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'tumblr' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'tumblr' ) ). '"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'instagram' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'instagram' ) ). '"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'vimeo' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'vimeo' ) ). '"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'vk' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'vk' ) ). '"><i class="fa fa-vk" aria-hidden="true"></i></a></li>'; } ?>
                                        <?php if ( get_theme_mod( 'disqus' ) ){ echo '<li><a href="' .esc_url( get_theme_mod( 'disqus' ) ). '"><i class="fa fa-disqus" aria-hidden="true"></i></a></li>'; } ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="top-right col-sm-6 col-xs-12">
                            <ul class="list-inline">
                                <li class="top-search">
                                    <form class="navbar-form search no-margin no-padding" action="/">
                                        <input type="text" name="s" class="form-control input-search" placeholder="<?php echo esc_attr__( 'search...', 'sayidan' ); ?>" autocomplete="off">
                                        <button type="submit" class="lnr lnr-magnifier"></button>
                                    </form>
                                </li>
                                <?php if( !is_user_logged_in() ) : ?>
                                <li class="login"> 
                                    <?php $sayidan_login_link = get_theme_mod( 'sayidan_login_link', '/login/' );
                                    if ( empty($sayidan_login_link) || $sayidan_login_link == '' ) {

                                        $sayidan_login_link = wp_login_url( get_permalink() );
                                    } ?>
                                    <a href="<?php echo esc_url( $sayidan_login_link ); ?>" title="<?php esc_attr_e( 'Login', 'sayidan' ); ?>"><?php esc_html_e( 'Login', 'sayidan' ); ?></a>
                                </li>
                                <?php else: ?>
                                    <li class="login"> 
                                        <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php esc_attr_e( 'Logout', 'sayidan' ); ?>"><?php esc_html_e( 'Logout', 'sayidan' ); ?></a>
                                    </li>
                                    <?php $sayidan_dash_link = get_theme_mod( 'sayidan_dash_link', '/profile/' ); 
                                    if ( !empty($sayidan_dash_link) && $sayidan_dash_link != '' ) : ?>
                                        <li class="login"> 
                                            <a href="<?php echo esc_url( get_theme_mod( 'sayidan_dash_link', '/profile/' ) ); ?>"><?php esc_html_e( 'Profile', 'sayidan' ); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="header-middle">
                <div class="container">
                    <?php 

                    $imgurl = (get_theme_mod( 'sayidan_logo', '' ));
                    if(empty($imgurl) || '' == $imgurl){

                        $imgurl = get_template_directory_uri() . '/images/logo.png';
                    }

                    $imgurl_mobile = (get_theme_mod( 'sayidan_logo_mobile', '' ));
                    if(empty($imgurl_mobile) || '' == $imgurl_mobile){

                        $imgurl_mobile = get_template_directory_uri() . '/images/logo-small.png';
                    }
                    ?>
                    <div class="logo hidden-sm hidden-xs">
                        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( $imgurl ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                    </div>
                   
                    <div class="area-desktop-content menu">
                        <nav>
                            <ul class="nav navbar-nav sf-menu">
                                <?php
                                    if ( has_nav_menu( 'primary' ) ) {
                                        wp_nav_menu(array(
                                          'theme_location'  => 'primary',
                                          'container'       => false,
                                          'items_wrap'      => '%3$s',
                                          'depth'           => 2,
                                          ));
                                    }
                                ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="area-mobile-content visible-sm visible-xs">
                        <div class="header-container">
                            <div class="row">
                                <div class="logo-mobile ol-md-8">
                                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( $imgurl_mobile ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                                </div>

                                <div class="col-md-4">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-navigation">
                            <div class="container">
                              <nav id="site-navigation-mobile">
                                <div id="navbar-mobile" class="navbar-collapse collapse">

                                  <?php if ( has_nav_menu( 'primary_mobile' ) ) {
                                      wp_nav_menu(array(
                                            'theme_location'  => 'primary_mobile',
                                            'menu_class'      => 'nav navbar-mob',
                                            'container'       => 'div',
                                            'container_id'    => 'mobile-menu',
                                            'container'       => false,
                                            'depth'           => 2,
                                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s',
                                            )); ?>
                                      </ul>
                                  <?php } ?>

                                </div>
                              </nav>
                            </div>
                        </div>

                        <div class="mobile-menu ">

                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!--End header wrapper-->
