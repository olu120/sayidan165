<?php

/*
Widget Name: Sayidan Contacts Widget
Description: List Limited Product Offers With Countdown Timers
Author: Kenzap
Author URI: http://kenzap.com
*/

if( class_exists( 'SiteOrigin_Widget' ) ) : 

class sayidan_contact_widget extends SiteOrigin_Widget {

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'sayidan_contact_widget',

            // The name of the widget for display purposes.
            esc_html__('Sayidan Contacts', 'sayidan'),

            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => esc_html__('Display contacts block with map and form', 'sayidan'),
                'panels_groups' => array('sayidan'),
                'help'        => 'http://sayidan_docs.kenzap.com',
            ),

            //The $control_options array, which is passed through to WP_Widget
            array(
            ),

            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'title' => array(
                    'type' => 'text',
                    'label' => esc_html__('Contacts Title', 'sayidan'),
                    'default' => ''
                ),
                'title1' => array(
                    'type' => 'text',
                    'label' => esc_html__('Subtitle left', 'sayidan'),
                    'default' => ''
                ),
                'title2' => array(
                    'type' => 'text',
                    'label' => esc_html__('Subtitle right', 'sayidan'),
                    'default' => ''
                ),
                'text' => array(
                    'type' => 'textarea',
                    'label' => esc_html__('Some text', 'sayidan'),
                    'default' => ''
                ),
                'latitude' => array(
                    'type' => 'text',
                    'label' => esc_html__('Map latitude', 'sayidan'),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => ''
                ),
                'longitude' => array(
                    'type' => 'text',
                    'label' => esc_html__('Map longitude', 'sayidan'),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => ''
                ),  
                'zoom' => array(
                    'type' => 'slider',
                    'label' => esc_html__('Map zoom level', 'sayidan'),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => 15,
                    'min' => 0,
                    'max' => 20,
                    'integer' => true,
                ), 
                'hue' => array(
                    'type' => 'color',
                    'label' => esc_html__('Map hue/color', 'sayidan'),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => '#ccc'
                ), 
                'saturation' => array(
                    'type' => 'slider',
                    'default' => -80,
                    'min' => -100,
                    'max' => 100,
                    'integer' => true,
                    'label' => esc_html__('Map saturation/brightness level', 'sayidan'),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => '-80'
                ), 
                'type' => array(
                    'type' => 'radio',
                    'label' => esc_html__( 'Map pointer type', 'sayidan' ),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => 'simple',
                    'options' => array(
                        'balloon' => esc_html__( 'Balloon', 'sayidan' ),
                        'pointer' => esc_html__( 'Pointer', 'sayidan' ),   
                    )
                ),
                'balloon' => array(
                    'type' => 'text',
                    'label' => esc_html__('Map balloon text', 'sayidan'),
                    'description' => esc_html__('Important! You have to clear browsing cache after making changes here', 'sayidan'),
                    'default' => ''
                ),
                'icon_row1' => array(
                    'type' => 'text',
                    'label' => esc_html__('Icon Row One', 'sayidan'),
                    'default' => 'map-icon.png'
                ),
                'icon_row2' => array(
                    'type' => 'text',
                    'label' => esc_html__('Icon Row Two', 'sayidan'),
                    'default' => 'phone-icon.png'
                ),
                'form_id' => array(
                    'type' => 'text',
                    'label' => esc_html__('Contact form ID', 'sayidan'),
                    'default' => ''
                ),
                'email' => array(
                    'type' => 'text',
                    'label' => esc_html__('Email address', 'sayidan'),
                    'default' => ''
                ),
                'phone' => array(
                    'type' => 'text',
                    'label' => esc_html__('Phone number to call', 'sayidan'),
                    'description' => esc_html__('Should be a well formatted phone number with country code.', 'sayidan'),
                    'default' => ''
                ),
                'phone_nice' => array(
                    'type' => 'text',
                    'label' => esc_html__('Phone number to display', 'sayidan'),
                    'default' => ''
                ),
                'address' => array(
                    'type' => 'text',
                    'label' => esc_html__('Address text', 'sayidan'),
                    'default' => ''
                ),   
                'btn_text1' => array(
                    'type' => 'text',
                    'label' => esc_html__('Button text 1', 'sayidan'),
                    'default' => ''
                ),                 
                'btn_link1' => array(
                    'type' => 'text',
                    'label' => esc_html__('Button link 1', 'sayidan'),
                    'default' => '#'
                ),     
                'btn_text2' => array(
                    'type' => 'text',
                    'label' => esc_html__('Button text 2', 'sayidan'),
                    'default' => ''
                ),   
                'btn_link2' => array(
                    'type' => 'text',
                    'label' => esc_html__('Button link 2', 'sayidan'),
                    'default' => '#'
                ),                                  
            ),

            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance) {
        return 'sayidan-contact';
    }

    function get_template_dir($instance) {
        return 'widgets';
    }
}

