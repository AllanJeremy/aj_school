<?php get_header(); ?>

<span class='container'>
    
    <?php
        if(have_posts()):
            the_content();
   ?>
    <hr class='dark-hr'>
   <div class='container-fluid'>
   
    <h2 class='center_text'> LATEST POSTS </h2>

   <?php         

    $length_excerpt = 128;
            #arguments that determine what kind of posts will be retrieved
            $posts_args = array('numberposts'=>3,'category'=>('8,11'));
            $panel_classes = "";
            while(have_posts()) :
             the_post();
             $posts_found = get_posts($posts_args);
             
             //Make decisions based on the number of posts found
             switch (count($posts_found))
             {
                 case 1:
                    $panel_classes = "col-xs-12 col-sm-12 col-md-12";
                    break;
                 case 2:
                     $panel_classes = "col-xs-12 col-sm-12 col-md-6";
                     break;
                 case 3:
                    $panel_classes = "col-xs-12 col-sm-12 col-md-4";
                    break;
                 default:
                    #change the panel type to panel-warning to show that something is wrong
                    $panel_classes = "panel-warning col-xs-12 col-sm-12 col-md-12";
             }

             if($posts_found):
                //For each news post found
                foreach ($posts_found as $home_post):
             
    ?>
 
       <div class="panel home-news <?php echo $panel_classes?>">
            <div class='panel-header '>
                <h3 class="center_text">
                    <a href="<?php echo get_permalink($home_post);?>">
                    <?php echo $home_post->post_title ?>
                    </a>
                </h3>
                
                <p class="center_text">
                    <sub> Posted in -
                   
                    <?php
                        // Printing the categories
                        $tmp_cats = $home_post->post_category;#variable to store the categories of the current posts
                        $toPrint = "";
                        foreach($tmp_cats as $cat_found)
                        {   
                            $toPrint = get_cat_name( $cat_found ).",";
                        }

                        $toPrint = trim($toPrint,",");
                        echo $toPrint;
                        #free up the resources used by this variables
                        unset($tmp_cat);
                        unset($tmp_cats);
                    ?>
                    </sub>
                </p>
            </div>
            <div class='panel-body'>
                <?php echo generate_custom_excerpt($home_post,$length_excerpt,'Read More'); ?>
            </div>
       </div>
       
    <?php
            endforeach;
         endif;
         endwhile;
         
        
        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
    </div>
</span>

<?php get_footer(); ?>