<!-- this form viwed when wona adds a teather, LINK IN View/AddView.php -->

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

$('#Teacher_Add').bind("click",function() {




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
            father_name: $('#threename').val()
        }, function(data){
            console.log($('#status').val());
        });
    }

});

</script>

	<b>name: </b>
	<input type="text" id="name" name="name" value="" class="check">
	<br>
	<b>surname: </b>
	<input type="text" id="surname" name="surname" value="" class="check">
	<br>
	<b>threename: </b>
	<input type="text" id="threename" name="threename" value="" class="check">
	<br>
	<input type="button" name="down" value="Cancel">
	<input type="button" name="send" value="OK" id="Teacher_Add">
	<br>



