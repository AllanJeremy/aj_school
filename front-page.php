<?php get_header(); ?>

<iv class='container'>
    <?php
        if(have_posts()):
            the_content();
            while(have_posts()) :
            the_post();
    ?>
        <h1 class='center_text'>Home - <?php the_title();?></h1>
        <?php the_content( "Some text","Some teaser" );?>
    
    <?php
         endwhile;
         
        
        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
</div>

<?php get_footer(); ?>