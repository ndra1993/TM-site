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
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
<style>
	
	
	@media screen and (max-width:900px) {
	.formSticky{position: sticky;z-index: 1;top: 0;}
    .header-up {top: -72px;}
    .addTop{top:0 !important;}
}
</style>
<?php
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link ;
 ?>
<div class="wrapper">
	<div class="formSection">
		<div class="sec1">
			<a href="<?php echo site_url('/homepage-two/'); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt=""></a>
			<h1 class="h1 font135 fontW800">We’d love to hear from you.</h1>
			<div class="adderssBox">
				<img src="<?php bloginfo('template_directory'); ?>/images/location.gif" alt="">
				<h4 class="addressHeading">Minimalist Solutions Pvt Ltd</h4>
				<p class="addressData">Redbrick Offices Limited, HDIL Kaledonia, Opp D’Mart, 1st Floor, A wing, Sahar Road, Andheri (East), Mumbai 400069.</p>
			</div>
		 </div>
		<div class="form-wrap">
			<div class="tabs" id="myTab">
				<h2 class="signup-tab h2 font24 fontW800"><a href="#signup-tab-content" data-toggle="tab">Business Enquiries</a></h2>
				<h2 class="login-tab h2 font24 fontW800"><a href="#login-tab-content" data-toggle="tab">Careers</a></h2>
				<a href="<?php echo site_url('/homepage-two/'); ?>" class="close">
					<img src="<?php bloginfo('template_directory'); ?>/images/close.png" alt=""> </a>
			</div>
			<!--.tabs-->
			<div class="tabs-content">
				<div id="signup-tab-content" class="tab-content">
					<form action="#" method="post"  id="formscope" name="myForm1" enctype="multipart/form-data" onSubmit="return checkButtonscope()" >
						 <?php echo apply_shortcodes( '[contact-form-7 id="16" title="Scope My Projects"]' ); ?>
					</form>
				</div>
				<!--.signup-tab-content-->
				<div id="login-tab-content" class="tab-content">
					<form action="#" method="post" id="formcar" name="myForm" enctype="multipart/form-data" onSubmit="return checkButton()">
    <?php echo apply_shortcodes('[contact-form-7 id="15" title="Careers"]');?> 
						 
						
						 
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


<?php if($actual_link == 'https://ixdtm.com/projects/theminimalist-site/enquiries-careers/?login-tab-content' ){

 ?> 
 
 <script>
    $(function(){
      window.history.pushState({page: 1}, "", "");
      history.back();
      history.forward();
      window.onpopstate = function(event) {
        if(event){
        //   var confirm = window.confirm("Please, note that you may lose your move details by returning to the previous page.");
        document.getElementById("formscope").reset();
        }
      }
    });
    
        $(function(){
      window.history.pushState({page: 1}, "", "");
      history.back();
      history.forward();
      window.onpopstate = function(event) {
        if(event){
        //   var confirm = window.confirm("Please, note that you may lose your move details by returning to the previous page.");
        document.getElementById("formcar").reset();
        }
      }
    });
</script>

 
 <script>
 $('.login-tab').addClass('active');
$('#signup-tab-content').hide();
$('#login-tab-content').show();
// Click function
$('.login-tab').click(function(){
  $('.signup-tab').removeClass('active');
  $(".login-tab").addClass('active');
  $('#signup-tab-content').hide();
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

$('.signup-tab').click(function(){
  $('.login-tab').removeClass('active');
  $(".signup-tab").addClass('active');
  $('#login-tab-content').hide();
  $('#signup-tab-content').show();
  
});
</script> <?php } else { ?>     <script>
	
$('.signup-tab').addClass('active');
$('#login-tab-content').hide();
$('#signup-tab-content').show();
// Click function
$('.signup-tab').click(function(){
  $('.login-tab').removeClass('active');
  $(".signup-tab").addClass('active');
  $('#login-tab-content').hide();
  var activeTab = $(this).find('a').attr('href');
  $(activeTab).fadeIn();
  return false;
});

$('.login-tab').click(function(){
  $('.signup-tab').removeClass('active');
  $(".login-tab").addClass('active');
  $('#signup-tab-content').hide();
  $('#login-tab-content').show();
  
});
</script>   <?php } ?>


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
		template += '<span class="custom-select-trigger-three">' + "Account Management" + '</span>';
		template += '<div class="custom-options_three">';
		template += '<div class="custom-options_box">';
		select.querySelectorAll("option").forEach(function(option) {
			template += '<span class="custom-option_three' + '"data-value="' + option.getAttribute("value") + '">' + option.innerText + '</span>';
		});
		template += '</div></div></div>';
		let select_wrapper = document.createElement('div');
		select.style.display = 'none';
		select_wrapper.innerHTML = `<div class="custom-select-wrapper-three" id="select_three">${template}</div>`;
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



/*rks*/

var dropDownText = option.getAttribute("data-value");
 sessionStorage.setItem("selectemptype", dropDownText);
if (dropDownText == "Account Management") {
	
 

  var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y.removeAttribute("checked", "checked");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
  y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
 
    }
    if (dropDownText == "Animation") {
 var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }
    
if (dropDownText == "Brand Stratergy") {

	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
 	
    }
if (dropDownText == "Business Development") {

var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
    }
if (dropDownText == "Content Writer") {
var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  

    }
if (dropDownText == "Copywriter") {
var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Creative") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Design") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Development") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Finance") {
 var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Growth Marketing") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Human Resource") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Legal") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Media Planning") {
 var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "ORM") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "Project Management") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }


