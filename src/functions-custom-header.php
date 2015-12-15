<?php
/*
 	Juniper for WordPress
    Copyright (C) 2015 Plain, LLC. http://plainmade.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
	
	See license.txt

----------------------------------------------------------------- 
	
	Functions File for Custom Header
*/


/* Header Background Image */
function juniper_custom_header_setup() {
    
    $args = array(
        'default-image'      => get_template_directory_uri() . '/images/background.jpg',
        'width'              => 3000,
        'height'             => 1841,
        'flex-width'         => true,
        'flex-height'        => true,
        'uploads'            => true,
    );
    
    add_theme_support( 'custom-header', $args );
    
    register_default_headers( array(
		'juniper' => array(
			'url'           => get_template_directory_uri() . '/images/background.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/images/background.jpg',
			'description'   => _x( 'Juniper', 'A default background for Juniper.', 'i18n' )
		),
	) );
}
add_action( 'after_setup_theme', 'juniper_custom_header_setup' );

/* Header Avatar or Logo Image */
function juniper_theme_customizer( $wp_customize ) {
    /* Logo Section */
    $wp_customize->add_section( 'juniper_logo_section' , array(
        'title'       => __( 'Logo', 'i18n' ),
        'priority'    => 30,
        'description' => __('Upload a logo or avatar to customize your header.'),
    ) );
    $wp_customize->add_setting( 'juniper_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'juniper_logo', array(
        'label'    => __( 'Logo', 'i18n' ),
        'section'  => 'juniper_logo_section',
        'settings' => 'juniper_logo',
    ) ) );
    
    /* Address Phone Social in Header */
    $wp_customize->add_section( 'juniper_header_section' , array(
        'title'       => __( 'Social Icons', 'i18n' ),
        'priority'    => 30,
        'description' => __('Add or edit your social accounts in your header.'),
    ) );
    
    
    $wp_customize->add_setting( 'juniper_twitter' );
    $wp_customize->add_setting( 'juniper_facebook' );
    $wp_customize->add_setting( 'juniper_instagram' );
    $wp_customize->add_setting( 'juniper_behance' );
    $wp_customize->add_setting( 'juniper_flickr' );
    $wp_customize->add_setting( 'juniper_linkedin' );
    $wp_customize->add_setting( 'juniper_googleplus' );
    $wp_customize->add_setting( 'juniper_pinterest' );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_twitter', array(
        'label'    => __( 'Twitter', 'i18n' ),
        'description' => __( 'Without the @ symbol.', 'i18n' ),
        'section'  => 'juniper_header_section',
        'settings' => 'juniper_twitter',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_facebook', array(
        'label'    => __( 'Facebook', 'i18n' ),
        'description' => __( 'Your username or page name.', 'i18n' ),
        'section'  => 'juniper_header_section',
        'settings' => 'juniper_facebook',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_instagram', array(
        'label'    => __( 'Instagram', 'i18n' ),
        'description' => __( 'Without the @ symbol.', 'i18n' ),
        'section'  => 'juniper_header_section',
        'settings' => 'juniper_instagram',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_googleplus', array(
        'label'    => __( 'Google+', 'i18n' ),
        'section'  => 'juniper_header_section',
        'description' => __( 'Without the + symbol.', 'i18n' ),
        'settings' => 'juniper_googleplus',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_behance', array(
        'label'    => __( 'Behance', 'i18n' ),
        'section'  => 'juniper_header_section',
        'description' => __( 'Your username.', 'i18n' ),
        'settings' => 'juniper_behance',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_flickr', array(
        'label'    => __( 'Flickr', 'i18n' ),
        'section'  => 'juniper_header_section',
        'description' => __( 'Your username.', 'i18n' ),
        'settings' => 'juniper_flickr',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_linkedin', array(
        'label'    => __( 'LinkedIn', 'i18n' ),
        'description' => __( 'Your username.', 'i18n' ),
        'section'  => 'juniper_header_section',
        'settings' => 'juniper_linkedin',
    ) ) );
    
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_pinterest', array(
        'label'    => __( 'Pinterest', 'i18n' ),
        'section'  => 'juniper_header_section',
        'description' => __( 'Your username.', 'i18n' ),
        'settings' => 'juniper_pinterest',
    ) ) );
    
    /* Home Page Customization */
    $wp_customize->add_section( 'juniper_homepage_section' , array(
        'title'       => __( 'Home Page', 'i18n' ),
        'priority'    => 30,
        'description' => __('Customize your home page by adding an introduction and selecting which Post Types to show or hide.'),
    ) );
    $wp_customize->add_setting( 'juniper_homepage_intro' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_homepage_intro', array(
        'label'    => __( 'Introduction', 'i18n' ),
        'section'  => 'juniper_homepage_section',
        'description' => __( '140-characters to introduce your site. Leave blank to remove.', 'i18n' ),
        'settings' => 'juniper_homepage_intro',
    ) ) );
    
    $wp_customize->add_setting( 'juniper_homepage_portfolio' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_homepage_portfolio', array(
        'label'    => __( 'Portfolio items:', 'i18n' ),
        'type'     => 'select',
        'choices' => array('show'=>'Show','hide'=>'Hide'),
        'section'  => 'juniper_homepage_section',
        'settings' => 'juniper_homepage_portfolio',
    ) ) );
    
    $wp_customize->add_setting( 'juniper_homepage_services' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_homepage_services', array(
        'label'    => __( 'Services:', 'i18n' ),
        'type'     => 'select',
        'choices' => array('show'=>'Show','hide'=>'Hide'),
        'section'  => 'juniper_homepage_section',
        'settings' => 'juniper_homepage_services',
    ) ) );
    
    $wp_customize->add_setting( 'juniper_homepage_testimonials' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_homepage_testimonials', array(
        'label'    => __( 'Testimonials:', 'i18n' ),
        'type'     => 'select',
        'choices' => array('show'=>'Show','hide'=>'Hide'),
        'section'  => 'juniper_homepage_section',
        'settings' => 'juniper_homepage_testimonials',
    ) ) );
    
    $wp_customize->add_setting( 'juniper_homepage_blogposts' );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'juniper_homepage_blogposts', array(
        'label'    => __( 'Blog Posts:', 'i18n' ),
        'type'     => 'select',
        'choices' => array('show'=>'Show','hide'=>'Hide'),
        'section'  => 'juniper_homepage_section',
        'settings' => 'juniper_homepage_blogposts',
    ) ) );
    
}
add_action( 'customize_register', 'juniper_theme_customizer' );

?>