$('document').ready(function(){

	var fadespeed = 300;
	var vertscroll = function(current,direction){
		var next = parseInt(current) +1;
		var prev = parseInt(current) -1;

		if(direction == 'next'){		
			$('#big'+current).fadeOut(fadespeed);
			$('.next '+current).fadeOut(fadespeed);
			if(current == 9){
				next = 1;
			}
			$('#big'+next).fadeIn(fadespeed);		

		}else if (direction == 'prev'){
			$('#big'+current).fadeOut(fadespeed);
			$('.prev '+current).fadeOut(fadespeed);
			if (current == 1) {
				prev = 9;
			}
			$('#big'+prev).fadeIn(fadespeed);
		}
	}

	var showIt = function(which){
		$('#big'+which).slideToggle(fadespeed);
	}


/*---------- event listeners--------------------------*/

	$('.next').click(function() {
		var z = $(this).attr('class').substring(4);
		vertscroll(z,'next');
	});

	$('.prev').click(function() {
		var z = $(this).attr('class').substring(4);
		vertscroll(z,'prev');
	});

	$('.shw').click(function() {
		var z = $(this).attr('class').substring(4);
		showIt(z);
	});
	
	$('.big').click(function(){
		var z = $(this).attr('id').substring(3);
		showIt(z);
	});
	

});