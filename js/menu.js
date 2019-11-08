	$(function(){
		$('.icon').on('click',function(){
			$(this).closest('.menu').toggleClass('menu-open');
		});

		$('#add_persone').on('click', function(){
			$.ajax({
				url: 'View/AddView.php',
				type: 'POST',
				dataType: 'html',
				success:  function(data){
					$('#show_window').html(data);
				}
			});

		});

		$('#show_persone').on('click', function(){
			$.ajax({
				url: 'View/view_select_student.php',
				type: 'POST',
				dataType: 'html',
				success:  function(data){
       			$('#show_window').html(data);
   					}
				});
		});

		$('#open_jurnal').on('click', function(){
			$.ajax({
				url: 'View/jornalView.php',
				type: 'POST',
				dataType: 'html',
				success:  function(data){
					$('#show_window').html(data);
				}
			});

		});
	});
