<?php get_header(); ?>

<span class='container'>
    <?php
        if(have_posts()):
            while(have_posts()) :
            the_post();
    ?>

    <div class="container light_bg">
        <h1 class='center_text'><?php the_title()?></h1>
        <?php the_content();?>
    </div>
    <?php
         endwhile;
         
        
        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
</span>

<?php get_footer(); ?>