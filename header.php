<!--本页面共查询 <?php echo get_num_queries(); ?> 次，生成页面耗时<?php timer_stop(8); ?> 秒-->

<!DOCTYPE html>
<html lang="zh_hans">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<?php wp_head()?>
<?php $options = get_option( 'jenney_customize' );?>
<?php $header_img = $options['header_img'];?>
</head>
<body>
<main class="uk-background-muted uk-section uk-padding-remove-bottom" style="min-height: 252px; padding-top: 60px;">
    <div class="uk-container-small uk-container uk-margin-medium-bottom">
        <div class="uk-grid uk-grid-stack uk-first-column" uk-grid="">
            <div class="uk-width-1-1@s uk-first-column">
                <div class="uk-first-column">

                    <div class="el-item uk-card uk-card-default uk-card-hover uk-scrollspy-inview uk-animation-slide-bottom-medium">

                        <header class="uk-position-relative uk-light section_header">

                            <div <?php uk_bg_src_srcset($header_img['id'])?> class="uk-height-medium uk-overflow-hidden"></div>

                            <div class="site_info uk-position-absolute uk-position-bottom uk-text-<?php echo $options['header_cat'] ?> uk-padding uk-padding-remove-vertical">

                                <!--    logo start -->
                                <div class="uk-section-small">
                                    <h1 class="logo uk-h3 uk-margin-auto-left uk-margin-remove-bottom">
                                        <a class="uk-link-reset" href="<?php bloginfo('url')?>">
                                        <?php
                                        $title = $options['site_title'];
                                        if($title){
                                            echo $title ;
                                        }else{
                                            bloginfo('title');
                                        }
                                        ?>
                                        </a>
                                    </h1>
                                    <div class="solgan uk-text-meta">
                                        <?php
                                        $description = $options['site_desc'];
                                        if($description){
                                            echo $description ;
                                        }else{
                                            bloginfo('description');
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!--    logo end -->

                                <!--    menu start -->
                                <nav class="uk-navbar-container uk-navbar-transparent"  uk-navbar="{&quot;align&quot;:&quot;center&quot;,&quot;boundary&quot;:&quot;!.uk-navbar-container&quot;,&quot;dropbar&quot;:true,&quot;dropbar-anchor&quot;:&quot;!.uk-navbar-container&quot;,&quot;dropbar-mode&quot;:&quot;slide&quot;}">
                                    <div class="uk-navbar-<?php echo $options['header_cat'] ?> nav-overlay">
                                        <ul class="uk-navbar-nav">
                                            <?php xyz_menu_with_walker('main_menu', new  Walker_main_menu())?>
                                        </ul>
                                    </div>
                                </nav>
                                <!--     menu end -->

                            </div>
                        </header>
