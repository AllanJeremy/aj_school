    
    </div><!--main body div-->

    </main>
    
    <footer class='site-footer'>
    <div class="footer-content">
            <nav class="nav-footer col-xs-12 center_text">
                <?php
                    $args_footer_left = array("theme_location"=>"footer_nav");
                    wp_nav_menu( $args_footer_left);
                ?>
            </nav>

        </div>      

        <div class='col-xs-12'>
            
            <div class='hidden-xs social col-xs-12'>
                <a class='social-icon' href="#">Facebook</a>
                <a class='social-icon' href="#">Twitter</a>
                <br class='visible-xs visible-sm'>
            </div>

            <div class='col-xs-12'>
                <p class='center_text' >
                &copy
                <?php
                    echo date('Y');
                    echo " <a href='".get_home_url()."'>School name</a>";
                ?>
                </p>
            </div>
        </div>
    </div>

    <?php wp_footer(); ?>
    </footer>
</body>
</html>