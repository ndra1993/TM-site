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
					<img src="<?php echo get_template_directory_uri();?>/images/close-small.png" alt=""> </a>
			</div>
			<!--.tabs-->
			<div class="tabs-content">
				<div id="signup-tab-content" class="show active">
					<form action="#" method="post" enctype="multipart/form-data">
						 <?php echo apply_shortcodes( '[contact-form-7 id="16" title="careers"]' ); ?>
					</form>
				</div>
				<!--.signup-tab-content-->
				<div id="login-tab-content">
					<form action="#" method="post" enctype="multipart/form-data">
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

$(document).ready(function() {
        $('.field').on('input', function() {
            $(this).parent().parent().toggleClass('not-empty', this.value.trim().length > 0);
        });
        $(function() {
            $('.field').focusout(function() {
                var text_val = $(this).val();
                $(this).parent().parent().toggleClass('not-empty', text_val !== "");
            }).focusout();
        });
        $('.ctcfield').on('input', function() {
            $(this).parent().parent().parent().toggleClass('not-empty', this.value.trim().length > 0);
        });
        $(function() {
            $('.ctcfield').focusout(function() {
                var text_val = $(this).val();
                $(this).parent().parent().parent().toggleClass('not-empty', text_val !== "");
            }).focusout();
        });
        $('.uploadfield').on('input', function() {
            $(this).parent().parent().parent().parent().toggleClass('not-empty', this.value.trim().length > 0);
        });
        $(function() {
            $('.uploadfield').focusout(function() {
                var text_val = $(this).val();
                $(this).parent().parent().parent().parent().toggleClass('not-empty', text_val !== "");
            }).focusout();
        });


        $(".rd2").on("click", function() {
            if ($(this).find('input[type="radio"]').is(':checked')) {
                $('.radiolabel').removeClass('not-empty');
                $('.radiolabel').addClass('not-empty');
            }
        });
    });
</script>