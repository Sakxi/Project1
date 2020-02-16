<?php
/* Behind our Company */
function siudi_social_customizer_section($wp_customize){
    
    /* Section*/
    $wp_customize->add_section('siudi_team_section',array(
        'title'=>__('Teams Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('siudi_title_handle',array(
        'default'=>''
    ));
    $wp_customize->add_setting('siudi_content_handle',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_title_handle_text',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_team_section',
        'type'=>'text',
        'settings'=>'siudi_title_handle'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_content_handle_text',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_team_section',
        'type'=>'textarea',
        'settings'=>'siudi_content_handle'
    
    )));

    $wp_customize->add_section('siudi_welcome_section',array(
        'title'=>__('Welcome Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('siudi_title_welcome',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_title_welcome_text',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_welcome_section',
        'type'=>'text',
        'settings'=>'siudi_title_welcome'

    )));
    $wp_customize->add_section('siudi_overview_section',array(
        'title'=>__('Overview Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('siudi_title_overview',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_title_overview_text',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_overview_section',
        'type'=>'text',
        'settings'=>'siudi_title_overview'

    )));
    $wp_customize->add_setting('siudi_subtitle_overview',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_subtitle_overview_text',array(

        'label'=>__('SubTitle','siudi'),
        'section'=>'siudi_overview_section',
        'type'=>'text',
        'settings'=>'siudi_subtitle_overview'

    )));
    $wp_customize->add_setting('siudi_content_overview',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_content_overview_text',array(

        'label'=>__('Content','siudi'),
        'section'=>'siudi_overview_section',
        'type'=>'text',
        'settings'=>'siudi_content_overview'

    )));
    /*-----Project Single---*/


    $wp_customize->add_section('siudi_prosingle_section',array(
        'title'=>__('Project-Single Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('siudi_title_prosingle',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_title_prosingle_text',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_prosingle_section',
        'type'=>'text',
        'settings'=>'siudi_title_prosingle'

    )));
    $wp_customize->add_setting('siudi_subtitle_prosingle',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_subtitle_prosingle_text',array(

        'label'=>__('SubTitle','siudi'),
        'section'=>'siudi_prosingle_section',
        'type'=>'text',
        'settings'=>'siudi_subtitle_prosingle'

    )));
    /*---
    $wp_customize->add_setting('siudi_subtitle1_prosingle',array(
        'default'=>''
    ));--*/
   /*-- $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_subtitle1_prosingle_text',array(

        'label'=>__('SubTitle','siudi'),
        'section'=>'siudi_prosingle_section',
        'type'=>'text',
        'settings'=>'siudi_subtitle1_prosingle'

    )));--*/
    $wp_customize->add_setting('siudi_content_prosingle',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'siudi_content_prosingle_text',array(

        'label'=>__('Content','siudi'),
        'section'=>'siudi_prosingle_section',
        'type'=>'textarea',
        'settings'=>'siudi_content_prosingle'

    )));
    $wp_customize->add_setting('prosingle_image',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'prosingle_image',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_prosingle_section',
        'settings'=>'prosingle_image',
    )));
    $wp_customize->add_setting('prosingle_image1',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'prosingle_image1',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_prosingle_section',
        'settings'=>'prosingle_image1',
    )));
    $wp_customize->add_setting('prosingle_image2',array(
        'transport'=>'refresh',
        'height'=>375,
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'prosingle_image2',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_prosingle_section',
        'settings'=>'prosingle_image2',
    )));
    $wp_customize->add_setting('prosingle_image3',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'prosingle_image3',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_prosingle_section',
        'settings'=>'prosingle_image3',
    )));

    $wp_customize->add_section('siudi_video_section',array(
        'title'=>__('Videos Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('video',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'video',array(
        'label'=>__('Video','siudi'),
        'section'=>'siudi_video_section',
        'settings'=>'video',
    )));
    $wp_customize->add_setting('video1',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'video1',array(
        'label'=>__('Video','siudi'),
        'section'=>'siudi_video_section',
        'settings'=>'video1',
    )));
    $wp_customize->add_section('siudi_special_section',array(
        'title'=>__('Specials Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('special_title',array(
        'default'=>''
    ));
    $wp_customize->add_setting('special_content',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'special_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_special_section',
        'type'=>'text',
        'settings'=>'special_title'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'special_content',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_special_section',
        'type'=>'textarea',
        'settings'=>'special_content'
    
    )));
    $wp_customize->add_section('siudi_testimonial_section',array(
        'title'=>__('Testimonials Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('test_title',array(
        'default'=>''
    ));
    $wp_customize->add_setting('test_content',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'test_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_testimonial_section',
        'type'=>'text',
        'settings'=>'test_title'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'test_content',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_testimonial_section',
        'type'=>'textarea',
        'settings'=>'test_content'
    
    )));

    $wp_customize->add_section('siudi_category_section',array(
        'title'=>__('Categorys Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('cat_title',array(
        'default'=>''
    ));
    $wp_customize->add_setting('cat_content',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'cat_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_category_section',
        'type'=>'text',
        'settings'=>'cat_title'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'cat_content',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_category_section',
        'type'=>'text',
        'settings'=>'cat_content'
    
    )));
    $wp_customize->add_setting('cat_content1',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'cat_content1',array(

        'label'=>__('Content','siudi'),
        'section'=>'siudi_category_section',
        'type'=>'textarea',
        'settings'=>'cat_content1'

    )));
    $wp_customize->add_section('siudi_aboutus_section',array(
        'title'=>__('Aboutus Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('about_title',array(
        'default'=>''
    ));
    $wp_customize->add_setting('about_content',array(
        'default'=>''
    ));
    $wp_customize->add_setting('about_content1',array(
        'default'=>''
    ));
    $wp_customize->add_setting('about_name',array(
        'default'=>''
    ));
    $wp_customize->add_setting('about_post',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_aboutus_section',
        'type'=>'text',
        'settings'=>'about_title'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_content',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_aboutus_section',
        'type'=>'text',
        'settings'=>'about_content'
    
    )));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_content1',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_aboutus_section',
        'type'=>'textarea',
        'settings'=>'about_content1'
    
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_name',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_aboutus_section',
        'type'=>'text',
        'settings'=>'about_name'
    
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about_post',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_aboutus_section',
        'type'=>'text',
        'settings'=>'about_post'
    
    )));



    $wp_customize->add_section('siudi_frontservice_section',array(
        'title'=>__('Frontservice Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('frontservice_title',array(
        'default'=>''
    ));
    $wp_customize->add_setting('frontservice_content',array(
        'default'=>''
    ));
    $wp_customize->add_setting('frontservice_content1',array(
        'default'=>''
    ));
  
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'frontservice_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_frontservice_section',
        'type'=>'text',
        'settings'=>'frontservice_title'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'frontservice_content',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_frontservice_section',
        'type'=>'text',
        'settings'=>'frontservice_content'
    
    )));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'frontservice_content1',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_frontservice_section',
        'type'=>'textarea',
        'settings'=>'frontservice_content1'
    
   
    )));
    $wp_customize->add_section('siudi_frontproject_section',array(
        'title'=>__('Frontproject Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('frontproject_title',array(
        'default'=>''
    ));
    $wp_customize->add_setting('frontproject_content',array(
        'default'=>''
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'frontproject_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_frontproject_section',
        'type'=>'text',
        'settings'=>'frontproject_title'

    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'frontproject_content',array(
    
        'label'=>__('Content','siudi'),
        'section'=>'siudi_frontproject_section',
        'type'=>'text',
        'settings'=>'frontproject_content'
    
    )));
    $wp_customize->add_section('siudi_work_section',array(
        'title'=>__('Works Settings','siudi'),
        'priority'=>100
    ));

    $wp_customize->add_setting('work_image',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'work_image',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_work_section',
        'settings'=>'work_image',
    )));
    $wp_customize->add_setting('work_title',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'work_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_work_section',
        'type'=>'text',
        'settings'=>'work_title'

    )));
    $wp_customize->add_section('siudi_front1_section',array(
        'title'=>__('Front1 Settings','siudi'),
        'priority'=>100
    ));

    $wp_customize->add_setting('front_image',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'front_image',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_front1_section',
        'settings'=>'front_image',
    )));
    $wp_customize->add_setting('front_title',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'front_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_front1_section',
        'type'=>'text',
        'settings'=>'front_title'

    )));

    $wp_customize->add_section('siudi_why_section',array(
        'title'=>__('Why Settings','siudi'),
        'priority'=>100
    ));

    $wp_customize->add_setting('why_image',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'why_image',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_why_section',
        'settings'=>'why_image',
    )));
    $wp_customize->add_setting('why_title',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'why_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_why_section',
        'type'=>'text',
        'settings'=>'why_title'

    )));
    $wp_customize->add_setting('why_content',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'why_content',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_why_section',
        'type'=>'textarea',
        'settings'=>'why_content'

    )));

    $wp_customize->add_setting('why_title1',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'why_title1',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_why_section',
        'type'=>'text',
        'settings'=>'why_title1'

    )));

    $wp_customize->add_section('siudi_insta_section',array(
        'title'=>__('Insta Settings','siudi'),
        'priority'=>100
    ));
    $wp_customize->add_setting('insta_title',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'insta_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_insta_section',
        'type'=>'text',
        'settings'=>'insta_title'

    )));
    $wp_customize->add_setting('insta_title1',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'insta_title1',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_insta_section',
        'type'=>'text',
        'settings'=>'insta_title1'

    )));
    $wp_customize->add_section('siudi_slogan_section',array(
        'title'=>__('Slogan Settings','siudi'),
        'priority'=>100
    ));

    $wp_customize->add_setting('slogan_image',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slogan_image',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_slogan_section',
        'settings'=>'slogan_image',
    )));
    $wp_customize->add_setting('slogan_title',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'slogan_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_slogan_section',
        'type'=>'text',
        'settings'=>'slogan_title'

    )));
    $wp_customize->add_setting('slogan_content',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'slogan_content',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_slogan_section',
        'type'=>'text',
        'settings'=>'slogan_content'

    )));

    $wp_customize->add_setting('slogan_title1',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'slogan_title1',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_slogan_section',
        'type'=>'text',
        'settings'=>'slogan_title1'

    )));



    $wp_customize->add_section('siudi_contact_section',array(
        'title'=>__('Contact Settings','siudi'),
        'priority'=>100
    ));

    $wp_customize->add_setting('contact_image',array(
        'transport'=>'refresh',
        'height'=>375,
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'contact_image',array(
        'label'=>__('Image','siudi'),
        'section'=>'siudi_contact_section',
        'settings'=>'contact_image',
    )));
    $wp_customize->add_setting('contact_title',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'contact_title',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_contact_section',
        'type'=>'text',
        'settings'=>'contact_title'

    )));
    $wp_customize->add_setting('contact_content',array(
        'default'=>''
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'contact_content',array(

        'label'=>__('Title','siudi'),
        'section'=>'siudi_contact_section',
        'type'=>'text',
        'settings'=>'contact_content'

    )));




}



        ?>