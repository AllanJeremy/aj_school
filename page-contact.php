<?php get_header(); ?>

<span class='container'>
    <?php
        if(have_posts()):
            the_content();
?>
    <form class='form'>
    </form>
<?php
        
        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
</span>

<?php get_footer(); ?>