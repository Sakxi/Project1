<?php
include (get_template_directory(). '/inc/front/enqueue.php');
include (get_template_directory(). '/inc/front/setup.php');
include (get_template_directory(). '/inc/theme-customizer.php');
include (get_template_directory().'/inc/customizer/social.php');

add_action('customize_register','siudi_customize_register');
function siundi_widgets(){
    register_sidebar(array(
        'name'=>'Blog Sidebar',
        'id'=>'blog_sidebar',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ));

}
add_action('widgets_init','siundi_widgets');
?>