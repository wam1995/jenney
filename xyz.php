<?php
/*================================
GanSu 4th Dimension Inc
@author Wang Fugui
@email  Wangfugui@joytheme.com
@blog   https://Wangfugui.com
================================*/

if( !class_exists('Joytheme_Xyz_Skin') ){

    include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );

    class Joytheme_Xyz_Skin extends WP_Upgrader_Skin {

        public function feedback( $stream ){

        }

        public function header(){

        }

        public function footer(){

        }
    }

}

if( !function_exists('joytheme_xyz_install_program') ){

    function joytheme_xyz_install_program(){

        if( !current_user_can('manage_options') ) die('蛤？');

        $api_url = 'https://www.joytheme.com/wp-content/themes/JOY2019/action/xyz.php';

        $response = wp_remote_get( $api_url );

        if ( is_array( $response ) && $response['response']['code'] == 200 ) {
            $body = json_decode( $response['body'] );

            if( isset( $body->status ) && $body->status == 200 ){

                include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );
                include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                include_once( ABSPATH . 'wp-admin/includes/file.php' );
                include_once( ABSPATH . 'wp-admin/includes/misc.php' );

                remove_action( 'upgrader_process_complete', 'wp_update_plugins' );
                remove_action( 'upgrader_process_complete', 'wp_update_themes' );

                $upgrader = new Plugin_Upgrader( new Joytheme_Xyz_Skin() );

                if( $upgrader->install( $body->url, array( 'clear_update_cache' => false ) ) ){

                    $plugin_file = $upgrader->plugin_info();

                    $msg = array(
                        'status' => 200,
                        'url'    => admin_url( 'plugins.php?action=activate&plugin=' . urlencode( $plugin_file ) . '&_wpnonce=' . wp_create_nonce( 'activate-plugin_' . $plugin_file ) )
                    );


                }else{
                    $msg = array(
                        'status' => 500,
                        'msg'    => '安装失败，请稍后再试'
                    );
                }

            }else{

                $msg = array(
                    'status' => 500,
                    'msg'    => '远程请求错误'
                );

            }

        }else{

            $msg = array(
                'status' => 500,
                'msg'    => '远程请求错误'
            );

        }

        echo json_encode( $msg );
        die();
    }
    add_action( 'wp_ajax_joytheme-xyz-install', 'joytheme_xyz_install_program' );

}

