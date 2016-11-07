    
    </main>
    
    <footer class='site-footer'>
    <div class="footer-content">
            <nav class="footer-nav col-xs-12 center_text">
                <?php
                    $args_footer_left = array("theme_location"=>"footer_nav");
                    wp_nav_menu( $args_footer_left);
                ?>
            </nav>   
            
            <div class='center_text col-xs-12'>
                <p>
                &copy
                <?php
                    echo date('Y');
                    echo " <a href='".get_home_url()."'>Mwanicos Academy</a>";
                ?>
                </p>
            </div>
        
    </div>

    <?php wp_footer(); ?>
    </footer>
</body>
</html>