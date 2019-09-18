<?php
require_once(dirname(__FILE__) . '/xyz.php');
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
# 判断是否安装了小宇宙插件
# ------------------------------------------------------------------------------
$filename = WP_PLUGIN_DIR.'/xyz';
if (file_exists($filename) && !is_plugin_active('xyz/xyz.php')) {
    $url = admin_url();
    $html = '<div class="notice notice-warning"><p><b>警告：</b> 检测到您已安装了 <code>小宇宙插件</code><a href="'.$url.'plugins.php">现在去启用？</a></p></div>';
    echo $html;
}elseif(!file_exists($filename)){
    add_action( 'admin_notices', 'xyz_init_check' );
    function xyz_init_check(){
        $script_url = get_template_directory_uri() . '/static/js/xyz-install.js';
        $html = '<div class="notice notice-error"><p><b>错误：</b> 当前主题 缺少依赖插件 <code>小宇宙插件</code> 请先安装并启用 <code>小宇宙插件</code> 插件。<a href="javascript:;" class="install-nc-store-now">现在安装？</a></p></div><script type="text/javascript" src="' . $script_url . '"></script>';
        echo $html;
    }
    if( !is_admin() ){
        wp_die('当前主题 缺少依赖插件 <code>小宇宙插件</code> 请先安装并启用 <a href="https://www.joytheme.com/xyz/">小宇宙插件</a>。');
    }
}else{

# 引用功能
# ------------------------------------------------------------------------------
require_once(dirname(__FILE__) . '/functions/enqueue.php');
require_once(dirname(__FILE__) . '/functions/menu.php');
require_once(dirname(__FILE__) . '/functions/customize.php');
require_once(dirname(__FILE__) . '/functions/taxonomy.php');
require_once(dirname(__FILE__) . '/updater.php');


# 支持自定义功能
# ------------------------------------------------------------------------------
add_theme_support( 'customize-selective-refresh-widgets' );

new Updater(
    [
        'name' => 'Jenney',
        'repo' => 'wowwwai/jenney',
        'slug' => 'jenney',
        'url'  => 'https://www.joytheme.com/',
        'ver'  => 3.2
    ]
);

}

