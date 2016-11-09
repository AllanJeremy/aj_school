<?php get_header(); ?>

<span class='job-list container'>

<h1 class='center_text'>Careers</h1>
    <!--For ease of DOM traversal-->
 
    <?php
        if(have_posts()):
           
            $careers_category = 11;

            the_content();//will display elementor content
            $job_args = array("category"=>$careers_category);
            $job_posts = get_posts( $job_args );

            $job_title = "";
            $job_post = "";

            //if job related posts are found
            if($job_posts):
                foreach ($job_posts as $job):
                    $job_title = $job->post_title;
                    $job_post = $job->post_content;
                    $job_excerpt = $job->post_excerpt;
                
?>            

            

        <div class='job container'>

                <h3 class=''>
                    <a href="<?php the_permalink( $job )?>">Job Vacancy -
                        <?php echo $job_title?>
                    </a>
                </h3>
        
        
        <?php echo "<p>" .$job_excerpt."</p>";?>
        
        </div>
    
<?php   
              endforeach;
             else:
                echo "<h4 class='center_text'>There are currently no vacancies available. Once we post them, they will appear here. Please Check again later.</h4>";

            endif;//End if for if(job_posts) 

        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
</span>

<?php get_footer(); ?>