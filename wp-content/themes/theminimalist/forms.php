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
<header class="mainHeader">
    <div class="wrapper">
        <div class="headerSection">
            <div class="sec1">
                <a href="<?php echo home_url();?>" target="_blank" class="logo"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="" /></a>
                <h1 class="h1">We'd Love to hear from you</h1>
            </div>

            <div class="form-wrap">
                <div class="tabs">
                    <h2 class="signup-tab h2"><a class="active" href="#signup-tab-content">Scope my project</a></h2>
                    <h2 class="login-tab h2"><a href="#login-tab-content">Careers</a></h2>
                    <a href="<?php echo home_url();?>" class="close">
                        <h2 class="h2">X</h2>
                    </a>
                </div>
                <!--.tabs-->

                <div class="tabs-content">
                    <div id="signup-tab-content" class="active">
                        <form action="#" method="post">
                           <?php echo apply_shortcodes( '[contact-form-7 id="16" title="careers"]' ); ?>
                        </form>
                    </div>
                    <!--.signup-tab-content-->

                    <div id="login-tab-content">
                        <form action="#" method="post">
                            <?php echo apply_shortcodes( '[contact-form-7 id="15" title="scope my project"]' ); ?>
                        </form>
                    </div>
                    <!--.login-tab-content-->
                </div>
                <!--.tabs-content-->
            </div>
        </div>
    </div>
</header>

<section>
    <!--.form-wrap-->
</section>

<?php get_footer();?>