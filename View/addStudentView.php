<!-- this form viwed when wona adds a student, LINK IN View/AddView.php -->
<div id="content">
	<b>name: </b>
	<input type="text" id="name" name="name" class="check">
	<br>
	<b>surname: </b>
	<input type="text" id="surname" name="surname" class="check">
	<br>
	<b>threename: </b>
	<input type="text" id="threename" name="threename" class="check">
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
	<input type="text" id="burn" name="burn" class="check">
	<br>
		<input type="button" name="send" value="OK" id="Student_Add">
		<input type="button" name="down" value="Cancel">
</div>

<script type="text/javascript">

    $('.check').keyup( function(){
        console.log('onchange');
        if ($(this).val()){
            $(this).removeClass('non_val');
            ifempty = false;
            // $('#words').remove();
        }else{
            $(this).addClass('non_val');
            // $(this).after("<b id='words' style='color:red'> please add the date</b>");
        }
    });


    function funcAdd(data){console.log(data);}
	$(document).ready(function() {
	$('#Student_Add').bind("click",function(e) {
		e.preventDefault();

		$('.check').each(
            function (){
                if (!$(this).val()) {
                    $(this).addClass('non_val');
                    ifempty = true;
                    console.log('0');
                }

            });
        if (!ifempty){
            console.log('1');
            $.post('php/addUser.php', {
                status: $('#status').val(),
                name: $('#name').val(),
                surname: $('#surname').val(),
                threename: $('#threename').val(),
                faculty: $('#faculty').val(),
                speciality: $('#speciality').val(),
                group: $('#group').val(),
                gender: $('#gender').val(),
                burn: $('#burn').val()
            }, function(data){
                console.log(data);
            });
        }
	});

});
</script>
