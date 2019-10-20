<script type="text/javascript">

$.ajax({
	url: 'View/add_teacher.php',
	type: 'POST',
	dataType: 'html',
	success:  function(data){
       $('#app').html(data);
   }
});
</script>
	