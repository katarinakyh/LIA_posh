$('document').ready(function(){

	var fadespeed = 300,
		bigbox = false,
		currentBigbox;
		
	var vertscroll = function(current,direction){
		var next = parseInt(current) +1;
		var prev = parseInt(current) -1;
		
		if(direction == 'next'){		
			$('#big'+current).fadeOut(fadespeed);
			$('.next '+current).hide();
			if(current == 9){
				next = 1;
			}
			$('#big'+next).fadeIn(fadespeed);
			currentBigbox = next;
	
		}else if (direction == 'prev'){
			$('#big'+current).fadeOut(fadespeed);
			$('.prev '+current).hide();
			if (current == 1) {
				prev = 9;
			}
			$('#big'+prev).fadeIn(fadespeed);
			currentBigbox = prev;
		}
	}

	var showIt = function(which){
		$('#big'+which).fadeIn(fadespeed);
		$('#cover').show();
	}
	
	var hideIt = function(which){
		$('#big'+which).fadeOut(fadespeed);
		$('#cover').hide();
	}
	var keyscroll = function (e){

		var unicode=e.keyCode? e.keyCode : e.charCode
		if(bigbox == true){
			if(unicode == 39){
				vertscroll(currentBigbox, 'next'); 
			}else if(unicode == 37){
				vertscroll(currentBigbox, 'prev');
			}else if(unicode == 27){
				hideIt(currentBigbox);
			}
		}
		//alert(unicode)
	}
	


/*---------- event listeners--------------------------*/

	$('.next').click(function(e) {
		e.stopPropagation();
		var z = $(this).attr('class').substring(5);
		vertscroll(z,'next');
	});

	$('.prev').click(function(e) {
		e.stopPropagation();
		var z = $(this).attr('class').substring(5);
		vertscroll(z,'prev');
	});

	$('.shw').click(function() {
		var z = $(this).attr('class').substring(4);
		currentBigbox = z;
		bigbox = true;
		showIt(z);
	});
	
	$('.big').click(function(){
		var z = $(this).attr('id').substring(3);
		bigbox = false;
		hideIt(z);
	});
	
	$('body').keyup(function(event){
		//alert('kk');
		keyscroll(event)
	});

});