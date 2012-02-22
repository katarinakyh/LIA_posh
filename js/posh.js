
$('document').ready(function(){

	$('#mediaclips').g
	
	$('.border a').click(function(e){
		
		e.preventDefault();
		e.stopPropagation();
		
		var content = $(this).html();
		console.log(content);
		
		$('.big').html(content).toggle();
		$('#mediaclips').hide(); //gömmer dessvärre allt så länge .big ligger innanför den. Måste pos .big korrekt
		
		
	});
});