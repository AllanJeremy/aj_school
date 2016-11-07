<?php get_header(); ?>

<div class='container-fluid' id='home-container'>
   
    <div class='offset-top col-xs-12'>
        <img src="<?php echo get_home_url().'/media/landing.png' ?>" alt="landing page image" class='img-responsive caption-img'/>
        <div class='center-caption center_text'>
            <!--<h1>Welcome to Mwanicos Academy</h1>
            <p>Our students are happy, and so will you be as a parent</p>-->
        </div>
    </div>
    

    <!--About us-->
    <div class='home-dark home-panel col-xs-12 col-md-8 center_text'>
        About us
    </div>   
    
    <!--Ad panel-->
    <div class='home-dark home-panel col-xs-12 col-md-3 col-md-offset-1 ad'>
        Some advertisement
    </div>

    <!--Alumni quote-->
    <div class='home-dark home-panel col-xs-12 testimonial'>
        Some testimonial
    </div>

    <div class='home-dark home-panel col-xs-12'>
        Get started
    </div>
    <hr class='hidden-xs'/>

    <!--Latest blog posts-->
    <div class='center_text home-panel col-xs-12 col-sm-4'>
        Blog post 1
    </div>

     <div class='center_text home-panel col-xs-12 col-sm-4'>
         Blog post 2
    </div>

    <div class='center_text home-panel col-xs-12 col-sm-4'>
        Blog post 3
    </div>


</div>

<?php get_footer(); ?>