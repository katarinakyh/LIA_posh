$('document').ready(function(){
	var fadespeed = 300;

	var vertscroll = function(current,direction){
		var next = parseInt(current) +1;
		var prev = parseInt(current) -1;

		if(direction == 'next'){		
			$('.big'+current).fadeOut(fadespeed);
			$('.next '+current).fadeOut(fadespeed);
			if(current == 9){
				next = 1;
			}
			$('.big'+next).fadeIn(fadespeed);		

		}else if (direction == 'prev'){
			$('.big'+current).fadeOut(fadespeed);
			$('.prev '+current).fadeOut(fadespeed);
			if (current == 1) {
				prev = 9;
			}
			$('.big'+prev).fadeIn(1000);
		}
			
	};


	$('.next').click(function() {
		var z = $(this).attr('class').substring(4);
		vertscroll(z,'next');
	});

	$('.prev').click(function() {
		var z = $(this).attr('class').substring(4);
		vertscroll(z,'prev');
	});



	$('.show1 ,.big1').click(function(){								
		$('.big1').slideToggle(1000);
	});

	$('.show2 ,.big2').click(function(){								
		$('.big2').slideToggle(1000);
	});

	$('.show3 ,.big3').click(function(){								
		$('.big3').slideToggle(1000);
	});

	$('.show4 ,.big4').click(function(){								
		$('.big4').slideToggle(1000);
	});

	$('.show5 ,.big5').click(function(){								
		$('.big5').slideToggle(1000);
	});

	$('.show6 ,.big6').click(function(){								
		$('.big6').slideToggle(1000);
	});

	$('.show7 ,.big7').click(function(){								
		$('.big7').slideToggle(1000);
	});

	$('.show8 ,.big8').click(function(){								
		$('.big8').slideToggle(1000);
	});

	$('.show9 ,.big9').click(function(){								
		$('.big9').slideToggle(1000);
	});

});