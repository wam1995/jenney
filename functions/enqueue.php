<?php

# 加载CSS到<head>中  [Enqueue css]
function wpstorm_enqueue_styles()
{
    wp_enqueue_style('theme',   get_template_directory_uri() ."/static/css/theme.css",   array(), false, 'all');
}
# Add CSS to the theme
add_action('wp_enqueue_scripts', 'wpstorm_enqueue_styles', 3);

# =================================================

# 加载JavaScript到footer [Add JavaScript to footer]
function jenney_enqueue_scripts() {
   wp_enqueue_script( 'uikit.min'        ,get_template_directory_uri() . "/static/js/uikit.min.js"   ,array() , false , false );
   wp_enqueue_script( 'theme'            ,get_template_directory_uri() . "/static/js/theme.js"       ,array() , false , false );
}
# Add JS to the theme
add_action( 'wp_enqueue_scripts' , 'jenney_enqueue_scripts' , 2);
