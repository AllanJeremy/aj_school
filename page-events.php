<?php get_header(); ?>

<span class='container'>
    <?php
        if(have_posts()):
            the_content();
            while(have_posts()) :
            the_post();
    ?>

    
    <?php
         endwhile;
         
        
        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
</span>

<?php get_footer(); ?>