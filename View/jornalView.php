<?php

?>
<div id="show"></div>
<div id="show_next"></div>
<script type="text/javascript">

    $.post('php/open_jornal.php',{name:'faculty'},function (data) {
        $('#show').html(data);
    });


    // $('#faculty').on('change',function (event) {
    //     event.preventDefault();
    //     console.log('11211');
    //     $.post('open_jornal.php',{name: $('#faculty').html()}).done(function (data) {
    //         $('#show_next').html(data);
    //     });
    // });





</script>