if (dropDownText == "SEO") {
 	var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }

if (dropDownText == "Video Production") {
 var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }
if (dropDownText == "User Interface") {



   var x = document.getElementById("enable1");
   var x1 = document.getElementById("first");
  x.removeAttribute("disabled", "disabled");
  x1.removeAttribute("class", "disabled");
  x1.setAttribute("class", "wpcf7-list-item-label");
   
  

  var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.removeAttribute("disabled", "disabled");
  y1.removeAttribute("class", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label");
  y1.removeAttribute("style");
    }


if (dropDownText == "User Experience") {
 	

   var x = document.getElementById("enable1");
   var x1 = document.getElementById("first");
  x.removeAttribute("disabled", "disabled");
  x1.removeAttribute("class", "disabled");
  x1.setAttribute("class", "wpcf7-list-item-label");
 
  

  var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.removeAttribute("disabled", "disabled");
  y1.removeAttribute("class", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label");
   y1.removeAttribute("style");
    }
    
    
if (dropDownText == "Account Planner") {
 var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
   y1.setAttribute("style", "background:white");

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");
  
    }    
    
    
    
    



/*

    */
/*rks*/

/*rks

var dropDownText = option.getAttribute("data-value");
if (dropDownText == "Account Management") {
document.getElementById("sel1").style.display = 'block';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }
if (dropDownText == "Animation") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'block';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }
if (dropDownText == "Brand Strategy") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'block';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }
if (dropDownText == "Business Development") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'block';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }
if (dropDownText == "Content Writer") {
document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'block';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  

    }
if (dropDownText == "Copy Writer") {
document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'block';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Product Design") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'block';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Design") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'block';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Technology") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'block';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Finance") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'block';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Growth Marketing") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'block';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Human Resource") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'block';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Legal") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'block';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Media Planning") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'block';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "ORM") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'block';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Project Management") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'block';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "SEO") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'block';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "User Interface") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'block';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "User Experience") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'block';
document.getElementById("sel20").style.display = 'none';
  
    }


if (dropDownText == "Video Production") {
 	document.getElementById("sel1").style.display = 'none';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'block';
  
    }
rks*/

		});
	});



</script> 


<script language="javascript" type="text/javascript">

if(sessionStorage.getItem("selectjoblocation")=='enable1')
   {
       var xy = document.getElementById("enable1");
       xy.setAttribute("checked", "checked");
   }

