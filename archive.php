<?php get_header()?>
                        <section class="uk-card-body uk-background-muted">
                            <h1 class="uk-h2 ">
                                <?php the_archive_title()?>
                            </h1>
                        </section>

                        <main class="article-list uk-card-body">
                            <section class="article-list">
                            <?php
                                $cat_ID = get_query_var('cat');
                                $cat_style = get_term_meta( $cat_ID, 'cat_style', true );
                            ?>
                            </section>
                                <?php
                                switch ($cat_style):
                                    default:
                                        include 'elements/cat-style1.php';
                                    case 'style1':
                                        include 'elements/cat-style1.php';
                                        break;
                                    case 'style2':
                                        include 'elements/cat-style2.php';
                                        break;
                                endswitch;
                                ?>
                            <?php xyz_pagenavi(); ?>
                        </main>

                    </div>
                </div>

            </div>

        </div>
    </div>

</main>
<?php get_footer()?>