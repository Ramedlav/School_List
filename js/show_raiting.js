
<script type="text/javascript">

$(function () {
    $('.toggle').on('click', function () {
        console.log('what?');
        id=this.id;
        $.post('php/showRating.php',{
          id: this.id
        }, function (data) {
            idd='rating'+id;
            if ($('#'+idd).html()){
                $('#'+idd).html('');}else
            {$('#'+idd).html('<td>'+data+'</td>');}
      });
    });
});

</script>