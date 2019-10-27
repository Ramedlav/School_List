<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
include 'classes/select.class.php';
$one = new user();
$show = $one->ShowRating($_POST['id']);
if ($show) {
    foreach ($show as $val) {
        echo '<br>';
        foreach ($val as $key => $value) {
            if ($key=='rating'){
                echo $key . ':' . $value . '<br> ';
            }

            if ($key=='id_subject'){
                $TableName = "subjects";
                $select= new Select();
                $subject= $select->SelectItem($TableName,$value);
                echo $subject;
            }

        }
    }
}
?>