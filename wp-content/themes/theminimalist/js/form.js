jQuery(document).ready(function($) {
	tab = $('.tabs h2 a');

	tab.on('click', function(event) {
		event.preventDefault();
		tab.removeClass('active');
		$(this).addClass('active');

		tab_content = $(this).attr('href');
		$('div[id$="tab-content"]').removeClass('active');
		$(tab_content).addClass('active');
	});
});




$(document).ready(function() {
	$('.btn').on('click', function() {
	  $('.file').trigger('click');
	});
  
	$('.file').on('change', function() {
	  var fileName = $(this)[0].files[0].name;    
	  $('#file-name').val(fileName);
	});
  })


  $(document).ready(function() {
	$('.button').on('click', function() {
	  $('.upload').trigger('click');
	});
  
	$('.upload').on('change', function() {
	  var fileName = $(this)[0].files[0].name;    
	  $('#upload-file').val(fileName);
	});
  })



  

