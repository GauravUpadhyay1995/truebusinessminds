(function ($) {
    'use strict';

    var $window = $(window);

     // :: Sticky Active Code
    $window.on("scroll", function(){
        if
      ($(document).scrollTop() > 86){
          $("#banner").addClass("shrink");
        }
        else
        {
            $("#banner").removeClass("shrink");
        }
    });
    
    // :: Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });
    });

    // :: Sticky Active Code
    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header-area').addClass('sticky');
        } else {
            $('.header-area').removeClass('sticky');
        }
    });


    // :: Carousel Active Code
    if ($.fn.owlCarousel) {

        $(".client_slides").owlCarousel({
            responsive: {
            0: {
                items: 1
            },
            991: {
                    items: 2
                },
            767:{
                    items: 1
                }
            },
            loop: true,
            autoplay: true,
            smartSpeed: 700,
            dots: true
        });

        var dot = $('.client_slides .owl-dot');
        dot.each(function () {
            var index = $(this).index() + 1;
            if (index < 10) {
                $(this).html('0').append(index);
            } else {
                $(this).html(index);
            }
        });
		
    }

    // :: Magnific-popup Video Active Code
    if ($.fn.magnificPopup) {
        $('#videobtn').magnificPopup({
            type: 'iframe'
        });
        $('.gallery_img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            removalDelay: 300,
            mainClass: 'mfp-fade',
            preloader: true
        });
    }

    // :: ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1500,
            scrollText: 'Scroll Top'
        });
    }
    // :: Wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }

    // :: Accordian Active Code
    (function () {
        var dd = $('dd');
        dd.filter(':nth-child(n+3)').hide();
        $('dl').on('click', 'dt', function () {
            $(this).next().slideDown(500).siblings('dd').slideUp(500);
        })
    })();

    // :: niceScroll Active Code
    if ($.fn.niceScroll) {
        $(".timelineBody").niceScroll();
    }
	
	jQuery(document).on('ready', function () {
		// Odometer JS
		 $('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		
		// Partner Slider
		$('.partner-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			smartSpeed:1000,
			margin: 30,
			autoplayHoverPause: true,
            autoplay: true,
			responsive: {
				0: {
					items: 2
				},
				576: {
					items: 2
				},
				768: {
					items: 3
				},
				1024: {
					items: 4
				},
				1200: {
					items: 6
				}
			}
		});
		
	});
	
	
	/*----------------------------
		 Contact Validation
	------------------------------ */
	
	// request submission
	var EnableDisableForm = function (objectType, btn1, btn1Text) {
		if (objectType == 'Disable') {
			$('#' + btn1).attr('disabled', 'disabled');
		} else {
			$('#' + btn1).removeAttr('disabled');
		}
		$('#' + btn1).val(btn1Text);
	};
	
	
	function AjaxFormSubmit(formname, btn1, btn1Text) {
		var options = {
			complete: function (response) {
				if ('Success') {
	
					swal({
						title: "Thank you!",
						text: "Your message has been successfully Submitted.",
						type: "success",
						confirmButtonText: 'Close',
						timer: 7000
					});
	
					$('#validation')[0].reset();
					$('#validation-career')[0].reset();
	
				}
				EnableDisableForm('Enabled', btn1, btn1Text);
			},
			error: function (response) {
				var data = response.responseText;
				console.log(data);
			}
		};
		$('#' + formname).ajaxSubmit(options);
	}
	
	
	// Ajax form validation
	$('#validation').validate({
		errorElement: 'span',
		rules: {
			name: {
				required: true
			},
			email: {
				required: true
			},
			phone: {
				required: true
			},
			subject: {
				required: true
			},
			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: 'Required.'
			},
			email: {
				required: 'Required.'
			},
			phone: {
				required: 'Required.'
			},
			subject: {
				required: 'Required.'
			},
			message: {
				required: 'Required.'
			}
		},
		submitHandler: function (form) {
			EnableDisableForm('Disable');
			AjaxFormSubmit('validation', 'submit');
			return false; // required to block normal submit since you used ajax
		}
	});
	
	/****** Validation - Career Form ******/

	// Ajax form validation
	$('#validation-career').validate({
		errorElement: 'span',
		rules: {
			career_name: {
				required: true
			},
			career_email: {
				required: true
			},
			career_phone: {
				required: true
			},
			career_education: {
				required: true
			},
			career_experience: {
				required: true
			},
			career_resume: {
				required: true
			}
		},
		messages: {
			career_name: {
				required: 'Required.'
			},
			career_email: {
				required: 'Required.'
			},
			career_phone: {
				required: 'Required.'
			},
			career_education: {
				required: 'Required.'
			},
			career_experience: {
				required: 'Required.'
			},
			career_resume: {
				required: 'Required.'
			}
		},
		submitHandler: function (form) {
			var fileInput =  
			document.getElementById('validatedCustomFile'); 
			  
			var filePath = fileInput.value; 
		  
			// Allowing file type 
			var allowedExtensions =  
					/(\.doc|\.docx|\.pdf)$/i; 
					alert(filePath);
			  
			if (!allowedExtensions.exec(filePath)) { 
				alert('Please upload word or pdf file'); 
				fileInput.value = ''; 
				return false; 
			}  
			EnableDisableForm('Disable');
			AjaxFormSubmit('validation-career', 'submit');
			return false; // required to block normal submit since you used ajax
		}
	});
	

    /*$('body').bind('cut copy paste',function(e){e.preventDefault()});$("body").on("contextmenu",function(e){return!1});document.onkeydown=function(e){if(e.ctrlKey&&(e.keyCode===67||e.keyCode===86||e.keyCode===85||e.keyCode===117)){alert('This is not allowed');return!1}else{return!0}};$(document).keydown(function(event){if(event.keyCode==123){return!1}
    else if((event.ctrlKey&&event.shiftKey&&event.keyCode==73)||(event.ctrlKey&&event.shiftKey&&event.keyCode==74)){return!1}});var isCtrl=!1;document.onkeyup=function(a){17==a.which&&(isCtrl=!1)},document.onkeydown=function(a){if(17==a.which&&(isCtrl=!0),85==a.which||67==a.which&&1==isCtrl)return!1};*/
      
})(jQuery);