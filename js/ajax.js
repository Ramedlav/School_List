
<script type="text/javascript">
	function funcAdd(data){if (name){console.log('11');}else{console.log('111');} };
//console.log(data);}
	$(document).ready(function() {
	$('#send').bind("click",function() {
		$.ajax({
			url: 'php/addUser.php',
			type: 'POST',
			dataType: 'html',
			data: {
				name: $('#name').val(), 
				surname: $('#surname').val(),
				speciality: $('#speciality').val(),
				faculty: $('#faculty').val(),
				group: $('#group').val()},
			success: funcAdd
		});
		
	});

});
</script>
