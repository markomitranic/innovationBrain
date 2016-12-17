$(document).ready(function(){

	$('.our-people div img').on('click', function(){
		var $this = $(this);
		var data = $this.attr('data-number');
		//var slikaGore = $('.our-person img').attr('src');
		var slika = $this.attr('src');
		$('#our-person > div > img').attr('src', slika);
		$('#'+data).show().siblings('p').hide();
		//$this.attr('src', slikaGore);
	});
});