<?php
/**
 * Sayidan Theme Customizer.
 *
 * @package Sayidan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sayidan_customize_register( $wp_customize ) {
    
    //add description
    $wp_customize->add_setting( 'sayidan_desc',
                                array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                ) );
    
    $wp_customize->add_control( 'sayidan_desc', array(
            'label'     => esc_html__( 'Description', 'sayidan' ),
            'section'   => 'title_tagline',
            'priority'  => 10,
            'type'      => 'textarea'
    ) );
    
    //add footnote
    $wp_customize->add_setting( 'sayidan_footnote',
                                array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                ) );
    
    $wp_customize->add_control( 'sayidan_footnote', array(
            'label'     => esc_html__( 'Footer Note', 'sayidan' ),
            'section'   => 'title_tagline',
            'priority'  => 10,
            'type'      => 'textarea'
    ) );
    
    //add social network support
    $wp_customize->add_section( 'sayidan_social_section' , array(
            'title'       => esc_html__( 'Social Networks', 'sayidan' ),
            'priority'    => 21,
            'description' => esc_html__( 'Set up social network links and icons, enter Twitter API keys.', 'sayidan' ),
    ) );

    $wp_customize->add_setting( 'social_header', array(
             'sanitize_callback' => 'sayidan_sanitize_text',
    ) );
    
    $wp_customize->add_control( 'social_header', array(
             'label'     => esc_html__( 'Enable/disable social icons in header', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'checkbox'
    ) );
       

    $wp_customize->add_setting( 'facebook', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'facebook', array(
             'label'     => esc_html__( 'Facebook', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'youtube', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'youtube', array(
             'label'     => esc_html__( 'Youtube', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'twitter', array(
             'label'     => esc_html__( 'Twitter', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'linkedin', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'linkedin', array(
             'label'     => esc_html__( 'LinkedIn', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'pinterest', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'pinterest', array(
             'label'     => esc_html__( 'Pinterest', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'google', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'google', array(
             'label'     => esc_html__( 'Google', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'tumblr', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'tumblr', array(
             'label'     => esc_html__( 'Tumblr', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'instagram', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'instagram', array(
             'label'     => esc_html__( 'Instagram', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'vimeo', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'vimeo', array(
             'label'     => esc_html__( 'Vimeo', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'vk', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'vk', array(
             'label'     => esc_html__( 'Vkontakte', 'sayidan' ),
             'section'   => 'sayidan_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'disqus', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'disqus', array(
           'label'     => esc_html__( 'Disqus', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 10,
           'type'      => 'text'
    ) );

    $wp_customize->add_setting( 'kenzap', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'kenzap', array(
           'label'     => esc_html__( 'Kenzap', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 10,
           'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter_c_key', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'twitter_c_key', array(
            'label'     => esc_html__( 'Twitter Consumer Key:', 'sayidan' ),
            'section'   => 'sayidan_social_section',
            'priority'  => 80,
            'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter_c_secret', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'twitter_c_secret', array(
           'label'     => esc_html__( 'Twitter Consumer Secret:', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 81,
           'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter_a_token', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'twitter_a_token', array(
           'label'     => esc_html__( 'Twitter Access Token:', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 82,
           'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter_a_secret', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'twitter_a_secret', array(
           'label'     => esc_html__( 'Twitter Access Token Secret:', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 83,
           'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter_username',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'twitter_username', array(
           'label'     => esc_html__( 'Twitter Username:', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 10,
           'type'      => 'text'
    ) );
    
    $wp_customize->add_setting( 'twitter_cache', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( 'twitter_cache', array(
           'label'     => esc_html__( 'Tweets Cache Time (hours):', 'sayidan' ),
           'section'   => 'sayidan_social_section',
           'priority'  => 10,
           'type'      => 'number'
    ) );
    

    //add logo support
    $wp_customize->add_section( 'sayidan_logo_section' , array(
            'title'       => esc_html__( 'Logo', 'sayidan' ),
            'priority'    => 20,
            'description' => esc_html__( 'Upload a logo to replace the default site name and description in the header', 'sayidan' ),
    ) );
    
    $wp_customize->add_setting( 'sayidan_logo',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sayidan_logo', array(
            'label'    => esc_html__( 'Logo Desktop', 'sayidan' ),
            'section'  => 'sayidan_logo_section',
            'settings' => 'sayidan_logo',
    ) ) );
    
    //add mobile logo support
    $wp_customize->add_setting(
                               'sayidan_logo_mobile',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )
                               );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sayidan_logo_mobile', array(
            'label'    => esc_html__( 'Logo Mobile', 'sayidan' ),
            'section'  => 'sayidan_logo_section',
            'settings' => 'sayidan_logo_mobile',
    ) ) );
    
    //add footer logo support
    $wp_customize->add_setting( 'sayidan_logo_footer',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     )  );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sayidan_logo_footer', array(
            'label'    => esc_html__( 'Logo Footer', 'sayidan' ),
            'section'  => 'sayidan_logo_section',
            'settings' => 'sayidan_logo_footer',
    ) ) );
    
    //logo position
    $wp_customize->add_setting( 'sayidan_logo_position', array(
                               'sanitize_callback' => 'sayidan_sanitize_text',
    ) );
    
    $wp_customize->add_control( 'sayidan_logo_position', array(
                               'label'     => esc_html__( 'Logo Position', 'sayidan' ),
                               'section'   => 'sayidan_logo_section',
                               'priority'  => 10,
                               'type'      => 'radio',
                               'choices'   => array(
                                        'left'  => 'left',
                                        'center' => 'center',
                                ),
    ) );
    
    //add contacts support
    $wp_customize->add_section( 'sayidan_contacts_section' , array(
            'title'       => esc_html__( 'Contacts', 'sayidan' ),
            'priority'    => 23,
            'description' => esc_html__( 'Set up contact details.', 'sayidan' ),
    ) );
    
    //phone number 1
    $wp_customize->add_setting( 'sayidan_phone',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'sayidan_phone', array(
            'label'     => esc_html__( 'Phone Number 1', 'sayidan' ),
            'section'   => 'sayidan_contacts_section',
            'priority'  => 20,
            'type'      => 'text'
    ) );
    
    //phone number 2
    $wp_customize->add_setting( 'sayidan_phone2',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'sayidan_phone2', array(
           'label'     => esc_html__( 'Phone Number 2', 'sayidan' ),
           'section'   => 'sayidan_contacts_section',
           'priority'  => 21,
           'type'      => 'text'
           ) );
    
    //email
    $wp_customize->add_setting( 'sayidan_email',
                               array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'sayidan_email', array(
           'label'     => esc_html__( 'Email', 'sayidan' ),
           'section'   => 'sayidan_contacts_section',
           'priority'  => 10,
           'type'      => 'text'
    ) );
    
    // add "Content Options" section
    $wp_customize->add_section( 'sayidan_navigation' , array(
            'title'      => esc_html__( 'Navigation', 'sayidan' ),
            'priority'   => 100,
    ) );
    
    // add setting for page comment toggle checkbox
    $wp_customize->add_setting( 'sayidan_page_comment_toggle', array(
            'default' => 1,
            'sanitize_callback' => 'sayidan_sanitize_text',
    ) );
    
    // add control for page comment toggle checkbox
    $wp_customize->add_control( 'sayidan_page_comment_toggle', array(
            'label'     => esc_html__( 'Show comments on pages?', 'sayidan' ),
            'section'   => 'sayidan_navigation',
            'priority'  => 10,
            'type'      => 'checkbox'
    ) );
    
    //dashboard link
    $wp_customize->add_setting( 'sayidan_dash_link', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'sayidan_dash_link', array(
           'label'     => esc_html__( 'Account Link', 'sayidan' ),
           'section'   => 'sayidan_navigation',
           'priority'  => 10,
           'type'      => 'text'
    ) );
    
    //login link
    $wp_customize->add_setting( 'sayidan_login_link', array(
                                     'sanitize_callback' => 'sayidan_sanitize_text',
                                     ) );
    
    $wp_customize->add_control( 'sayidan_login_link', array(
           'label'     => esc_html__( 'Login Link', 'sayidan' ),
           'section'   => 'sayidan_navigation',
           'priority'  => 20,
           'type'      => 'text'
    ) );

    //add fonts section
    $wp_customize->add_section( 'sayidan_fonts_section' , array(
            'title'       => esc_html__( 'Fonts', 'sayidan' ),
            'priority'    => 24,
            'description' => esc_html__( 'Override default theme fonts using Google library.', 'sayidan' ).' <a href="https://fonts.google.com">'.esc_html__( 'Fonts demo', 'sayidan' ).'</a>',
    ) );
    
    $wp_customize->add_setting( 'sayidan_font1', array(
                                'sanitize_callback' => 'sayidan_sanitize_text',
                                ) );
    
    $wp_customize->add_control( 'sayidan_font1', array(
                                'label'     => esc_html__( 'Heading font family', 'sayidan' ),
                                'section'   => 'sayidan_fonts_section',
                                'priority'  => 10,
                                'type'      => 'select',
                                'choices'   => sayidan_google_fonts(),
                                ) );

    $wp_customize->add_setting( 'sayidan_font2', array(
                                'sanitize_callback' => 'sayidan_sanitize_text',
                                ) );
    
    $wp_customize->add_control( 'sayidan_font2', array(
                                'label'     => esc_html__( 'Menu font family', 'sayidan' ),
                                'section'   => 'sayidan_fonts_section',
                                'priority'  => 30,
                                'type'      => 'select',
                                'choices'   => sayidan_google_fonts(),
                                ) );

    $wp_customize->add_setting( 'sayidan_font3', array(
                                'sanitize_callback' => 'sayidan_sanitize_text',
                                ) );
    
    $wp_customize->add_control( 'sayidan_font3', array(
                                'label'     => esc_html__( 'Body font family', 'sayidan' ),
                                'section'   => 'sayidan_fonts_section',
                                'priority'  => 50,
                                'type'      => 'select',
                                'choices'   => sayidan_google_fonts(),
                                ) );

    //Theme Main Color
    $wp_customize->add_setting( 'sayidan_main_color', array(
                                                            'sanitize_callback' => 'sayidan_sanitize_text',
                                                            )  );
    
    $wp_customize->add_control(
       new WP_Customize_Color_Control(
            $wp_customize,
            'main_color',
            array(
                'label'      => esc_html__( 'Theme Main Color', 'sayidan' ),
                'section'    => 'colors',
                'settings'   => 'sayidan_main_color',
            ) )
    );
    
    $wp_customize->remove_control( 'header_textcolor' );
    $wp_customize->remove_control( 'background_color' );
    //Theme Sub Color
    $wp_customize->add_setting( 'sayidan_sub_color', array(
                                                           'sanitize_callback' => 'sayidan_sanitize_text',
                                                           )  );
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sub_color',
            array(
                'label'      => esc_html__( 'Theme Sub Color', 'sayidan' ),
                'section'    => 'colors',
                'settings'   => 'sayidan_sub_color',
            ) )
    );

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->add_section( 'custom_css', array(
                                                    'title' => esc_html__( 'Custom CSS', 'sayidan' ),
                                                    'description' => esc_html__( 'Add custom CSS here', 'sayidan' ),
                                                    'panel' => '', // Not typically needed.
                                                    'priority' => 160,
                                                    'capability' => 'edit_theme_options',
                                                    'theme_supports' => '', // Rarely needed.
                                                    ) );
    
    
    
    
    // add "Advanced" section
    $wp_customize->add_section( 'sayidan_advanced' , array(
                                                             'title'      => esc_html__( 'Advanced', 'sayidan' ),
                                                             'priority'   => 100,
                                                             ) );
    

    // add setting for page comment toggle checkbox
    $wp_customize->add_setting( 'sayidan_maps_api', array(
                                                             'default' => 1,
                                                             'sanitize_callback' => 'sayidan_sanitize_text',
                                                             ) );

    // add control for page comment toggle checkbox
    $wp_customize->add_control( 'sayidan_maps_api', array(
                                                             'label'     => esc_html__( 'Google Maps API Key', 'sayidan' ),
                                                             'section'   => 'sayidan_advanced',
                                                             'priority'  => 15,
                                                             'description' => esc_html__( 'Can be obtained here: https://developers.google.com/maps/documentation/javascript/get-api-key', 'sayidan' ),
                                                             'type'      => 'text'
                                                             ) );

    // add "SEO" section
    $wp_customize->add_section(  'sayidan_seo' , array(
                                 'title'      => esc_html__( 'SEO', 'sayidan' ),
                                 'description' => esc_html__( 'This theme is already optimized to have good SEO rankings so we do not recommend to use any extra SEO plugins for this purpose. When you finished developing your website make sure Autoptimize and WP Super Cache plugins are enabled. This will ensure your website will have A grade performance.', 'sayidan' ).' <a target="blank" href="https://developers.google.com/speed/pagespeed/insights/" >'.esc_html__( 'Read more', 'sayidan' ).'</>',
                                 'priority'   => 100,
                                 ) );

    // add setting for page comment toggle checkbox
    $wp_customize->add_setting(  'sayidan_ogp', array(
                                 'default' => 1,
                                 'sanitize_callback' => 'sayidan_sanitize_text',
                                 ) );
    
    // add control for page comment toggle checkbox
    $wp_customize->add_control(  'sayidan_ogp', array(
                                 'label'     => esc_html__( 'Open Graph Protocol', 'sayidan' ),
                                 'section'   => 'sayidan_seo',
                                 'priority'  => 10,
                                 'description' => esc_html__( 'Enable open graph protocol for sharing.', 'sayidan' ).' <a target="blank" href="http://ogp.me" >'.esc_html__( 'Read more', 'sayidan' ).'</>',
                                 'type'      => 'checkbox'
                                 ) );

    // add widget location
    $wp_customize->add_setting( 'sayidan_imgq', array(
                               'sanitize_callback' => 'sayidan_sanitize_text',
    ) );
    
    $wp_customize->add_control( 'sayidan_imgq', array(
                               'label'     => esc_html__( 'Image quality', 'sayidan' ),
                               'description' => esc_html__( 'Reduced image size quality may significantly improve page loading speeds and thus affect SEO rankings.', 'sayidan' ),
                               'section'   => 'sayidan_seo',
                               'priority'  => 30,
                               'type'      => 'select',
                               'choices'   => array(
                                        '10'  => '10%',
                                        '20'  => '20%',
                                        '30'  => '30%',
                                        '40'  => '40%',
                                        '50'  => '50%',
                                        '60'  => '60%',
                                        '70'  => '70%',
                                        '80'  => '80%',
                                        '90'  => '90%',
                                        '100' => '100%',
                                ),
    ) );


}
add_action( 'customize_register', 'sayidan_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sayidan_customize_preview_js() {
	wp_enqueue_script( 'sayidan_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sayidan_customize_preview_js' );

function sayidan_sanitize_text( $str ) {
    return sanitize_text_field( $str );
} 

function sayidan_google_fonts() {
    return array(
        'Default',
        'ABeeZee',
        'Abel',
        'Abhaya Libre',
        'Abril Fatface',
        'Aclonica',
        'Acme',
        'Actor',
        'Adamina',
        'Advent Pro',
        'Aguafina Script',
        'Akronim',
        'Aladin',
        'Aldrich',
        'Alef',
        'Alegreya',
        'Alegreya SC',
        'Alegreya Sans',
        'Alegreya Sans SC',
        'Alex Brush',
        'Alfa Slab One',
        'Alice',
        'Alike',
        'Alike Angular',
        'Allan',
        'Allerta',
        'Allerta Stencil',
        'Allura',
        'Almendra',
        'Almendra Display',
        'Almendra SC',
        'Amarante',
        'Amaranth',
        'Amatic SC',
        'Amatica SC',
        'Amethysta',
        'Amiko',
        'Amiri',
        'Amita',
        'Anaheim',
        'Andada',
        'Andika',
        'Angkor',
        'Annie Use Your Telescope',
        'Anonymous Pro',
        'Antic',
        'Antic Didone',
        'Antic Slab',
        'Anton',
        'Arapey',
        'Arbutus',
        'Arbutus Slab',
        'Architects Daughter',
        'Archivo',
        'Archivo Black',
        'Archivo Narrow',
        'Aref Ruqaa',
        'Arima Madurai',
        'Arimo',
        'Arizonia',
        'Armata',
        'Arsenal',
        'Artifika',
        'Arvo',
        'Arya',
        'Asap',
        'Asap Condensed',
        'Asar',
        'Asset',
        'Assistant',
        'Astloch',
        'Asul',
        'Athiti',
        'Atma',
        'Atomic Age',
        'Aubrey',
        'Audiowide',
        'Autour One',
        'Average',
        'Average Sans',
        'Averia Gruesa Libre',
        'Averia Libre',
        'Averia Sans Libre',
        'Averia Serif Libre',
        'Bad Script',
        'Bahiana',
        'Baloo',
        'Baloo Bhai',
        'Baloo Bhaijaan',
        'Baloo Bhaina',
        'Baloo Chettan',
        'Baloo Da',
        'Baloo Paaji',
        'Baloo Tamma',
        'Baloo Tammudu',
        'Baloo Thambi',
        'Balthazar',
        'Bangers',
        'Barrio',
        'Basic',
        'Battambang',
        'Baumans',
        'Bayon',
        'Belgrano',
        'Bellefair',
        'Belleza',
        'BenchNine',
        'Bentham',
        'Berkshire Swash',
        'Bevan',
        'Bigelow Rules',
        'Bigshot One',
        'Bilbo',
        'Bilbo Swash Caps',
        'BioRhyme',
        'BioRhyme Expanded',
        'Biryani',
        'Bitter',
        'Black Ops One',
        'Bokor',
        'Bonbon',
        'Boogaloo',
        'Bowlby One',
        'Bowlby One SC',
        'Brawler',
        'Bree Serif',
        'Bubblegum Sans',
        'Bubbler One',
        'Buda',
        'Buenard',
        'Bungee',
        'Bungee Hairline',
        'Bungee Inline',
        'Bungee Outline',
        'Bungee Shade',
        'Butcherman',
        'Butterfly Kids',
        'Cabin',
        'Cabin Condensed',
        'Cabin Sketch',
        'Caesar Dressing',
        'Cagliostro',
        'Cairo',
        'Calligraffitti',
        'Cambay',
        'Cambo',
        'Candal',
        'Cantarell',
        'Cantata One',
        'Cantora One',
        'Capriola',
        'Cardo',
        'Carme',
        'Carrois Gothic',
        'Carrois Gothic SC',
        'Carter One',
        'Catamaran',
        'Caudex',
        'Caveat',
        'Caveat Brush',
        'Cedarville Cursive',
        'Ceviche One',
        'Changa',
        'Changa One',
        'Chango',
        'Chathura',
        'Chau Philomene One',
        'Chela One',
        'Chelsea Market',
        'Chenla',
        'Cherry Cream Soda',
        'Cherry Swash',
        'Chewy',
        'Chicle',
        'Chivo',
        'Chonburi',
        'Cinzel',
        'Cinzel Decorative',
        'Clicker Script',
        'Coda',
        'Coda Caption',
        'Codystar',
        'Coiny',
        'Combo',
        'Comfortaa',
        'Coming Soon',
        'Concert One',
        'Condiment',
        'Content',
        'Contrail One',
        'Convergence',
        'Cookie',
        'Copse',
        'Corben',
        'Cormorant',
        'Cormorant Garamond',
        'Cormorant Infant',
        'Cormorant SC',
        'Cormorant Unicase',
        'Cormorant Upright',
        'Courgette',
        'Cousine',
        'Coustard',
        'Covered By Your Grace',
        'Crafty Girls',
        'Creepster',
        'Crete Round',
        'Crimson Text',
        'Croissant One',
        'Crushed',
        'Cuprum',
        'Cutive',
        'Cutive Mono',
        'Damion',
        'Dancing Script',
        'Dangrek',
        'David Libre',
        'Dawning of a New Day',
        'Days One',
        'Dekko',
        'Delius',
        'Delius Swash Caps',
        'Delius Unicase',
        'Della Respira',
        'Denk One',
        'Devonshire',
        'Dhurjati',
        'Didact Gothic',
        'Diplomata',
        'Diplomata SC',
        'Domine',
        'Donegal One',
        'Doppio One',
        'Dorsa',
        'Dosis',
        'Dr Sugiyama',
        'Droid Sans',
        'Droid Sans Mono',
        'Droid Serif',
        'Duru Sans',
        'Dynalight',
        'EB Garamond',
        'Eagle Lake',
        'Eater',
        'Economica',
        'Eczar',
        'El Messiri',
        'Electrolize',
        'Elsie',
        'Elsie Swash Caps',
        'Emblema One',
        'Emilys Candy',
        'Encode Sans',
        'Encode Sans Condensed',
        'Encode Sans Expanded',
        'Encode Sans Semi Condensed',
        'Encode Sans Semi Expanded',
        'Engagement',
        'Englebert',
        'Enriqueta',
        'Erica One',
        'Esteban',
        'Euphoria Script',
        'Ewert',
        'Exo',
        'Exo 2',
        'Expletus Sans',
        'Fanwood Text',
        'Farsan',
        'Fascinate',
        'Fascinate Inline',
        'Faster One',
        'Fasthand',
        'Fauna One',
        'Faustina',
        'Federant',
        'Federo',
        'Felipa',
        'Fenix',
        'Finger Paint',
        'Fira Mono',
        'Fira Sans',
        'Fira Sans Condensed',
        'Fira Sans Extra Condensed',
        'Fjalla One',
        'Fjord One',
        'Flamenco',
        'Flavors',
        'Fondamento',
        'Fontdiner Swanky',
        'Forum',
        'Francois One',
        'Frank Ruhl Libre',
        'Freckle Face',
        'Fredericka the Great',
        'Fredoka One',
        'Freehand',
        'Fresca',
        'Frijole',
        'Fruktur',
        'Fugaz One',
        'GFS Didot',
        'GFS Neohellenic',
        'Gabriela',
        'Gafata',
        'Galada',
        'Galdeano',
        'Galindo',
        'Gentium Basic',
        'Gentium Book Basic',
        'Geo',
        'Geostar',
        'Geostar Fill',
        'Germania One',
        'Gidugu',
        'Gilda Display',
        'Give You Glory',
        'Glass Antiqua',
        'Glegoo',
        'Gloria Hallelujah',
        'Goblin One',
        'Gochi Hand',
        'Gorditas',
        'Goudy Bookletter 1911',
        'Graduate',
        'Grand Hotel',
        'Gravitas One',
        'Great Vibes',
        'Griffy',
        'Gruppo',
        'Gudea',
        'Gurajada',
        'Habibi',
        'Halant',
        'Hammersmith One',
        'Hanalei',
        'Hanalei Fill',
        'Handlee',
        'Hanuman',
        'Happy Monkey',
        'Harmattan',
        'Headland One',
        'Heebo',
        'Henny Penny',
        'Herr Von Muellerhoff',
        'Hind',
        'Hind Guntur',
        'Hind Madurai',
        'Hind Siliguri',
        'Hind Vadodara',
        'Holtwood One SC',
        'Homemade Apple',
        'Homenaje',
        'IM Fell DW Pica',
        'IM Fell DW Pica SC',
        'IM Fell Double Pica',
        'IM Fell Double Pica SC',
        'IM Fell English',
        'IM Fell English SC',
        'IM Fell French Canon',
        'IM Fell French Canon SC',
        'IM Fell Great Primer',
        'IM Fell Great Primer SC',
        'Iceberg',
        'Iceland',
        'Imprima',
        'Inconsolata',
        'Inder',
        'Indie Flower',
        'Inika',
        'Inknut Antiqua',
        'Irish Grover',
        'Istok Web',
        'Italiana',
        'Italianno',
        'Itim',
        'Jacques Francois',
        'Jacques Francois Shadow',
        'Jaldi',
        'Jim Nightshade',
        'Jockey One',
        'Jolly Lodger',
        'Jomhuria',
        'Josefin Sans',
        'Josefin Slab',
        'Joti One',
        'Judson',
        'Julee',
        'Julius Sans One',
        'Junge',
        'Jura',
        'Just Another Hand',
        'Just Me Again Down Here',
        'Kadwa',
        'Kalam',
        'Kameron',
        'Kanit',
        'Kantumruy',
        'Karla',
        'Karma',
        'Katibeh',
        'Kaushan Script',
        'Kavivanar',
        'Kavoon',
        'Kdam Thmor',
        'Keania One',
        'Kelly Slab',
        'Kenia',
        'Khand',
        'Khmer',
        'Khula',
        'Kite One',
        'Knewave',
        'Kotta One',
        'Koulen',
        'Kranky',
        'Kreon',
        'Kristi',
        'Krona One',
        'Kumar One',
        'Kumar One Outline',
        'Kurale',
        'La Belle Aurore',
        'Laila',
        'Lakki Reddy',
        'Lalezar',
        'Lancelot',
        'Lateef',
        'Lato',
        'League Script',
        'Leckerli One',
        'Ledger',
        'Lekton',
        'Lemon',
        'Lemonada',
        'Libre Barcode 128',
        'Libre Barcode 128 Text',
        'Libre Barcode 39',
        'Libre Barcode 39 Extended',
        'Libre Barcode 39 Extended Text',
        'Libre Barcode 39 Text',
        'Libre Baskerville',
        'Libre Franklin',
        'Life Savers',
        'Lilita One',
        'Lily Script One',
        'Limelight',
        'Linden Hill',
        'Lobster',
        'Lobster Two',
        'Londrina Outline',
        'Londrina Shadow',
        'Londrina Sketch',
        'Londrina Solid',
        'Lora',
        'Love Ya Like A Sister',
        'Loved by the King',
        'Lovers Quarrel',
        'Luckiest Guy',
        'Lusitana',
        'Lustria',
        'Macondo',
        'Macondo Swash Caps',
        'Mada',
        'Magra',
        'Maiden Orange',
        'Maitree',
        'Mako',
        'Mallanna',
        'Mandali',
        'Manuale',
        'Marcellus',
        'Marcellus SC',
        'Marck Script',
        'Margarine',
        'Marko One',
        'Marmelad',
        'Martel',
        'Martel Sans',
        'Marvel',
        'Mate',
        'Mate SC',
        'Maven Pro',
        'McLaren',
        'Meddon',
        'MedievalSharp',
        'Medula One',
        'Meera Inimai',
        'Megrim',
        'Meie Script',
        'Merienda',
        'Merienda One',
        'Merriweather',
        'Merriweather Sans',
        'Metal',
        'Metal Mania',
        'Metamorphous',
        'Metrophobic',
        'Michroma',
        'Milonga',
        'Miltonian',
        'Miltonian Tattoo',
        'Miniver',
        'Miriam Libre',
        'Mirza',
        'Miss Fajardose',
        'Mitr',
        'Modak',
        'Modern Antiqua',
        'Mogra',
        'Molengo',
        'Molle',
        'Monda',
        'Monofett',
        'Monoton',
        'Monsieur La Doulaise',
        'Montaga',
        'Montez',
        'Montserrat',
        'Montserrat Alternates',
        'Montserrat Subrayada',
        'Moul',
        'Moulpali',
        'Mountains of Christmas',
        'Mouse Memoirs',
        'Mr Bedfort',
        'Mr Dafoe',
        'Mr De Haviland',
        'Mrs Saint Delafield',
        'Mrs Sheppards',
        'Mukta',
        'Mukta Mahee',
        'Mukta Malar',
        'Mukta Vaani',
        'Muli',
        'Mystery Quest',
        'NTR',
        'Neucha',
        'Neuton',
        'New Rocker',
        'News Cycle',
        'Niconne',
        'Nixie One',
        'Nobile',
        'Nokora',
        'Norican',
        'Nosifer',
        'Nothing You Could Do',
        'Noticia Text',
        'Noto Sans',
        'Noto Serif',
        'Nova Cut',
        'Nova Flat',
        'Nova Mono',
        'Nova Oval',
        'Nova Round',
        'Nova Script',
        'Nova Slim',
        'Nova Square',
        'Numans',
        'Nunito',
        'Nunito Sans',
        'Odor Mean Chey',
        'Offside',
        'Old Standard TT',
        'Oldenburg',
        'Oleo Script',
        'Oleo Script Swash Caps',
        'Open Sans',
        'Open Sans Condensed',
        'Oranienbaum',
        'Orbitron',
        'Oregano',
        'Orienta',
        'Original Surfer',
        'Oswald',
        'Over the Rainbow',
        'Overlock',
        'Overlock SC',
        'Overpass',
        'Overpass Mono',
        'Ovo',
        'Oxygen',
        'Oxygen Mono',
        'PT Mono',
        'PT Sans',
        'PT Sans Caption',
        'PT Sans Narrow',
        'PT Serif',
        'PT Serif Caption',
        'Pacifico',
        'Padauk',
        'Palanquin',
        'Palanquin Dark',
        'Pangolin',
        'Paprika',
        'Parisienne',
        'Passero One',
        'Passion One',
        'Pathway Gothic One',
        'Patrick Hand',
        'Patrick Hand SC',
        'Pattaya',
        'Patua One',
        'Pavanam',
        'Paytone One',
        'Peddana',
        'Peralta',
        'Permanent Marker',
        'Petit Formal Script',
        'Petrona',
        'Philosopher',
        'Piedra',
        'Pinyon Script',
        'Pirata One',
        'Plaster',
        'Play',
        'Playball',
        'Playfair Display',
        'Playfair Display SC',
        'Podkova',
        'Poiret One',
        'Poller One',
        'Poly',
        'Pompiere',
        'Pontano Sans',
        'Poppins',
        'Port Lligat Sans',
        'Port Lligat Slab',
        'Pragati Narrow',
        'Prata',
        'Preahvihear',
        'Press Start 2P',
        'Pridi',
        'Princess Sofia',
        'Prociono',
        'Prompt',
        'Prosto One',
        'Proza Libre',
        'Puritan',
        'Purple Purse',
        'Quando',
        'Quantico',
        'Quattrocento',
        'Quattrocento Sans',
        'Questrial',
        'Quicksand',
        'Quintessential',
        'Qwigley',
        'Racing Sans One',
        'Radley',
        'Rajdhani',
        'Rakkas',
        'Raleway',
        'Raleway Dots',
        'Ramabhadra',
        'Ramaraja',
        'Rambla',
        'Rammetto One',
        'Ranchers',
        'Rancho',
        'Ranga',
        'Rasa',
        'Rationale',
        'Ravi Prakash',
        'Redressed',
        'Reem Kufi',
        'Reenie Beanie',
        'Revalia',
        'Rhodium Libre',
        'Ribeye',
        'Ribeye Marrow',
        'Righteous',
        'Risque',
        'Roboto',
        'Roboto Condensed',
        'Roboto Mono',
        'Roboto Slab',
        'Rochester',
        'Rock Salt',
        'Rokkitt',
        'Romanesco',
        'Ropa Sans',
        'Rosario',
        'Rosarivo',
        'Rouge Script',
        'Rozha One',
        'Rubik',
        'Rubik Mono One',
        'Ruda',
        'Rufina',
        'Ruge Boogie',
        'Ruluko',
        'Rum Raisin',
        'Ruslan Display',
        'Russo One',
        'Ruthie',
        'Rye',
        'Sacramento',
        'Sahitya',
        'Sail',
        'Saira',
        'Saira Condensed',
        'Saira Extra Condensed',
        'Saira Semi Condensed',
        'Salsa',
        'Sanchez',
        'Sancreek',
        'Sansita',
        'Sarala',
        'Sarina',
        'Sarpanch',
        'Satisfy',
        'Scada',
        'Scheherazade',
        'Schoolbell',
        'Scope One',
        'Seaweed Script',
        'Secular One',
        'Sedgwick Ave',
        'Sedgwick Ave Display',
        'Sevillana',
        'Seymour One',
        'Shadows Into Light',
        'Shadows Into Light Two',
        'Shanti',
        'Share',
        'Share Tech',
        'Share Tech Mono',
        'Shojumaru',
        'Short Stack',
        'Shrikhand',
        'Siemreap',
        'Sigmar One',
        'Signika',
        'Signika Negative',
        'Simonetta',
        'Sintony',
        'Sirin Stencil',
        'Six Caps',
        'Skranji',
        'Slabo 13px',
        'Slabo 27px',
        'Slackey',
        'Smokum',
        'Smythe',
        'Sniglet',
        'Snippet',
        'Snowburst One',
        'Sofadi One',
        'Sofia',
        'Sonsie One',
        'Sorts Mill Goudy',
        'Source Code Pro',
        'Source Sans Pro',
        'Source Serif Pro',
        'Space Mono',
        'Special Elite',
        'Spectral',
        'Spicy Rice',
        'Spinnaker',
        'Spirax',
        'Squada One',
        'Sree Krushnadevaraya',
        'Sriracha',
        'Stalemate',
        'Stalinist One',
        'Stardos Stencil',
        'Stint Ultra Condensed',
        'Stint Ultra Expanded',
        'Stoke',
        'Strait',
        'Sue Ellen Francisco',
        'Suez One',
        'Sumana',
        'Sunshiney',
        'Supermercado One',
        'Sura',
        'Suranna',
        'Suravaram',
        'Suwannaphum',
        'Swanky and Moo Moo',
        'Syncopate',
        'Tangerine',
        'Taprom',
        'Tauri',
        'Taviraj',
        'Teko',
        'Telex',
        'Tenali Ramakrishna',
        'Tenor Sans',
        'Text Me One',
        'The Girl Next Door',
        'Tienne',
        'Tillana',
        'Timmana',
        'Tinos',
        'Titan One',
        'Titillium Web',
        'Trade Winds',
        'Trirong',
        'Trocchi',
        'Trochut',
        'Trykker',
        'Tulpen One',
        'Ubuntu',
        'Ubuntu Condensed',
        'Ubuntu Mono',
        'Ultra',
        'Uncial Antiqua',
        'Underdog',
        'Unica One',
        'UnifrakturCook',
        'UnifrakturMaguntia',
        'Unkempt',
        'Unlock',
        'Unna',
        'VT323',
        'Vampiro One',
        'Varela',
        'Varela Round',
        'Vast Shadow',
        'Vesper Libre',
        'Vibur',
        'Vidaloka',
        'Viga',
        'Voces',
        'Volkhov',
        'Vollkorn',
        'Voltaire',
        'Waiting for the Sunrise',
        'Wallpoet',
        'Walter Turncoat',
        'Warnes',
        'Wellfleet',
        'Wendy One',
        'Wire One',
        'Work Sans',
        'Yanone Kaffeesatz',
        'Yantramanav',
        'Yatra One',
        'Yellowtail',
        'Yeseva One',
        'Yesteryear',
        'Yrsa',
        'Zeyada',
        'Zilla Slab',
        'Zilla Slab Highlight',
        );
}