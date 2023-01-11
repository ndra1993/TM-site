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
<style>
	.adderssBox{width: 300px;margin-top:110px;position:relative;}
	.adderssBox:before{content:'';position:absolute;top:-12px;left:0;width:70px;height:2px;background:#000;}
	.addressHeading{font-family: "Poppins", sans-serif;font-size:20px;font-weight:700;color:#000; line-height: 24px;}
	.addressData{font-family: "Poppins", sans-serif;font-size:16px;font-weight:400;color:#000;line-height: 30px;}
	
	@media screen and (max-width: 1450px) {
		.adderssBox{margin-top:85px;}
		.addressHeading{font-size: 18px;line-height: 20px;}
		.addressData{font-size: 14px; line-height: 25px;}
	}
	
	@media screen and (max-width:900px) {
	.formSticky{position: sticky;z-index: 1;top: 0;}
    .header-up {top: -72px;}
    .addTop{top:0 !important;}
}
</style>

<div class="wrapper">
	<div class="formSection">
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
				<div id="signup-tab-content" class="active">
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


<script>
	document.querySelectorAll(".select-wrap").forEach(function(wrap) {
		let select = wrap.querySelector(".custom-select");
		let classes = select.getAttribute("class"),
			id = select.getAttribute("id"),
			name = select.getAttribute("name");
		let template = '<div class="' + classes + '">';
		template += '<span class="custom-select-trigger">' + "Per Year" + '</span>';
		template += '<div class="custom-options">';
		select.querySelectorAll("option").forEach(function(option) {
			template += '<span class="custom-option' + '"data-value="' + option.getAttribute("value") + '">' + option.innerText + '</span>';
		});
		template += '</div></div>';
		let select_wrapper = document.createElement('div');
		select.style.display = 'none';
		select_wrapper.innerHTML = `<div class="custom-select-wrapper">${template}</div>`;
		wrap.appendChild(select_wrapper);
	});

	document.querySelector(".custom-select-trigger").addEventListener("click", function() {
		document.querySelector(".custom-select-trigger").closest(".custom-select").classList.toggle("opened");
	});
	document.querySelectorAll(".custom-option").forEach((option) => {
		option.addEventListener("click", function() {
			option.closest(".select-wrap").querySelector("select").value = option.getAttribute("data-value");
			option.closest(".custom-select").classList.remove("opened");
			option.closest(".custom-select").querySelector(".custom-select-trigger").innerText = option.innerText;
		});
	});
	




$(function () {
  //the shrinkHeader variable is where you tell the scroll effect to start.
  var shrinkHeader = 1;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('.page-template-forms header').addClass('header-up');
      $('.formSection').addClass('formSticky');
    } else {
      $('.page-template-forms header').removeClass('header-up');
      $('.formSection').removeClass('formSticky');
     }
  });

  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
});
	

$('#menu').click(function(){
    if($(this).is(":checked")) {
        $('.page-template-forms header').addClass("addTop");
    } else {
        $('.page-template-forms header').removeClass("addTop");
    }
});	
</script>






<script>
	document.querySelectorAll(".select-wrap-two").forEach(function(wrap) {
		let select = wrap.querySelector(".custom-select_two");
		let classes = select.getAttribute("class"),
			id = select.getAttribute("id"),
			name = select.getAttribute("name");
		let template = '<div class="' + classes + '">';
		template += '<span class="custom-select-trigger-two">' + "Per Year" + '</span>';
		template += '<div class="custom-options_two">';
		select.querySelectorAll("option").forEach(function(option) {
			template += '<span class="custom-option_two' + '"data-value="' + option.getAttribute("value") + '">' + option.innerText + '</span>';
		});
		template += '</div></div>';
		let select_wrapper = document.createElement('div');
		select.style.display = 'none';
		select_wrapper.innerHTML = `<div class="custom-select-wrapper-two">${template}</div>`;
		wrap.appendChild(select_wrapper);
	});

	document.querySelector(".custom-select-trigger-two").addEventListener("click", function() {
		document.querySelector(".custom-select-trigger-two").closest(".custom-select_two").classList.toggle("opened");
	});
	document.querySelectorAll(".custom-option_two").forEach((option) => {
		option.addEventListener("click", function() {
			option.closest(".select-wrap-two").querySelector("select").value = option.getAttribute("data-value");
			option.closest(".custom-select_two").classList.remove("opened");
			option.closest(".custom-select_two").querySelector(".custom-select-trigger-two").innerText = option.innerText;
		});
	});
</script>

<script>
	document.querySelectorAll(".select-wrap-three").forEach(function(wrap) {
		let select = wrap.querySelector(".custom-select_three");
		let classes = select.getAttribute("class"),
			id = select.getAttribute("id"),
			name = select.getAttribute("name");
		let template = '<div class="' + classes + '">';
		template += '<span class="custom-select-trigger-three">' + "User Experience Designer" + '</span>';
		template += '<div class="custom-options_three">';
		select.querySelectorAll("option").forEach(function(option) {
			template += '<span class="custom-option_three' + '"data-value="' + option.getAttribute("value") + '">' + option.innerText + '</span>';
		});
		template += '</div></div>';
		let select_wrapper = document.createElement('div');
		select.style.display = 'none';
		select_wrapper.innerHTML = `<div class="custom-select-wrapper-three">${template}</div>`;
		wrap.appendChild(select_wrapper);
	});

	document.querySelector(".custom-select-trigger-three").addEventListener("click", function() {
		document.querySelector(".custom-select-trigger-three").closest(".custom-select_three").classList.toggle("opened");
	});
	document.querySelectorAll(".custom-option_three").forEach((option) => {
		option.addEventListener("click", function() {
			option.closest(".select-wrap-three").querySelector("select").value = option.getAttribute("data-value");
			option.closest(".custom-select_three").classList.remove("opened");
			option.closest(".custom-select_three").querySelector(".custom-select-trigger-three").innerText = option.innerText;
		});
	});



</script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

