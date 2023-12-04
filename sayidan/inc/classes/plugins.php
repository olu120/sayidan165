<?php
/**
 * @package Kenzap
 * @basic setup
 */

add_action( 'tgmpa_register', 'sayidan_register_required_plugins' );

function sayidan_register_required_plugins() {

/*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        array(
            'name'                  => 'Contact Form 7', // The plugin name
            'slug'                  => 'contact-form-7', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => 'https://wordpress.org/plugins/contact-form-7/', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'                  => 'Regenerate Thumbnails', // The plugin name
            'slug'                  => 'regenerate-thumbnails', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => 'https://wordpress.org/plugins/regenerate-thumbnails/', // If set, overrides default API URL and points to an external URL
        ),
        array(
            'name'         => 'MailChimp for WordPress',
            'slug'         => 'mailchimp-for-wp',
            'required'     => false,
            'force_activation'      => false,
            'external_url' => 'https://mc4wp.com/'
        ),
        array(
            'name'                  => 'CMB2', // The plugin name
            'slug'                  => 'cmb2', // The plugin slug (typically the folder name)
            'required'              => false, // If false, the plugin is only 'recommended' instead of required
            'force_activation'      => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
            'force_deactivation'    => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
            'external_url'          => 'https://wordpress.org/plugins/cmb2/', // If set, overrides default API URL and points to an external URL
            ),
        array(
            'name' => 'SiteOrigin Widgets Bundle',
            'slug' => 'so-widgets-bundle',
            'source' => 'https://wordpress.org/plugins/so-widgets-bundle/',
            'required' => false,
            'recommended' => false,
            'force_activation' => false,
        ),
        array(
            'name' => 'Page Builder by SiteOrigin',
            'slug' => 'siteorigin-panels',
            'source' => 'https://wordpress.org/plugins/siteorigin-panels/',
            'required' => false,
            'recommended' => false,
            'force_activation' => false,
        ),
        array(
            'name' => 'One Click Demo Import',
            'slug' => 'one-click-demo-import',
            'source' => 'https://wordpress.org/plugins/one-click-demo-import/',
            'required' => false,
            'recommended' => false,
            'force_activation' => false,
        ),
        array(
            'name' => 'Super Socializer',
            'slug' => 'super-socializer',
            'source' => 'https://wordpress.org/plugins/super-socializer/',
            'required' => false,
            'recommended' => false,
            'force_activation' => false,
        ),
        array(
            'name' => 'Ultimate Member',
            'slug' => 'ultimate-member',
            'source' => 'https://wordpress.org/plugins/ultimate-member/',
            'required' => false,
            'recommended' => false,
            'force_activation' => false,
        ),
        array(
            'name' => 'Autoptimize',
            'slug' => 'autoptimize',
            'source' => 'https://wordpress.org/plugins/autoptimize/',
            'required' => false,
            'recommended' => false,
            'force_activation' => false,
        ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'sayidan',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => false,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.


    );

    tgmpa( $plugins, $config );

}
