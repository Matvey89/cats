$(function(){
	var fx={
		"initModal":function(){
			if ($('.modal-window').length==0){
				$('<div>').addClass('overlay').fadeTo('slow',0.7).appendTo('body');
				return $('<div>').addClass('modal-window').appendTo('body'); 
			}else{
			return $('.modal-window');
			};
		}
	};
	$('.gallery img').bind('click',function(event){		
	 var data=$(this).attr('id');
	  modal=fx.initModal();
	  event.preventDefault();
	  $('<a>').attr('href','#')
		.addClass('model-close-btn')
		.html('&times;')
		.click(function(e){
			e.preventDefault();
			//$(modal).remove();
			//$('.overlay').remove();
			$('.modal-window').fadeOut(2000,function(){
				$(this).remove();
			});
			$('.overlay').fadeOut(2000,function(){
				$(this).remove();
			});
		}).appendTo(modal);
		$.ajax({
		'url':'ajax.php',
		'data':'id='+data,
		'type':'POST',
		'success': function(ok){
			modal.append (ok);
		},
		'error':function(msq){
			modal.append (msq);
		}
	 });
	});
});
