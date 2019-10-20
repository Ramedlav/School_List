$('.check').each(
    function (){
        if (!$(this).val()){
            $(this).css("border","1px solid red");
        }
    });