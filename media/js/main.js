$(function(){
	$('.menu a').bind({
		'mouseover':function(){
				var title =$(this).attr('data-title');
				//console.log(title);
				$('.logotext').text(title).css('color','black');
			},
		'mouseout':function(){
				$('.logotext').text('Маленькие кошачьи радости').css('color','white');
		}
	});
});


//$obj->text('Маленькие кошачьи радости')->css('color','white')