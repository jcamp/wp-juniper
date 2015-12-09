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
    );
    
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'juniper_custom_header_setup' );

/* Header Avatar or Logo Image */
function juniper_theme_customizer( $wp_customize ) {
   
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
}
add_action( 'customize_register', 'juniper_theme_customizer' );

?>