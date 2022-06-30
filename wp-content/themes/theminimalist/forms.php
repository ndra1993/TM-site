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
			<a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
			<h1 class="h1">We’d Love to hear from you</h1>
		</div>
		<div class="form-wrap">
			<div class="tabs" id="myTab">
				<h2 class="signup-tab h2"><a href="#signup-tab-content" data-toggle="tab">Scope my project</a></h2>
				<h2 class="login-tab h2"><a href="#login-tab-content" data-toggle="tab">Careers</a></h2>
				<a href="<?php echo site_url(); ?>" class="close">
					<img src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt=""> </a>
			</div>
			<!--.tabs-->
			<div class="tabs-content">
				<div id="signup-tab-content" class="show active">
					<form action="#" method="post" enctype="multipart/form-data">
						<?php echo apply_shortcodes('[contact-form-7 id="16" title="careers"]'); ?>
					</form>
				</div>
				<!--.signup-tab-content-->
				<div id="login-tab-content">
					<form action="#" method="post" enctype="multipart/form-data">
						<?php echo apply_shortcodes('[contact-form-7 id="15" title="scope my project"]'); ?>
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
		template += '<span class="custom-select-trigger">' + select.getAttribute("placeholder") + '</span>';
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
	
</script>






<script>
	document.querySelectorAll(".select-wrap-two").forEach(function(wrap) {
		let select = wrap.querySelector(".custom-select_two");
		let classes = select.getAttribute("class"),
			id = select.getAttribute("id"),
			name = select.getAttribute("name");
		let template = '<div class="' + classes + '">';
		template += '<span class="custom-select-trigger-two">' + select.getAttribute("placeholder") + '</span>';
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
