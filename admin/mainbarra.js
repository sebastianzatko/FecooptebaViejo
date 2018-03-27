$(document).ready (function(){

	//
	$('#botonmenu').click(function(){
		
		if($('#botonmenu').attr('class') == 'fa fa-arrow-right'){
			$('#botonmenu').removeClass('fa fa-arrow-right').addClass('fa fa-close');
			$('.barra .lista1').css({'left':'0px'});
			$('.barra').css({'width':'100%', 'background':'rgba(0,0,0,.3)'});
			$('.oja').css({'width':'270px' , 'border-right':'5px solid #575D69','background-color':'#023859','margin-top':'0px'});
			$('.hoja').css({'width':'80%',  'transition': '.1s','float':'right','z-index':'1000000000000',});
		} else{
			$('#botonmenu').removeClass('fa fa-close').addClass('fa fa-arrow-right');
			$('.barra .lista1').css({'left':'-270px'});
			$('.barra .sublista').css({'left':'-270px'});
			$('.barra').css({'width':'0%', 'background':'rgba(0,0,0,.0)'});
			$('.oja').css({'width':'0%' , 'border-right':'0px solid #575D69','margin-top':'20%'});
			$('.hoja').css({'width':'100%', 'transition': 'left .1s'});
		}

	});

	//
	$('.barra .lista1 > .item-sublista a').click(function(){
		var positionMenu = $ (this).parent().attr('menu');
		$('.item-sublista[menu='+positionMenu+'] .sublista').css({'left':'0'});
	});

	$('.barra .sublista li.atras').click(function(){
		$(this).parent().css({'left':'-280px'})
	});
});