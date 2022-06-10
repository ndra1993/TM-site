<?php get_header(); /*Template Name: thanks*/ 
?>
<div class="wrapper">
    <div class="formSection">
        <div class="sec1">
            <a href="<?php echo site_url();?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" /></a>
            <h1 class="h1">We'd Love to hear from you</h1>
        </div>

        <div class="form-wrap">
			<div class="tabs" id="myTab">
				<h2 class="signup-tab h2"><a href="#signup-tab-content" data-toggle="tab">Scope my project</a></h2>
				<h2 class="login-tab h2"><a href="#login-tab-content" data-toggle="tab">Careers</a></h2>
				<a href="<?php echo site_url();?>" class="close">
					<img src="<?php echo get_template_directory_uri();?>/images/close-small.png" alt=""> </a>
			</div>
            <!--.tabs-->

            <div class="tabs-content">
                <div id="signup-tab-content" class="show active">
                    <div class="thankYou">
                        <img src="<?php echo get_template_directory_uri();?>/images/thanks.png" class="thanksImage" />
                        <h2 class="h2">Thank you for getting in touch!</h2>
                        <h3>We appreciate you contacting us One of our colleagues will get back in touch with you soon!Have a great day!</h3>
                        <div>
                            <a href="<?php echo site_url();?>" target="_blank">Go to home</a>
                        </div>
                    </div>
                </div>
                <!--.signup-tab-content-->

                <div id="login-tab-content">
                    <div class="thankYou">
                        <img src="<?php echo get_template_directory_uri();?>/images/thanks.png" class="thanksImage" />
                        <h2 class="h2">Thank you for getting in touch!</h2>
                        <h3>We appreciate you contacting us One of our colleagues will get back in touch with you soon!Have a great day!</h3>
                        <div>
                            <a href="<?php echo site_url();?>">Go to home</a>
                        </div>
                    </div>
                </div>
                <!--.login-tab-content-->
            </div>
            <!--.tabs-content-->
        </div>
    </div>
</div>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) { 
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab'); 
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
        $('#myTab a[href="' + activeTab + '"]').addClass('active');
    }
});
</script>