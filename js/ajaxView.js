<script type="text/javascript">

$.ajax({
	url: 'View/addStudentView.php',
	type: 'POST',
	dataType: 'html',
	success:  function(data){
       $('#app').html(data);
   }
});
</script>
	