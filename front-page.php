<?php get_header()?>
<?php
    $options = get_option('jenney_customize');
    $list_style = isset($options['index_list_cat']) ?$options['index_list_cat'] : '';
?>
                        <div class="uk-card-body" id="cat_style">
                            <section class="article-list">
                                <?php
                                switch ($list_style):
                                    default:
                                        include 'elements/cat-style1.php';
                                    case 'current':
                                        include 'elements/cat-style1.php';
                                        break;
                                    case 'simple':
                                        include 'elements/cat-style2.php';
                                        break;
                                endswitch;
                                ?>
                            </section>
                            <?php xyz_pagenavi(); ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>
<?php get_footer()?>