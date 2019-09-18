<?php

if( class_exists( 'CSF' ) ) {

    $prefix = 'jenney_taxonomy';

    CSF::createTaxonomyOptions( $prefix, array(
        'taxonomy'  => 'category',
        'data_type' => 'unserialize',
    ) );

    CSF::createSection( $prefix, array(
        'fields' => array(
            array(
                'id'        => 'cat_style',
                'title'     => '列表页样式',
                'type'      => 'image_select',
                'options'   => array(
                    'style1'   =>get_template_directory_uri().'/static/img/cat-style1.png',
                    'style2'    =>get_template_directory_uri().'/static/img/cat-style2.png',
                ),
                'default'   => 'style1'
            ),

        )
    ) );

}