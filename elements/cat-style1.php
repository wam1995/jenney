<?php if (have_posts()):while (have_posts()):the_post()?>
    <article class="uk-article ">

        <h1 class="article_title uk-h4">
            <a class="uk-link-reset" href="<?php the_permalink()?>"><?php the_title()?></a>
        </h1>

        <ul class="uk-margin-top uk-margin-remove-bottom uk-subnav uk-subnav-divider">
            <li><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('Y-m-d')?></time></li>
            <li><a href="<?php the_permalink()?>#respond"><?php echo get_comments_number()?>条评论</a></li>
        </ul>

        <p class="uk-panel uk-panel-box uk-text-truncate"><?php the_excerpt()?></p>

        <div class="uk-grid-small uk-child-width-auto uk-grid" uk-grid="">
            <div class="uk-first-column">
                <a class="uk-button uk-button-text" href="<?php the_permalink()?>">阅读全文</a>
            </div>
        </div>

    </article>
    <hr>
<?php endwhile;endif;?>