
<script type="text/javascript">
	function funcAdd(data){console.log(data);}
	$(document).ready(function() {
	$('#send').bind("click",function() {
		$.ajax({
			url: 'php/login.php',
			type: 'POST',
			dataType: 'html',
			data: {
				name: $('#name').val(), 
				password: $('#password').val()},
			success: funcAdd
		});
		
	});

});
</script>
