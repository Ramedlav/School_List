	$(function(){
		$('.icon').on('click',function(){
			$(this).closest('.menu').toggleClass('menu-open');
		});

		$('#add_persone').on('click', function(){
			$('#add_window').removeAttr('style').show();
			$('#show_window').removeAttr('style').hide();
		});
		$('#show_persone').on('click', function(){
			$('#show_window').removeAttr('style').show();
			$('#add_window').removeAttr('style').hide();
			var htl;
			htl=$('#show_window').html();
			if (htl=='<div id="tab"></div>' || !htl){
			$.ajax({
				url: 'View/view_select_student.php',
				type: 'POST',
				dataType: 'html',
				success:  function(data){
       			$('#show_window').html(data);
   					}
				});	}		
		});	
	});
