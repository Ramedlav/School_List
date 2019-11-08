
<?php
include 'classes/dbc.class.php';
include 'classes/select.class.php';

$select = new Select();
$new = $select->Create_Select($_POST['name']);
$new .= '
<script type="text/javascript">
$(\'#'.$_POST['name'].'\').on(\'change\',function (event) {
        event.preventDefault();
        
        $.post(\'php/open_jornal.php\',
            {name:\'speciality\',
             id:$(\'#speciality\').val()
            },
            function (data) {
                $(\'#show_next\').append(data);
            });
    });
</script>
';
echo $new;
?>
<?php

//$select = new Select();
//$new = $select->Create_Select($_POST['nextSelect']);
//echo $new;
//echo '<select><option value="0">--------------</option>';
//foreach ($new as $key){
//    foreach ($key as $gen=>$item){
//        if ($gen!='id'){
//            echo '<option value="'.$gen.'">'.$item.'</option>';
//        }
//    }
//}
//
//
//echo '</select>';
?>