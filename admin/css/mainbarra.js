$(document).ready (function(){

	//
	$('#botonmenu').click(function(){
		
		if($('#botonmenu').attr('class') == 'fa fa-bars'){
			$('#botonmenu').removeClass('fa fa-bars').addClass('fa fa-close');
			$('.barra .lista').css({'left':'0px'});
			$('.barra').css({'width':'100%', 'background':'rgba(0,0,0,.3)'});
		} else{
			$('#botonmenu').removeClass('fa fa-close').addClass('fa fa-bars');
			$('.barra .lista1').css({'left':'-320px'});
			$('.barra .sublista').css({'left':'-320px'});
			$('.barra').css({'width':'0%', 'background':'rgba(0,0,0,.0)'});
		}

	});

	//
	$('.barra .lista1 > .item-sublista a').click(function(){
		var positionMenu = $ (this).parent().attr('menu');
		$('.item-sublista[menu='+positionMenu+'] .sublista').css({'left':'0'});
	});

	$('.barra .sublista li.atras').click(function(){
		$(this).parent().css({'left':'-320px'})
	});
});