if(sessionStorage.getItem("selectjoblocation")=='enable2')
   {
       var xyz = document.getElementById("enable2");
       xyz.setAttribute("checked", "checked");
   }
 
 console.log(sessionStorage.getItem("selectemptype"));
 
 
 
 

var y = document.getElementById("enable2");
  var y1 = document.getElementById("second");
  y.setAttribute("disabled", "disabled");
  y1.setAttribute("class", "disabled");
  y1.setAttribute("class", "wpcf7-list-item-label disabled");
  y.removeAttribute("checked", "checked");
   
   
   

   var z = document.getElementById("enable3");
   var z1 = document.getElementById("last");
  z.setAttribute("disabled", "disabled");
  z1.setAttribute("class", "wpcf7-list-item-label disabled");

//document.getElementById("select_three").addEventListener("select", displayTextField);
document.getElementById("sel1").style.display = 'block';
document.getElementById("sel2").style.display = 'none';
document.getElementById("sel3").style.display = 'none';
document.getElementById("sel4").style.display = 'none';
document.getElementById("sel5").style.display = 'none';
document.getElementById("sel6").style.display = 'none';
document.getElementById("sel7").style.display = 'none';
document.getElementById("sel8").style.display = 'none';
document.getElementById("sel9").style.display = 'none';
document.getElementById("sel10").style.display = 'none';
document.getElementById("sel11").style.display = 'none';
document.getElementById("sel12").style.display = 'none';
document.getElementById("sel13").style.display = 'none';
document.getElementById("sel14").style.display = 'none';
document.getElementById("sel15").style.display = 'none';
document.getElementById("sel16").style.display = 'none';
document.getElementById("sel17").style.display = 'none';
document.getElementById("sel18").style.display = 'none';
document.getElementById("sel19").style.display = 'none';
document.getElementById("sel20").style.display = 'none';
 
</script>



<script>




document.getElementById("checkboxm").onclick = function checkClickFunc() {
var xsname = document.getElementById('snamee').value;
var xmob = document.getElementById('numberm').value;
var xemail = document.getElementById('emaile').value;
var xcompany = document.getElementById('companym').value;
var xlocation = document.getElementById('locationm').value;
var xcctc = document.getElementById('cctc').value;
var xectc = document.getElementById('ectc').value;
var xupload_file = document.getElementById('upload-file').value;
var xcheckbox = document.getElementById('checkboxm').value;
if( xsname != "" && validatePhoneNumber(xmob) && xemail != "" && xcompany != "" && xlocation != ""  && xcctc != ""  && xectc != "" && xupload_file != "" && document.getElementById('checkboxm').checked ) {  
    
    document.getElementById("xcheckboxerror123").innerHTML = "";    
 var y = document.getElementById("jobsubmit");
 y.setAttribute("style", "background-color:#00FFAA;color:#000");
    
}
else
{
    document.getElementById("xcheckboxerror").innerHTML = "";
  document.getElementById("xcheckboxerror123").innerHTML = "<div class='wpcf7-not-valid-tip'>Please Fill all the field first.</div>"; 
   document.getElementById("checkboxm").checked = false;
}
}













/*on type event*/
document.getElementById("sel1").onmouseup = function() {mouseUp()};
function mouseUp() {
     if(!document.getElementById('enable1').checked || !document.getElementById('enable2').checked){document.getElementById("error").innerHTML = "";}
    else{document.getElementById("error").innerHTML = "<div class='wpcf7-not-valid-tip'>You have not selected any job location</div>"; }
 }

