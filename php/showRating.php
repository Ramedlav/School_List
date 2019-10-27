<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
include 'classes/select.class.php';
$one = new user();
$show = $one->ShowRating($_POST['id']);
if ($show) {
    echo '<table class="showTab">';
    foreach ($show as $val) {
        echo '<br>';
        foreach ($val as $key => $value) {
            if ($key=='id_subject'&&$value!=$check){
                $check = $value;
                $TableName = "subjects";
                $select= new Select();
                $subject= $select->SelectItem($TableName,$value);
                echo $subject;
            }
            if ($key=='rating'){
                echo '<tr><td>'.$key . '</td><td>' . $value . '</td></tr> ';
            }
        }
    }
                echo '</table>';
}
?>