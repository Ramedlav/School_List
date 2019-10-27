
<div id="content">
	<b>name: </b>
	<input type="text" id="name" name="name">
	<br>
	<b>surname: </b>
	<input type="text" id="surname" name="surname" >
	<br>
	<b>threename: </b>
	<input type="text" id="threename" name="threename">
	<br>
	<b>faculty: </b>
	<select id="faculty" name="faculty">
		<option value="1">PM</option>
		<option value="2">EA</option>
		<option value="3">EK</option>
	</select>
	<br>
	<b>speciality: </b>
	<select id="speciality" name="speciality">
		<option value="1">PM</option>
		<option value="2">PZ</option>
		<option value="3">PI</option>
	</select>
	<br>
	<b>group: </b>
	<select id="group" name="group">
		<option value="1">I</option>
		<option value="2">II</option>
	</select>
	<br>
	<b>gender: </b>
	<select id="gender" name="gender">
		<option value="1">Male</option>
		<option value="2">Female</option>
	</select>
	<br>
	<b>burn date: </b>
	<input type="text" id="burn" name="burn">
	<br>
		<input type="button" name="send" value="OK" id="send">
		<input type="button" name="down" value="Cancel">
</div>

<script type="text/javascript">
	$(document).ready(function() {
	$('#send').bind("click",function(e) {
		e.preventDefault();	
		$.post('php/showUser.php', {
		name: $('#name').val(), 
		surname: $('#surname').val(),
		threename: $('#threename').val(),
		faculty: $('#faculty').val(),
		speciality: $('#speciality').val(),
		group: $('#group').val(),
		gender: $('#gender').val(),
		burn: $('#burn').val()
	   	}, function(data){
		    // console.log(data);
    	   	$('#tab').html(data); // catch data from showUser.php
			});
		
	});

});
</script>

<div id="tab"></div>


	