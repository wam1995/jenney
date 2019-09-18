<!--样式二：开始-->
<div class="uk-container uk-container-small">

    <div class="list-container" uk-scrollspy="target: > .article-item; cls:uk-animation-slide-bottom-medium; ">

        <?php if (have_posts()):while (have_posts()):the_post()?>
            <article class="article-item uk-margin-small-top uk-margin-small-bottom uk-scrollspy-inview" uk-scrollspy-class="">
                <div class="uk-grid" uk-grid="">
                    <a class="uk-width-expand uk-first-column" href="<?php the_permalink()?>">
                        <h2 class="article_title uk-h5"><?php the_title_attribute()?></h2>
                    </a>
                    <div class=" article-meta text-right uk-width-expand uk-visible@m">
                        <span class="item uk-text-meta font-size-lower uk-display-inline-block">
                            <time datetime="<?php the_time('Y-m-d')?>" class="font-size-lower"><?php the_time('Y-m-d')?></time>
                        </span>
                    </div>
                </div>
                <hr>
            </article>
        <?php endwhile;endif;?>

    </div>

</div>
<!--样式二：结束-->