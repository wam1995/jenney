<?php
    CSF::createCustomizeOptions( 'jenney_customize' );

    CSF::createSection( 'jenney_customize', array(
        'title'  => '头部设置',
        'transport'       => 'refresh',
        'capability'      => 'manage_options',
        'save_defaults'   => true,
        'enqueue_webfont' => true,
        'async_webfont'   => true,
        'output_css'      => true,
        'assign' => 'title_tagline',
        'fields' => array(

            array(
                'id'    => 'site_title',
                'type'  => 'text',
                'title' => '网站标题',

            ),
            array(
                'id'    => 'site_desc',
                'type'  => 'text',
                'title' => '网站描述',
            ),
            array(
                'id'      => 'header_img',
                'url'     => false,
                'title'   => '头部图片',
                'type'    => 'media',
                'library' => 'image',
                'preview' => true,
                'preview_size'=>'full',
            ),

            array(
                'id'    => 'header_cat',
                'title' => '头部风格',
                'type'      => 'image_select',
                'options'   => array(
                    'left'   =>get_template_directory_uri().'/static/img/header-style1.png',
                    'right'  =>get_template_directory_uri().'/static/img/header-style2.png',
                    'center' =>get_template_directory_uri().'/static/img/header-style3.png',
                ),
                'default'   => 'right'
            ),


        )
    ) );
    CSF::createSection( 'jenney_customize', array(
        'title'  => '首页设置',
        'transport'       => 'refresh',
        'capability'      => 'manage_options',
        'save_defaults'   => true,
        'enqueue_webfont' => true,
        'async_webfont'   => true,
        'output_css'      => true,
        'assign'          => 'title_tagline',
        'fields'          => array(

            array(
                'id'        => 'index_list_cat',
                'title'     => '首页列表风格',
                'type'      => 'image_select',
                'options'   => array(
                   'current'=>get_template_directory_uri().'/static/img/list-style1.png',
                   'simple' =>get_template_directory_uri().'/static/img/list-style2.png',
                ),
                'default'   => 'current'
            ),
        )
    ) );
# 合作伙伴
# ------------------------------------------------------------------------------
CSF::createSection( 'jenney_customize', array(
    'title'  => '友情链接',
    'fields' => array(
        array(
            'id'        => 'cp_group',
            'type'      => 'group',
            'title'     => '添加友链',
            'fields'    => array(
                array(
                    'id'    => 'cp_title',
                    'type'  => 'text',
                    'title' => '友链名称',
                ),
                array(
                    'id'    => 'cp_link',
                    'type'  => 'text',
                    'title' => '跳转链接',
                ),
            ),
        ),
    )
) );
/**
 * 添加蓝色铅笔
 */
function add_blue_pencil( $wp_customize ) {

    $wp_customize->selective_refresh->add_partial(
        'jenney_customize[site_title]',
        array(
            'selector'        => '.logo',
        )
    );
    $wp_customize->selective_refresh->add_partial(
        'jenney_customize[site_desc]',
        array(
            'selector'        => '.solgan',
        )
    );

    $wp_customize->selective_refresh->add_partial(
        'jenney_customize[header_img]',
        array(
            'selector'        => '.section_header',
        )
    );
    $wp_customize->selective_refresh->add_partial(
        'jenney_customize[index_list_cat]',
        array(
            'selector'        => '#cat_style',
        )
    );


}
add_action( 'customize_register', 'add_blue_pencil' );

