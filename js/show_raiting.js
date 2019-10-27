
<script type="text/javascript">

$(function () {
    $('.toggle').on('click', function () {
        console.log('what?');
        id=this.id;
        $.post('php/showRating.php',{
          id: this.id
        }, function (data) {
            iddr='rating'+id;

            $('#'+iddr).html('<td>'+data+'</td>');
      });
    });
});

</script>