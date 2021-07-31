<?php

/**
 * Fancy Lab Theme Customizer
 *
 * @package Fancy Lab
 */


function fancy_lab_customizer($wp_customize)
{
    //Copyright section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __('Copyright Settings', 'fancylab'),
            'description' => __('Copyright Section', 'fancylab')
        )
    );


    //  Field 1- Copyrighy Text Box

    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' => __('Copyright', 'fancylab'),
            'description' => __('Please, add your copyright information  here', 'fancylab'),
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );


    /*********************** Slider Section **************************** */

    $wp_customize->add_section(
        'sec_slider',
        array(
            'title' => __('Slider Settings', 'fancylab'),
            'description' => __('Slider Section', 'fancylab')
        )
    );

    // Field 1 - Slider Page Number 1

    $wp_customize->add_setting(
        'set_slider_page1',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page1',
        array(
            'label' => __('Set Slider Page 1', 'fancylab'),
            'description' => __('Set Slider Page 1', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    // Field 2 - Slider Button Text Number 1

    $wp_customize->add_setting(
        'set_slider_button_text1',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text1',
        array(
            'label' => __('Button Text For Page 1', 'fancylab'),
            'description' => __('Button Text For Page 1', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    // Field 3 - Slider Button URL Number 1

    $wp_customize->add_setting(
        'set_slider_button_url1',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url1',
        array(
            'label' => __('URL For Page 1', 'fancylab'),
            'description' => __('URL For Page 1', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    /************** 2nd Slider ************* */
    // Field 4 - Slider Page Number 2

    $wp_customize->add_setting(
        'set_slider_page2',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page2',
        array(
            'label' => __('Set Slider Page 2', 'fancylab'),
            'description' => __('Set Slider Page 2', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    // Field 5 - Slider Button Text Number 2

    $wp_customize->add_setting(
        'set_slider_button_text2',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text2',
        array(
            'label' => __('Button Text For Page 2', 'fancylab'),
            'description' => __('Button Text For Page 2', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    // Field 6 - Slider Button URL Number 2

    $wp_customize->add_setting(
        'set_slider_button_url2',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url2',
        array(
            'label' => __('URL For Page 2', 'fancylab'),
            'description' => __('URL For Page 2', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );


    /*********** 3rd Slider **************/

    // Field 7 - Slider Page Number 3

    $wp_customize->add_setting(
        'set_slider_page3',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_slider_page3',
        array(
            'label' => __('Set Slider Page 3', 'fancylab'),
            'description' => __('Set Slider Page 3', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'dropdown-pages'
        )
    );

    // Field 8 - Slider Button Text Number 3

    $wp_customize->add_setting(
        'set_slider_button_text3',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_text3',
        array(
            'label' => __('Button Text For Page 3', 'fancylab'),
            'description' => __('Button Text For Page 3', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );

    // Field 9 - Slider Button URL Number 3

    $wp_customize->add_setting(
        'set_slider_button_url3',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        'set_slider_button_url3',
        array(
            'label' => __('URL For Page 3', 'fancylab'),
            'description' => __('URL For Page 3', 'fancylab'),
            'section' => 'sec_slider',
            'type' => 'url'
        )
    );

    /**************************** Home Page Settings ************************************ */

    $wp_customize->add_section(
        'sec_home_page',
        array(
            'title' => __('Home Page Product and Blog Settings', 'fancylab'),
            'description' => __('Home Page Section', 'fancylab'),
        )
    );

    // Field 1 - Popular Products Title

    $wp_customize->add_setting(
        'set_popular_title',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_popular_title',
        array(
            'label' => __('Popular Product Title', 'fancylab'),
            'description' => __('Popular Product Title', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );

    // Field 2 - Popular Products Limit

    $wp_customize->add_setting(
        'set_popular_max_num',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_popular_max_num',
        array(
            'label' => __('Popular Product Max Number', 'fancylab'),
            'description' => __('Popular Product Max Number', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    // Field 3 - Popular Products Column

    $wp_customize->add_setting(
        'set_popular_max_column',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_popular_max_column',
        array(
            'label' => __('Popular Product Max Column', 'fancylab'),
            'description' => __('Popular Product Max Column', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    // Field 4 - New Arrival Title

    $wp_customize->add_setting(
        'set_new_arrivals_title',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_new_arrivals_title',
        array(
            'label' => __('New Arrivals Title', 'fancylab'),
            'description' => __('New Arrivals Title', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );

    // Field 5 - New Arrival Limit

    $wp_customize->add_setting(
        'set_new_arrival_max_num',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_new_arrival_max_num',
        array(
            'label' => __('New Arrival Max Number', 'fancylab'),
            'description' => __('New Arrival Max Number', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    // Field 6 - New Arrival Column

    $wp_customize->add_setting(
        'set_new_arrival_max_column',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_new_arrival_max_column',
        array(
            'label' => __('New Arrival Max Column', 'fancylab'),
            'description' => __('New Arrival Max Column', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );

    // Field 7 - Deal of the Week Title

    $wp_customize->add_setting(
        'set_deal_title',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_deal_title',
        array(
            'label' => __('Deal of the Week Title', 'fancylab'),
            'description' => __('Deal of the Week Title', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );


    // Field 8- - Deal of Week Checkbox

    $wp_customize->add_setting(
        'set_deal_show',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'fancy_lab_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        'set_deal_show',
        array(
            'label' => __('New Arrival Max Column', 'fancylab'),
            'description' => __('New Arrival Max Column', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'checkbox'
        )
    );

    // Field 9 -  Deal Product ID
    $wp_customize->add_setting(
        'set_deal_ID',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        'set_deal_ID',
        array(
            'label' => __('Deal of the Week Product ID', 'fancylab'),
            'description' => __('Product ID to Display', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'number'
        )
    );


    // Field 160 - Blog Title

    $wp_customize->add_setting(
        'set_blog_title',
        array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_blog_title',
        array(
            'label' => __('Blog Section Title', 'fancylab'),
            'description' => __('Blog Section Title', 'fancylab'),
            'section' => 'sec_home_page',
            'type' => 'text'
        )
    );
}


add_action('customize_register', 'fancy_lab_customizer');


function fancy_lab_sanitize_checkbox($checked)
{
    return ((isset($checked) && true == $checked) ? true : false);
}