siteorigin_widget_register('sayidan_contact_widget', __FILE__, 'sayidan_contact_widget');

endif;

function sayidan_shortcode_contact( $atts, $content=null ) {

    shortcode_atts( array(
        "title" => '',
        "address_part1" => '',
        "address_part2" => '',
        "text" => '',
        "icon_row1" => '',
        "icon_row2" => '',
        "form_id" => '',
        "email" => '',
        "phone" => '',
        "phone_nice" => '',
        "latitude" => '',
        "longitude" => '',
        "balloon" => '',
        "type"  => 'balloon',
        "zoom"  => '15',
        "hue"  => '-80',
        "saturation"  => '#ccc',
    ), $atts );

    ob_start();

    $icon_row1 = '';
    if( '' != $atts['icon_row1'] ){
        $icon_row1 = get_template_directory_uri() .'/images/'.$atts['icon_row1'];
    }

    $icon_row2 = '';
    if( '' != $atts['icon_row2'] ){
        $icon_row2 = get_template_directory_uri() .'/images/'.$atts['icon_row2'];
    }

    $sayidan_enable_map = true;
    ?> 

    <div class="main-container">
        <div class="page-main contact-us">
            <div class="map-contact">
                <div id="map" data-latitude="<?php echo esc_attr( $atts['latitude'] ); ?>" data-longitude="<?php echo esc_attr( $atts['longitude'] ); ?>" data-balloon="<?php echo esc_attr( $atts['balloon'] ); ?>" data-pointer="<?php echo esc_attr( $atts['type'] ); ?>" data-saturation="<?php echo esc_attr( $atts['saturation'] ); ?>" data-hue="<?php echo esc_attr( $atts['hue'] ); ?>" data-zoom="<?php echo esc_attr( $atts['zoom'] ); ?>"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="map-info">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="title-visit">
                                        <h3 class="font-montserrat-light font25 text-capitalize"> <?php echo esc_attr( $atts['title1'] ); ?> </h3>
                                    </div>
                                    <div class="content-visit">
                                        <p class="font-montserrat-light font17"> <?php echo esc_attr( $atts['address'] ); ?> </p>
                                        <a href="<?php echo esc_url( $atts['btn_link1'] ); ?>" class="link-contact link-visit font-montserrat-light font17 text-capitalize"> <?php echo esc_attr( $atts['btn_text1'] ); ?></a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="title-touch">
                                        <h3 class="font-montserrat-light font25 text-capitalize"> <?php echo esc_attr( $atts['title2'] ); ?> </h3>
                                    </div>
                                    <div class="content-touch">
                                        <div class="content-telp">
                                            <span class="font-montserrat-light font17 text-uppercase"><?php esc_html_e( 'tel', 'sayidan' ); ?></span>
                                            <a href="tel:<?php echo esc_attr( $atts['phone'] ); ?>" class="font-montserrat-light font17"><?php echo esc_attr( $atts['phone_nice'] ); ?></a>
                                        </div>
                                        <div class="content-mail">
                                            <span class="font-montserrat-light font17 text-uppercase"><?php esc_html_e( 'email', 'sayidan' ); ?></span>
                                            <a href="mailto:<?php echo esc_attr( $atts['email'] ); ?>" class="font-montserrat-light font17"><?php echo esc_attr( $atts['email'] ); ?> </a>
                                        </div>
                                        <div class="content-address">
                                            <a href="<?php echo esc_url( $atts['btn_link2'] ); ?>" class="link-contact link-touch font-montserrat-light font17"> <?php echo esc_attr( $atts['btn_text2'] ); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <?php echo do_shortcode( '[contact-form-7 id="'. esc_attr( $atts['form_id'] ) .'" title="Contact us form"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="separates"></div>
    </div>

    <?php
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}

add_filter('autoptimize_filter_noptimize','sayidan_noptimize',10,0);
function sayidan_noptimize() {
    if (strpos(sayidan_clean_url(),'contact')!==false) {
        return true;
    } else {
        return false;
    }
}