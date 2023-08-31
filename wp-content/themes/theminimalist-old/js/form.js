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



  

  
