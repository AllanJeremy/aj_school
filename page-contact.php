<?php get_header(); ?>

<span class='container'>
    <?php
        if(have_posts()):
            the_content();#elementor
?>  

<hr class='dark-hr'>
<div class='container'>
    <h2 class='center_text'>SEND US A MESSAGE</h2>
    <form class='form' method='POST'>
        <div class='form-group col-xs-12 col-sm-6'>
            <label class='control-label' for='sender_name'>Your Name</label>
            <input class ='form-control' type='text' name='sender_name' placeholder='Your Name' id='sender_name'>
        </div>
       
        <div class='form-group col-xs-12 col-sm-6'>
            <label class='control-label' for='sender_email'>Email Address</label>
            <input class ='form-control' type='email' name='sender_email' placeholder='Email Address' id='sender_email'>
        </div>

        <div class='form-group col-xs-12'>
            <label class='control-label' for='sender_message'>Your message</label>
            <textarea class ='form-control'name='sender_message' placeholder='Enter your message here' id='sender_message'></textarea>
        </div>
        <div class='form-group col-xs-12'>
            <h4>Reason for contacting</h4>
            <label class='control-label col-xs-12 col-sm-6 col-md-3' for='reason_admission'>
                <input  type='checkbox' name='reason_admission' id='reason_admission' checked></input>
                Admission Inquiries
            </label>
            
            <label class='control-label col-xs-12 col-sm-6 col-md-3' for='reason_career'>
                <input  type='checkbox' name='reason_career' id='reason_career'></input>
                Career Inquiries
            </label>
            
            <label class='control-label col-xs-12 col-sm-6 col-md-3' for='reason_feedback'>
                <input  type='checkbox' name='reason_feedback' id='reason_feedback'></input>
                Feedback/Suggestions
            </label>
            
            <label class='control-label col-xs-12 col-sm-6 col-md-3' for='reason_other'>
                <input  type='checkbox' name='reason_other' id='reason_other'></input>
                Other
            </label>
        </div>

        <hr class='dark-hr'>

        <div class='form-group col-xs-12'>
            <button type='submit' class='btn dark-btn col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4'>SEND MESSAGE</button>
        </div>
    </form>

</div>

<hr class='dark-hr'>

<?php
        
        else:
            echo "<p>No posts available</p>";
        
        endif;
    ?>
</span>

<?php get_footer(); ?>