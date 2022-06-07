<?php get_header(); /*Template Name: forms*/  
/* $receiver = "indrajeetzha@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:indrajeet.jha@theminimalist.in";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}

exit; */
?>
<div class="wrapper">
	<div class="formSection">
		<div class="sec1">
			<a href="<?php echo site_url();?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""></a>
			<h1 class="h1">We’d Love to hear from you</h1> </div>
		<div class="form-wrap">
			<div class="tabs" id="myTab">
				<h2 class="signup-tab h2"><a href="#signup-tab-content" data-toggle="tab">Scope my project</a></h2>
				<h2 class="login-tab h2"><a href="#login-tab-content" data-toggle="tab">Careers</a></h2>
				<a href="<?php echo site_url();?>" class="close">
					<h2 class="h2">X</h2> </a>
			</div>
			<!--.tabs-->
			<div class="tabs-content">
				<div id="signup-tab-content" class="show active">
					<form action="#" method="post">
						 <?php echo apply_shortcodes( '[contact-form-7 id="16" title="careers"]' ); ?>
					</form>
				</div>
				<!--.signup-tab-content-->
				<div id="login-tab-content">
					<form action="#" method="post">
						<?php echo apply_shortcodes('[contact-form-7 id="15" title="scope my project"]');?>
					</form>
				</div>
				<!--.login-tab-content-->
			</div>
			<!--.tabs-content-->
		</div>
	</div>
</div>
<section>

</section>
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