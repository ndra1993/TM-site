<?php get_header(); /*Template Name: thanks*/ 
?>

<style>
    .adderssBox{width: 330px;margin-top:110px;position:relative;}
    .adderssBox:before{content:'';position:absolute;top:-12px;left:0;width:70px;height:2px;background:#000;}
    .addressHeading{font-family: "Poppins", sans-serif;font-size:20px;font-weight:700;color:#000; line-height: 24px;}
    .addressData{font-family: "Poppins", sans-serif;font-size:16px;font-weight:400;color:#000;line-height: 30px;}
    @media screen and (max-width: 1450px) {
        .addressHeading{font-size: 18px;line-height: 20px;}
        .addressData{font-size: 14px; line-height: 25px;}
    }
</style>
<div class="wrapper">
    <div class="formSection thanksSection">
        <div class="sec1">
            <a href="https://ixdtm.com/projects/theminimalist-site/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt=""></a>
            <h1 class="h1 font135 fontW800">We’d love to hear from you.</h1>
            <div class="adderssBox">
                <h4 class="addressHeading">Minimalist Solutions Pvt Ltd</h4>
                <p class="addressData">Redbrick Offices Limited, HDIL Kaledonia, Opp D’Mart, 1st Floor, A wing, Sahar Road, Andheri (East), Mumbai 400069.</p>
            </div>
         </div>

        <div class="form-wrap">
			<div class="tabs" id="myTab">
                <h2 class="signup-tab h2 font24 fontW800"><a href="#signup-tab-content" data-toggle="tab">Business Enquiries</a></h2>
                <h2 class="login-tab h2 font24 fontW800"><a href="#login-tab-content" data-toggle="tab">Careers</a></h2>
                <a href="https://ixdtm.com/projects/theminimalist-site/" class="close">
                    <img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2022/06/close.png" alt=""> </a>
            </div>
            <!--.tabs-->

            <div class="tabs-content">
                <div id="signup-tab-content" class="show active">
                    <div class="thankYou">
                        <img src="<?php echo get_template_directory_uri();?>/images/thanks.png" class="thanksImage" />
                        <h2 class="h2 font24 fontW800">Thank you for getting in touch!</h2>
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
                        <h2 class="h2 font24 fontW800">Thank you for getting in touch!</h2>
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
        <a href="https://ixdtm.com/projects/theminimalist-site/" class="thanksClose">
            <img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2022/12/thanks-close.png" alt=""> 
        </a>
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