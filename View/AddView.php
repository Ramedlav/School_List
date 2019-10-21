
<script type="text/javascript">
$(document).ready(function() {		
	$('#status').on('change', function() {	
		switch ($('#status').val()) {
			case '1':
				$.ajax({
				url: 'View/addStudentView.php',
				type: 'POST',
				dataType: 'html',
				success:  function(data){
       			$('#app').html(data);
   					}
				});			
				break;
			case '2':
				$.ajax({
				url: 'View/add_teacher.php',
				type: 'POST',
				dataType: 'html',
				success:  function(data){
       			$('#app').html(data);
   					}
				});
				break;
			default:
				$('#app').html('');
				break;
		}

	});
});

</script>
<br>

	<div id="add_window" style="display:block">
		<b>status: </b>
		<select id="status">
			<option value="0"><p>----------</p></option>
			<option value="1">Student</option>
			<option value="2">Teacher</option>
		</select>

		<div id="app"></div> <!--here viwes files View/addStudentView.php or View/add_teacher.php -->
		
	</div>

		