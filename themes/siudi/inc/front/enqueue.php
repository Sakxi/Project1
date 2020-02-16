<?php

function siudi_styles(){
    wp_register_style('custom_css', get_template_directory_uri() .'/style.css');
    wp_register_style('style_css', get_template_directory_uri() . '/css/style.css');
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css');

    wp_enqueue_style('custom_css');
    wp_enqueue_style('style_css');
    wp_enqueue_style('responsive');
//JS
wp_register_script('bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), false, true);
wp_register_script('appear', get_template_directory_uri() . '/js/appear.js', array('jquery'), false, true);
wp_register_script('select', get_template_directory_uri() . '/js/bootstrap-select.min.js', array('jquery'), false, true);
wp_register_script('isotope_js', get_template_directory_uri() . '/js/isotope.js', array('jquery'), false, true);
wp_register_script('jquery_touchspin', get_template_directory_uri() . '/js/jquery.bootstrap-touchspin.js', array('jquery'), false, true);
wp_register_script('jquery_countto', get_template_directory_uri() . '/js/jquery.countTo.js', array('jquery'), false, true);
wp_register_script('jquery_easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), false, true);
wp_register_script('jquery_enllax', get_template_directory_uri() . '/js/jquery.enllax.min.js', array('jquery'), false, true);
wp_register_script('jquery_fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), false, true);
wp_register_script('jquery_mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), false, true);
wp_register_script('jquery_paroller', get_template_directory_uri() . '/js/jquery.paroller.min.js', array('jquery'), false, true);
wp_register_script('owl', get_template_directory_uri() . '/js/owl.js', array('jquery'), false, true);
wp_register_script('validation', get_template_directory_uri() . '/js/validation.js', array('jquery'), false, true);
wp_register_script('wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), false, true);
wp_register_script('map-helper', get_template_directory_uri() . '/js/map-helper.js', array('jquery'), false, true);
wp_register_script('jquery_ui', get_template_directory_uri() . '/assets/jquery-ui-1.11.4/jquery-ui.js', array('jquery'), false, true);
wp_register_script('jquery_polygot', get_template_directory_uri() . '/assets/language-switcher/jquery.polyglot.language.switcher.js', array('jquery'), false, true);
wp_register_script('timepicker', get_template_directory_uri() . '/assets/timepicker/timePicker.js', array('jquery'), false, true);
wp_register_script('lightbox', get_template_directory_uri() . '/assets/html5lightbox/html5lightbox.js', array('jquery'), false, true);
wp_register_script('themepunch', get_template_directory_uri() . '/plugins/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), false, true);
wp_register_script('themepunchtools', get_template_directory_uri() . '/plugins/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), false, true);
wp_register_script('actions', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), false, true);
wp_register_script('carousel_ex', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.carousel.min.js', array('jquery'), false, true);
wp_register_script('kenburn', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), false, true);
wp_register_script('layeranimation', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), false, true);
wp_register_script('migration', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.migration.min.js', array('jquery'), false, true);
wp_register_script('navigation', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), false, true);
wp_register_script('parallax', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.parallax.min.js', array('jquery'), false, true);
wp_register_script('slideanims', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), false, true);
wp_register_script('video', get_template_directory_uri() . '/plugins/revolution/js/extensions/revolution.extension.video.min.js', array('jquery'), false, true);
wp_register_script('main_slider', get_template_directory_uri() . '/js/main-slider-script.js', array('jquery'), false, true);
wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);


wp_enqueue_script('jquery');
wp_enqueue_script('appear');            
wp_enqueue_script('bundle');
wp_enqueue_script('select');
wp_enqueue_script('isotope_js');
wp_enqueue_script('jquery_touchspin');
wp_enqueue_script('jquery_countto');
wp_enqueue_script('jquery_easing');
wp_enqueue_script('jquery_enllax');
wp_enqueue_script('jquery_fancybox');
wp_enqueue_script('jquery_mixitup');
wp_enqueue_script('jquery_paroller');
wp_enqueue_script('owl');
wp_enqueue_script('validation');
wp_enqueue_script('wow');
wp_enqueue_script('map-helper');
wp_enqueue_script('jquery_ui');
wp_enqueue_script('jquery_polygot');
wp_enqueue_script('timepicker');
wp_enqueue_script('lightbox');
wp_enqueue_script('themepunch');
wp_enqueue_script('themepunchtools');
wp_enqueue_script('actions');
wp_enqueue_script('carousel_ex');
wp_enqueue_script('kenburn');
wp_enqueue_script('layeranimation');
wp_enqueue_script('migration');
wp_enqueue_script('navigation');
wp_enqueue_script('parallax');
wp_enqueue_script('slideanims');
wp_enqueue_script('video');
wp_enqueue_script('main_slider');
wp_enqueue_script('custom');


}
add_action('wp_enqueue_scripts', 'siudi_styles');
?>



