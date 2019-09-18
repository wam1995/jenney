

    <footer class="copy uk-section  uk-background-muted uk-margin-remove-vertical  uk-padding-remove-vertical">

        <div class="uk-container-small uk-container uk-visible@m uk-scrollspy-inview uk-animation-slide-bottom-medium">
            <div class="uk-grid uk-grid-stack" uk-grid="">

                <div  class="friendlink uk-width-1-1  uk-visible@m uk-padding-large uk-padding-remove-vertical uk-text-center">
                    <?php
                        $options = get_option('jenney_customize');
                        $cp_groups = $options['cp_group'];
                        if(is_array($cp_groups)):foreach ( $cp_groups as $cp_group ):
                        $cp_title = $cp_group['cp_title'];
                        $cp_link = $cp_group['cp_link'];
                    ?>
                    <small><a class=" uk-link-muted" href="<?php echo $cp_link?>"><?php echo $cp_title?></a></small>
                    <?php endforeach;endif;?>
                </div>
            </div>
        </div>
        <div class="uk-container text-center uk-margin-small-top">
            <div class="uk-scrollspy-inview uk-animation-slide-bottom-medium  uk-margin-small-bottom">

                <div class="copyright uk-text-meta">
                    Copyright © 2018 <?php bloginfo('name')?> • THEME BY <a href="https://www.joytheme.com">JOYTHEME</a>
                </div>

            </div>
        </div>

    </footer>
    <?php wp_footer()?>
</body>
</html>

