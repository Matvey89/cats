$(function(){
	var fx={
		"initModal":function(){
			if ($('.modal-window').length==0){
				$('<div>').addClass('overlay').appendTo('body');
				return $('<div>').addClass('modal-window').appendTo('body'); 
			}else{
			return $('.modal-window');
			};
		}
	};
	$('.gallery img').bind('click',function(){
	 var data=$(this).attr('id');
	 modal=fx.initModal();
	 $.ajax({
		'url':'ajax.php',
		'data':'id='+data,
		'type':'POST',
		'success': function(data){
			modal.append (data);
		},
		'error':function(msq){
			mmodal.append (msq);
		}
	 });
	});
});