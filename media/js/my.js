$(function(){
	$('.topmenu a:eq(0)').bind('mouseover',function(){
												$('#header').css({
													'background':'url(media/img/fon.jpg)'
												});
	});
	$('.topmenu a:eq(1)').bind('mouseover',function(){
												$('#header').css({
													'background':'blue'
												});
	});
$('.topmenu a:eq(2)').bind('mouseover',function(){
												$('#header').css({
													'background':'red'
												});
	});	
$('.topmenu a:eq(3)').bind('mouseover',function(){
												$('#header').css({
													'background':'yellow'
												});
	});
$('.topmenu a:eq(4)').bind('mouseover',function(){
												$('#header').css({
													'background':'green'
												});
	});
$('.topmenu').bind('mouseout',function(){
				$('#header').css({
				'background':'url(media/img/koga16.jpg)'
				});
			});
	
});