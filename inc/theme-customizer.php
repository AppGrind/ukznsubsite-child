<?php
/**
 * Created by PhpStorm.
 * User: Msomis
 * Date: 2018/01/02
 * Time: 3:07 PM
 */

function ukznsubsite_child_customize_register( $wp_customize ){

    $wp_customize->add_section( 'ukznsubsite_child_page_title', array(
        'title'                 => __('Page Title', 'ukznsubsite-child'),
        'description'           => 'Change Page title background and font colors properties',
        'priority'              => 20
    ));

    $wp_customize->add_section( 'ukznsubsite_child_misc_options', array(
        'title'                 => __('Misc Options', 'ukznsubsite-child'),
        'description'           => 'Misc Options',
        'priority'              => 40
    ));

    //Settings
    
    $wp_customize->add_setting( 'hide_page_title', array(
        'default'    => 0,
        'transport'  => 'refresh'
    ));
 

    $wp_customize->add_setting( 'hide_post_image', array(
        'default'    => 0,
        'transport'  => 'refresh'
    ));

    $wp_customize->add_setting( 'page_title_background_color', array(
        'default'               => '',
        'transport'             => 'refresh'
    ));

    $wp_customize->add_setting( 'page_title_background_image', array(
        'default'               => '',
        'transport'             => 'refresh'
    ));

    $wp_customize->add_setting( 'page_title_background_repeat', array(
        'default'               => 'no-repeat',
        'transport'             => 'refresh'
    ));

    $wp_customize->add_setting( 'page_title_background_size', array(
        'default'               => 'cover',
        'transport'             => 'refresh'
    ));

    $wp_customize->add_setting( 'page_title_background_attachment', array(
        'default'               => 'fixed',
        'transport'             => 'refresh'
    ));

    $wp_customize->add_setting( 'page_title_font_color', array(
        'default'               => '',
        'transport'             => 'refresh'
    ));

    //Controls
    $wp_customize->add_control( 'hide_page_title', array(
        'label'      => __('Hide in-page title', 'ukznsubsite-child'),
        'section'    => 'ukznsubsite_child_misc_options',
        'settings'   => 'hide_page_title',
        'type'       => 'checkbox'
    ));
    
    $wp_customize->add_control( 'hide_post_image', array(
        'label'      => __('Hide/Show Post Featured Image', 'ukznsubsite-child'),
        'section'    => 'ukznsubsite_child_misc_options',
        'settings'   => 'hide_post_image',
        'type'       => 'checkbox'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_title_background', array(
        'label'                 => __('Background Color', 'ukznsubsite-child'),
        'section'               => 'ukznsubsite_child_page_title',
        'settings'              => 'page_title_background_color'
    )));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'page_title_background_image',
            array(
                'label'      => __( 'Background Image', 'ukznsubsite-child' ),
                'section'    => 'ukznsubsite_child_page_title',
                'settings'   => 'page_title_background_image'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'page_title_background_repeat',
            array(
                'label'      => __( 'Background Image Repeat', 'ukznsubsite-child' ),
                'section'    => 'ukznsubsite_child_page_title',
                'settings'   => 'page_title_background_repeat',
                'choices'    => array('repeat'=>'repeat', 'no-repeat'=>'no-repeat'),
                'type'       => 'select'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'page_title_background_size',
            array(
                'label'      => __( 'Background Image Size', 'ukznsubsite-child' ),
                'section'    => 'ukznsubsite_child_page_title',
                'settings'   => 'page_title_background_size',
                'choices'    => array('cover'=>'cover', 'container'=>'container', 'auto' => 'auto'),
                'type'       => 'select'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'page_title_background_attachment',
            array(
                'label'      => __( 'Background Image Attachment', 'ukznsubsite-child' ),
                'section'    => 'ukznsubsite_child_page_title',
                'settings'   => 'page_title_background_attachment',
                'choices'    => array('fixed'=>'fixed', 'scroll'=>'scroll'),
                'type'       => 'select'
            )
        )
    );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_title_font_color', array(
        'label'                 => __('Font Color', 'ukznsubsite-child'),
        'section'               => 'ukznsubsite_child_page_title',
        'settings'              => 'page_title_font_color'
    )));

}