document.getElementById("snamee").onkeyup = function() {myFunction()};
function myFunction() {
     let x = document.getElementById("snamee");
    if(x.value !=''){document.getElementById("xsnameerror").innerHTML = "";}
    else{document.getElementById("xsnameerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
 document.getElementById("numberm").onkeyup = function() {myFunction1()};

 /* validation code */
function myFunction1() {
    let x1 = document.getElementById("numberm").value;
    let len = x1.length; 
  
     var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    if(!re.test(x1)) 
    {
      let y1 = document.getElementById("numberm").value;
      let len1 = y1.length; 
      if(len1 >= 10)
      {
        document.getElementById('numberm').style.color = '#000';
      }
      else
      {
        document.getElementById("xmoberror").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid phone number</div>";
        document.getElementById('numberm').style.color = '#FF0000';
      }
     
    
     

    }
    
    else
    {
      document.getElementById('numberm').style.color = '#000';
      document.getElementById("xmoberror").innerHTML = "";
    }
 
 }
 
 document.getElementById("emaile").onkeyup = function() {myFunction2()};
function myFunction2() {
    var xemail = document.getElementById('emaile').value;
    atpos = xemail.indexOf("@");
dotpos = xemail.lastIndexOf(".");
var data = xemail;

if(atpos < 1 || ( dotpos - atpos < 2) || dotpos+2>=data.length)
  {
      document.getElementById('emaile').style.color = '#FF0000';
      document.getElementById("xemailerror").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid Email.</div>"; 
       document.myForm.emaile.focus();
       return false;
  }
   else
  {
     document.getElementById('emaile').style.color = '#000';
      document.getElementById("xemailerror").innerHTML = ""; 
  }


 }
 
 /* end validation code */
 document.getElementById("companym").onkeyup = function() {myFunction3()};
function myFunction3() {
    let x3 = document.getElementById("companym");
    if(x3.value !=''){document.getElementById("xcompanyerror").innerHTML = "";}
    else{document.getElementById("xcompanyerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
document.getElementById("locationm").onkeyup = function() {myFunction4()};
function myFunction4() {
    let x4 = document.getElementById("locationm");
    if(x4.value !=''){document.getElementById("xlocationerror").innerHTML = "";}
    else{document.getElementById("xlocationerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
 document.getElementById("cctc").onkeyup = function() {myFunction5()};
function myFunction5() {
    let x5 = document.getElementById("cctc");
    if(x5.value !=''){document.getElementById("xcctcerror").innerHTML = "";}
    else{document.getElementById("xcctcerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
 
 document.getElementById("ectc").onkeyup = function() {myFunction6()};
function myFunction6() {
    let x6 = document.getElementById("ectc");
    if(x6.value !=''){document.getElementById("xectcerror").innerHTML = "";}
    else{document.getElementById("xectcerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
  document.getElementById("uploadfile").onmouseup = function() {myFunction7()};
function myFunction7() {
    let x7 = document.getElementById("upload-file");
    if(x7.value !=''){document.getElementById("xupload_fileerror").innerHTML = "";}
    else{document.getElementById("xupload_fileerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.<div>"; }
 }
 
/*on type event*/




















function checkButton() { 

var xsname = document.getElementById('snamee').value;
var xmob = document.getElementById('numberm').value;
var xemail = document.getElementById('emaile').value;
var xcompany = document.getElementById('companym').value;
var xlocation = document.getElementById('locationm').value;
var xcctc = document.getElementById('cctc').value;
var xectc = document.getElementById('ectc').value;
var xupload_file = document.getElementById('upload-file').value;
var xcheckbox = document.getElementById('checkboxm').value;
document.getElementById("xcheckboxerror").innerHTML = ""; 
document.getElementById("xcheckboxerror123").innerHTML = ""; 
atpos = xemail.indexOf("@");
dotpos = xemail.lastIndexOf(".");
var data = xemail;




//var upsize =  document.getElementById('upload-file').files[0].size;
//alert(upsize);

if(xsname == "" && !validatePhoneNumber(xmob) && xemail == "" && xcompany == "" && xcctc == "" && xectc == "" && xupload_file == "" && !document.getElementById('checkboxm').checked ) { 
   document.getElementById("error").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required</div>"; 
     document.getElementById("xsnameerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xmoberror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xemailerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xcompanyerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xlocationerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
      document.getElementById("xcctcerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";
      document.getElementById("xectcerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";
      document.getElementById("xupload_fileerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";
      document.getElementById("xcheckboxerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";   
    document.myForm.snamee.focus();
                      return false;
            }
 if(document.getElementById('enable1').checked === true || document.getElementById('enable2').checked === true) { 
  
   document.getElementById("error").innerHTML = ""; 
            }
           else
     {
          document.getElementById("error").innerHTML = "<div class='wpcf7-not-valid-tip'>You have not selected any job location</div>"; 
    document.myForm.snamee.focus();
                      return false;
         
     }
            
if (xsname == "" ) {
    document.getElementById("error").innerHTML = ""; 
     document.getElementById("xsnameerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
      document.myForm.snamee.focus() ;
    return false;
  }
  else
  {
      document.getElementById("xsnameerror").innerHTML = ""; 
  }
  
  
 if (!validatePhoneNumber(xmob) ) {
 document.getElementById("xsnameerror").innerHTML = ""; 
 document.getElementById("xmoberror").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid phone number</div>"; 
 document.myForm.numberm.focus();
    return false;
  }
   else
  {
      document.getElementById("xmoberror").innerHTML = ""; 
  }
  
  
  
      if (xemail == "" ) {
  document.getElementById("xmoberror").innerHTML = "";
    document.getElementById("xemailerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.myForm.emaile.focus();
    return false;
  }
   else
  {
      document.getElementById("xemailerror").innerHTML = ""; 
  }
  
  
   if(atpos < 1 || ( dotpos - atpos < 2) || dotpos+2>=data.length)
  {
      document.getElementById("xemailerror").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid Email.</div>"; 
       document.myForm.emaile.focus();
       return false;
  }
   else
  {
      document.getElementById("xemailerror").innerHTML = ""; 
  }
  
  
  
    if (xcompany == "" ) {
  document.getElementById("xemailerror").innerHTML = ""; 
   document.getElementById("xcompanyerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
    document.myForm.companym.focus();
    return false;
  }
   else
  {
      document.getElementById("xcompanyerror").innerHTML = ""; 
  }
  
  
   if (xlocation == "" ) {
    document.getElementById("xlocationerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.myForm.locationm.focus();
    
    document.getElementById("xcompanyerror").innerHTML = ""; 
    return false;
  }
    else
  {
      document.getElementById("xlocationerror").innerHTML = ""; 
  }
  
  
  
  
  
  
    if (xcctc == "" ) {
    document.getElementById("xlocationerror").innerHTML = "";
    document.getElementById("xcctcerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";
     document.myForm.cctc.focus();
    return false;
  }
  else
  {
      document.getElementById("xcctcerror").innerHTML = ""; 
  }
  
  
  
  
  
  
  
  
    if (xectc == "" ) {
        document.getElementById("xcctcerror").innerHTML = "";
    document.getElementById("xectcerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.myForm.ectc.focus();
    return false;
  }
   else
  {
      document.getElementById("xectcerror").innerHTML = ""; 
  }
  
  
  
  
  
    if (xupload_file == "" ) {
    document.getElementById("xupload_fileerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xectcerror").innerHTML = " "; 
     document.myForm.upload-file.focus();
    return false;
  }
   else
  {
    
document.getElementById("xupload_fileerror").innerHTML = ""; 
     
  }
  
  
  
   if (!document.getElementById('checkboxm').checked ) {
     
    document.getElementById("xcheckboxerror").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";
    document.getElementById("xupload_fileerror").innerHTML = ""; 
     document.myForm.checkboxm.focus();
     return false;
  }
/* else
            {
                 var y = document.getElementById("jobsubmit");
     y.setAttribute("style", "background:#00FFA");
              
               return true;
            } */

        } 
        
        
        
 function validatePhoneNumber(input_str) {
    var re = /^\d{10}$/;

    return re.test(input_str);
}       
        
        
        
    </script> 
    
    
    
    
    
    
    
    
    
    
    
    
   

<script>


document.getElementById("checkboxm1").onclick = function checkClickFunc() {
    
    
    
var xsname1 = document.getElementById('snamee1').value;
var xmob1 = document.getElementById('numberm1').value;
var xemail1 = document.getElementById('emaile1').value;
var xlocation1 = document.getElementById('countrym1').value;
var xcompany1 = document.getElementById('companym1').value;
var xmsg1 = document.getElementById('msg').value; 
var xcheckbox1 = document.getElementById('checkboxm1').value;

 
     
if( xsname1 != "" && validatePhoneNumber(xmob1) && xemail1 != "" && xcompany1 != "" && xlocation1 != ""  && xmsg1 != "" && document.getElementById('checkboxm1').checked ) {  
    
    document.getElementById("xcheckboxerror12").innerHTML = "";    
 var y = document.getElementById("btnone");
 y.setAttribute("style", "background-color:#00FFAA;color:#000");
    
}
else
{
    document.getElementById("xcheckboxerror1").innerHTML = "";
  document.getElementById("xcheckboxerror12").innerHTML = "<div class='wpcf7-not-valid-tip'>Please Fill all the field first.</div>"; 
   document.getElementById("checkboxm1").checked = false;
}
    
    
 
}




/*on type event*/
document.getElementById("snamee1").onkeyup = function() {myFunctionm()};
function myFunctionm() {
    let mx = document.getElementById("snamee1");
    if(mx.value !=''){document.getElementById("xsnameerror1").innerHTML = "";}
    else{document.getElementById("xsnameerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
 document.getElementById("numberm1").onkeyup = function() {myFunctionm1()};
function myFunctionm1() {
     let mx1 = document.getElementById("numberm1").value;
     let lenmx1 = mx1.length;
     var re1 = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    if(!re1.test(lenmx1)){
      let mx1y1 = document.getElementById("numberm1").value;
      let mx1len1 = mx1y1.length;
     if(mx1len1 >= 10)
     {
         document.getElementById("xmoberror1").innerHTML = "";
       document.getElementById('numberm1').style.color = '#000';
     }
     else
     {
       document.getElementById("xmoberror1").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid phone number</div>";
       document.getElementById('numberm1').style.color = '#FF0000';
     }
    }
    else
   {
     document.getElementById('numberm1').style.color = '#000';
     document.getElementById("xmoberror1").innerHTML = "";
   }
 }
 document.getElementById("emaile1").onkeyup = function() {myFunctionm2()};
function myFunctionm2() {
    var xemail1 = document.getElementById('emaile1').value;
    atpos1 = xemail1.indexOf("@");
         dotpos1 = xemail1.lastIndexOf(".");
         var data1 = xemail1;
     if (xemail1 == "" || atpos1 < 1 || ( dotpos1 - atpos1 < 2) || dotpos1+2>=data1.length) {
      document.getElementById('emaile1').style.color = '#FF0000';
  document.getElementById("xsnameerror1").innerHTML = "";
    document.getElementById("xemailerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid Email.</div>";
     document.myForm1.emaile1.focus();
    return false;
  }
   else
  {
    document.getElementById('emaile1').style.color = '#000';
      document.getElementById("xemailerror1").innerHTML = "";
  }
 }
 
 
 document.getElementById("countrym1").onkeyup = function() {myFunctionm3()};
function myFunctionm3() {
    let mx3 = document.getElementById("countrym1");
    if(mx3.value !=''){document.getElementById("xlocationerror1").innerHTML = "";}
    else{document.getElementById("xlocationerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
document.getElementById("companym1").onkeyup = function() {myFunctionm4()};
function myFunctionm4() {
    let mx4 = document.getElementById("companym1");
    if(mx4.value !=''){document.getElementById("xcompanyerror1").innerHTML = "";}
    else{document.getElementById("xcompanyerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
 document.getElementById("msg").onkeyup = function() {myFunctionm5()};
function myFunctionm5() {
    let mx5 = document.getElementById("msg");
    if(mx5.value !=''){document.getElementById("xmsgerror1").innerHTML = "";}
    else{document.getElementById("xmsgerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; }
 }
 
 
 
/*on type event*/



function checkButtonscope() { 

var xsname1 = document.getElementById('snamee1').value;
var xmob1 = document.getElementById('numberm1').value;
var xemail1 = document.getElementById('emaile1').value;
var xlocation1 = document.getElementById('countrym1').value;
var xcompany1 = document.getElementById('companym1').value;
var xmsg1 = document.getElementById('msg').value; 
var xcheckbox1 = document.getElementById('checkboxm1').value;
 
 document.getElementById("xcheckboxerror1").innerHTML = ""; 
       document.getElementById("xcheckboxerror12").innerHTML = ""; 
 
         atpos1 = xemail1.indexOf("@");
         dotpos1 = xemail1.lastIndexOf(".");
         var data1 = xemail1;
     
if( xsname1 == "" && !validatePhoneNumber(xmob1) && xemail1 == "" && xcompany1 == "" && xlocation1 == "" && !document.getElementById('checkboxm1').checked ) { 
       document.getElementById("xsnameerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xmoberror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xemailerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xcompanyerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xlocationerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.getElementById("xmsgerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
      document.getElementById("xcheckboxerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";   
    document.myForm1.snamee1.focus();
                      return false;
            }
    
    
     if (xsname1 == "" ) {
        document.getElementById("xsnameerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
      document.myForm1.snamee1.focus() ;
    return false;
  }
   else
  {
      document.getElementById("xsnameerror1").innerHTML = ""; 
  }
 
     
      if (xemail1 == "" || atpos1 < 1 || ( dotpos1 - atpos1 < 2) || dotpos1+2>=data1.length) {
  document.getElementById("xsnameerror1").innerHTML = "";
    document.getElementById("xemailerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid Email.</div>"; 
     document.myForm1.emaile1.focus();
    return false;
  }
   else
  {
      document.getElementById("xemailerror1").innerHTML = ""; 
  }
    
     if (!validatePhoneNumber(xmob1) ) {
 document.getElementById("xemailerror1").innerHTML = ""; 
   document.getElementById("xmoberror1").innerHTML = "<div class='wpcf7-not-valid-tip'>Please enter a valid phone number</div>"; 
     document.myForm1.numberm1.focus();
    return false;
  }
  else
  {
      document.getElementById("xmoberror1").innerHTML = ""; 
  }
   
    if (xlocation1 == "" ) {
    document.getElementById("xlocationerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
     document.myForm1.countrym1.focus();
    
    document.getElementById("xmoberror1").innerHTML = ""; 
    return false;
  }
  else
  {
      document.getElementById("xlocationerror1").innerHTML = ""; 
  }
    
     if (xcompany1 == "" ) {
  document.getElementById("xlocationerror1").innerHTML = ""; 
   document.getElementById("xcompanyerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.<div>"; 
    document.myForm1.companym1.focus();
    return false;
  }
  else
  {
      document.getElementById("xcompanyerror1").innerHTML = ""; 
  }
   
    if (xmsg1 == "" ) {
  document.getElementById("xcompanyerror1").innerHTML = ""; 
   document.getElementById("xmsgerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>"; 
    document.myForm1.companym1.focus();
    return false;
  }
  else
  {
      document.getElementById("xmsgerror1").innerHTML = ""; 
  }
 

   if (!document.getElementById('checkboxm1').checked ) {
      
       document.getElementById("xcheckboxerror12").innerHTML = ""; 
    document.getElementById("xcheckboxerror1").innerHTML = "<div class='wpcf7-not-valid-tip'>The field is required.</div>";
    document.getElementById("xmsgerror1").innerHTML = ""; 
     document.myForm1.companym1.focus();
     return false;
  }
   /* else
            {
                                document.getElementById("xcheckboxerror1").innerHTML = "";
               return true;
            } */

        } 
        
        
    
        
    </script>  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->

