<?php

add_action('init','siudi_slider_post_type',0);
add_action('init','siudi_team_post_type',0);
add_action('init','siudi_brand_post_type',0);
add_action('init','siudi_proimage_post_type',0);
add_action('init','siudi_simproject_post_type',0);
add_action('init','siudi_service_post_type',0);
add_action('init','siudi_special_post_type',0);
add_action('init','siudi_test_post_type',0);
add_action('init','siudi_frontpro_post_type',0);
add_action('init','siudi_workfront_post_type',0);
add_action('init','siudi_testimony_post_type',0);
add_action('init','siudi_workingbox_post_type',0);
add_action('init','siudi_insta_post_type',0);
add_action('init','siudi_contact_post_type',0);



function siudi_slider_post_type(){
    $labels= array(
        'name' =>_x('Sliders','Post Type General Name','siudi'),
        'singular_name' =>_x('Slider','Post Type Singular Name','siudi'),
        'menu_name' =>__('Sliders','siudi'),
        'parent_item_colon' =>__('Parent Slider','siudi'),
        'all_items' =>__('All Sliders','siudi'),
        'view_item' =>__('View Slider','siudi'),
        'add_new_item' =>__('Add New Slider','siudi'),
        'add_new'=>__('Add New Slider','siudi'),
        'edit_item' =>__('Edit Slider','siudi'),
        'update_item' =>__('Update Slider','siudi'),
        'search_items' =>__('Search Slider','siudi'),
        'not_found' =>__('No Sliders Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Sliders','siudi'),
        'description'=>__('Sliders for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','thumbnail','editor'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('sliders',$args);
}

    function siudi_team_post_type(){
        $labels= array(
            'name' =>_x('Teams','Post Type General Name','siudi'),
            'singular_name' =>_x('Team','Post Type Singular Name','siudi'),
            'menu_name' =>__('Teams','siudi'),
            'parent_item_colon' =>__('Parent Team','siudi'),
            'all_items' =>__('All Teams','siudi'),
            'view_item' =>__('View Team','siudi'),
            'add_new_item' =>__('Add New Team','siudi'),
            'add_new'=>__('Add New Team','siudi'),
            'edit_item' =>__('Edit Team','siudi'),
            'update_item' =>__('Update Team','siudi'),
            'search_items' =>__('Search Team','siudi'),
            'not_found' =>__('No Teams Found','siudi'),
            'not_found_in_trash' =>__('Not Found in Trash','siudi'),
            
        );
        $args= array(
            'label'=>__('Teams','siudi'),
            'description'=>__('Teams for siudi','siudi'),
            'labels'=>$labels,
            'supports'=>array('thumbnail',),
            'hierarchical'=>false,
            'public'=>true,
            'show_ui'=>true,
            'show_in_menus'=>true,
            'show_in_nav_menus'=>true,
            'show_in_admin_bar'=>true,
            'menu position'=>5,
            'menu_icon'=>'dashicons-format-gallery',
            'can_export'=>true,
            'has_archive'=>true,
            'exclude_from_search'=>false,
            'capability_type'=>'page',
        );
        register_post_type('teams',$args);
}
function siudi_brand_post_type(){
    $labels= array(
        'name' =>_x('Brands','Post Type General Name','siudi'),
        'singular_name' =>_x('Brand','Post Type Singular Name','siudi'),
        'menu_name' =>__('Brands','siudi'),
        'parent_item_colon' =>__('Parent Brand','siudi'),
        'all_items' =>__('All Brands','siudi'),
        'view_item' =>__('View Brand','siudi'),
        'add_new_item' =>__('Add New Brand','siudi'),
        'add_new'=>__('Add New Brand','siudi'),
        'edit_item' =>__('Edit Brand','siudi'),
        'update_item' =>__('Update Brand','siudi'),
        'search_items' =>__('Search Brand','siudi'),
        'not_found' =>__('No Brands Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Brands','siudi'),
        'description'=>__('Brands for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('thumbnail',),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('brands',$args);
}
function siudi_proimage_post_type(){
    $labels= array(
        'name' =>_x('Proimages','Post Type General Name','siudi'),
        'singular_name' =>_x('Proimage','Post Type Singular Name','siudi'),
        'menu_name' =>__('Proimages','siudi'),
        'parent_item_colon' =>__('Parent Proimage','siudi'),
        'all_items' =>__('All Proimages','siudi'),
        'view_item' =>__('View Proimage','siudi'),
        'add_new_item' =>__('Add New Proimage','siudi'),
        'add_new'=>__('Add New Proimage','siudi'),
        'edit_item' =>__('Edit Proimage','siudi'),
        'update_item' =>__('Update Proimage','siudi'),
        'search_items' =>__('Search Proimage','siudi'),
        'not_found' =>__('No Proimages Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Proimages','siudi'),
        'description'=>__('Proimages for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('thumbnail',),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('proimages',$args);

}


    function siudi_simproject_post_type(){
        $labels= array(
            'name' =>_x('Simprojects','Post Type General Name','siudi'),
            'singular_name' =>_x('Simproject','Post Type Singular Name','siudi'),
            'menu_name' =>__('Simprojects','siudi'),
            'parent_item_colon' =>__('Parent Simproject','siudi'),
            'all_items' =>__('All Simprojects','siudi'),
            'view_item' =>__('View Simproject','siudi'),
            'add_new_item' =>__('Add New Simproject','siudi'),
            'add_new'=>__('Add New Simproject','siudi'),
            'edit_item' =>__('Edit Simproject','siudi'),
            'update_item' =>__('Update Simproject','siudi'),
            'search_items' =>__('Search Simproject','siudi'),
            'not_found' =>__('No Simprojects Found','siudi'),
            'not_found_in_trash' =>__('Not Found in Trash','siudi'),
            
        );
        $args= array(
            'label'=>__('Simprojects','siudi'),
            'description'=>__('Simprojects for siudi','siudi'),
            'labels'=>$labels,
            'supports'=>array('thumbnail',),
            'hierarchical'=>false,
            'public'=>true,
            'show_ui'=>true,
            'show_in_menus'=>true,
            'show_in_nav_menus'=>true,
            'show_in_admin_bar'=>true,
            'menu position'=>5,
            'menu_icon'=>'dashicons-format-gallery',
            'can_export'=>true,
            'has_archive'=>true,
            'exclude_from_search'=>false,
            'capability_type'=>'page',
        );
        register_post_type('simprojects',$args);
}

function siudi_service_post_type(){
    $labels= array(
        'name' =>_x('Services','Post Type General Name','siudi'),
        'singular_name' =>_x('service','Post Type Singular Name','siudi'),
        'menu_name' =>__('services','siudi'),
        'parent_item_colon' =>__('Parent service','siudi'),
        'all_items' =>__('All services','siudi'),
        'view_item' =>__('View service','siudi'),
        'add_new_item' =>__('Add New service','siudi'),
        'add_new'=>__('Add New service','siudi'),
        'edit_item' =>__('Edit service','siudi'),
        'update_item' =>__('Update service','siudi'),
        'search_items' =>__('Search service','siudi'),
        'not_found' =>__('No services Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('services','siudi'),
        'description'=>__('services for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('services',$args);
}
function siudi_special_post_type(){
    $labels= array(
        'name' =>_x('Specials','Post Type General Name','siudi'),
        'singular_name' =>_x('special','Post Type Singular Name','siudi'),
        'menu_name' =>__('specials','siudi'),
        'parent_item_colon' =>__('Parent special','siudi'),
        'all_items' =>__('All specials','siudi'),
        'view_item' =>__('View special','siudi'),
        'add_new_item' =>__('Add New special','siudi'),
        'add_new'=>__('Add New special','siudi'),
        'edit_item' =>__('Edit special','siudi'),
        'update_item' =>__('Update special','siudi'),
        'search_items' =>__('Search special','siudi'),
        'not_found' =>__('No specials Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('specials','siudi'),
        'description'=>__('specials for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('specials',$args);
}

function siudi_test_post_type(){
    $labels= array(
        'name' =>_x('Tests','Post Type General Name','siudi'),
        'singular_name' =>_x('Test','Post Type Singular Name','siudi'),
        'menu_name' =>__('Tests','siudi'),
        'parent_item_colon' =>__('Parent Test','siudi'),
        'all_items' =>__('All Tests','siudi'),
        'view_item' =>__('View Test','siudi'),
        'add_new_item' =>__('Add New Test','siudi'),
        'add_new'=>__('Add New Test','siudi'),
        'edit_item' =>__('Edit Test','siudi'),
        'update_item' =>__('Update Test','siudi'),
        'search_items' =>__('Search Test','siudi'),
        'not_found' =>__('No Tests Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Tests','siudi'),
        'description'=>__('Tests for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('tests',$args);
}


function siudi_frontpro_post_type(){
    $labels= array(
        'name' =>_x('Frontpros','Post Type General Name','siudi'),
        'singular_name' =>_x('Frontpro','Post Type Singular Name','siudi'),
        'menu_name' =>__('Frontpros','siudi'),
        'parent_item_colon' =>__('Parent Frontpro','siudi'),
        'all_items' =>__('All Frontpros','siudi'),
        'view_item' =>__('View Frontpro','siudi'),
        'add_new_item' =>__('Add New Frontpro','siudi'),
        'add_new'=>__('Add New Frontpro','siudi'),
        'edit_item' =>__('Edit Frontpro','siudi'),
        'update_item' =>__('Update Frontpro','siudi'),
        'search_items' =>__('Search Frontpro','siudi'),
        'not_found' =>__('No Frontpros Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Frontpros','siudi'),
        'description'=>__('Frontpros for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('frontpros',$args);
}
function siudi_workfront_post_type(){
    $labels= array(
        'name' =>_x('Workfronts','Post Type General Name','siudi'),
        'singular_name' =>_x('Workfront','Post Type Singular Name','siudi'),
        'menu_name' =>__('Workfronts','siudi'),
        'parent_item_colon' =>__('Parent Workfront','siudi'),
        'all_items' =>__('All Workfronts','siudi'),
        'view_item' =>__('View Workfront','siudi'),
        'add_new_item' =>__('Add New Workfront','siudi'),
        'add_new'=>__('Add New Workfront','siudi'),
        'edit_item' =>__('Edit Workfront','siudi'),
        'update_item' =>__('Update Workfront','siudi'),
        'search_items' =>__('Search Workfront','siudi'),
        'not_found' =>__('No Workfronts Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Workfronts','siudi'),
        'description'=>__('Workfronts for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Workfronts',$args);
}

function siudi_testimony_post_type(){
    $labels= array(
        'name' =>_x('Testimonys','Post Type General Name','siudi'),
        'singular_name' =>_x('Testimony','Post Type Singular Name','siudi'),
        'menu_name' =>__('Testimonys','siudi'),
        'parent_item_colon' =>__('Parent Testimony','siudi'),
        'all_items' =>__('All Testimonys','siudi'),
        'view_item' =>__('View Testimony','siudi'),
        'add_new_item' =>__('Add New Testimony','siudi'),
        'add_new'=>__('Add New Testimony','siudi'),
        'edit_item' =>__('Edit Testimony','siudi'),
        'update_item' =>__('Update Testimony','siudi'),
        'search_items' =>__('Search Testimony','siudi'),
        'not_found' =>__('No Testimonys Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Testimonys','siudi'),
        'description'=>__('Testimonys for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Testimonys',$args);
}

function siudi_workingbox_post_type(){
    $labels= array(
        'name' =>_x('Workingboxs','Post Type General Name','siudi'),
        'singular_name' =>_x('Workingbox','Post Type Singular Name','siudi'),
        'menu_name' =>__('Workingboxs','siudi'),
        'parent_item_colon' =>__('Parent Workingbox','siudi'),
        'all_items' =>__('All Workingboxs','siudi'),
        'view_item' =>__('View Workingbox','siudi'),
        'add_new_item' =>__('Add New Workingbox','siudi'),
        'add_new'=>__('Add New Workingbox','siudi'),
        'edit_item' =>__('Edit Workingbox','siudi'),
        'update_item' =>__('Update Workingbox','siudi'),
        'search_items' =>__('Search Workingbox','siudi'),
        'not_found' =>__('No Workingboxs Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Workingboxs','siudi'),
        'description'=>__('Workingboxs for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Workingboxs',$args);
}

function siudi_insta_post_type(){
    $labels= array(
        'name' =>_x('Instas','Post Type General Name','siudi'),
        'singular_name' =>_x('Insta','Post Type Singular Name','siudi'),
        'menu_name' =>__('Instas','siudi'),
        'parent_item_colon' =>__('Parent Insta','siudi'),
        'all_items' =>__('All Instas','siudi'),
        'view_item' =>__('View Insta','siudi'),
        'add_new_item' =>__('Add New Insta','siudi'),
        'add_new'=>__('Add New Insta','siudi'),
        'edit_item' =>__('Edit Insta','siudi'),
        'update_item' =>__('Update Insta','siudi'),
        'search_items' =>__('Search Insta','siudi'),
        'not_found' =>__('No Instas Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Instas','siudi'),
        'description'=>__('Instas for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Instas',$args);
}

function siudi_contact_post_type(){
    $labels= array(
        'name' =>_x('Contacts','Post Type General Name','siudi'),
        'singular_name' =>_x('Contact','Post Type Singular Name','siudi'),
        'menu_name' =>__('Contacts','siudi'),
        'parent_item_colon' =>__('Parent Contact','siudi'),
        'all_items' =>__('All Contacts','siudi'),
        'view_item' =>__('View Contact','siudi'),
        'add_new_item' =>__('Add New Contact','siudi'),
        'add_new'=>__('Add New Contact','siudi'),
        'edit_item' =>__('Edit Contact','siudi'),
        'update_item' =>__('Update Contact','siudi'),
        'search_items' =>__('Search Contact','siudi'),
        'not_found' =>__('No Contacts Found','siudi'),
        'not_found_in_trash' =>__('Not Found in Trash','siudi'),
        
    );
    $args= array(
        'label'=>__('Contacts','siudi'),
        'description'=>__('Contacts for siudi','siudi'),
        'labels'=>$labels,
        'supports'=>array('title','editor','thumbnail'),
        'hierarchical'=>false,
        'public'=>true,
        'show_ui'=>true,
        'show_in_menus'=>true,
        'show_in_nav_menus'=>true,
        'show_in_admin_bar'=>true,
        'menu position'=>5,
        'menu_icon'=>'dashicons-format-gallery',
        'can_export'=>true,
        'has_archive'=>true,
        'exclude_from_search'=>false,
        'capability_type'=>'page',
    );
    register_post_type('Contacts',$args);
}















?>