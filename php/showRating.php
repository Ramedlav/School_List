<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
include 'classes/select.class.php';
$one = new user();
$show = $one->ShowRating($_POST['id']);
if ($show) {
//    print_r($show);
    foreach ($show as $val) {
        $TableName = "subjects";
        $select= new Select();
        $subject= $select->SelectItem($TableName,$val['id_subject']);
        $Arr[$subject][$val['date']]=$val['rating'];
    }
    print_r($Arr);



// $i=0;
//    foreach ($show as $val) {
//        echo '<br>';
//        foreach ($val as $key => $value) {
//            echo $i++;
//            if ($key=='id_subject'&&$check!=$value){
//                $check=$value;
//                $TableName = "subjects";
//                $select= new Select();
//                $subject= $select->SelectItem($TableName,$value);
//                echo $subject;
//            }
//            if ($key=='rating'){
//                echo '<td>' . $value . '</td> ';
//            }
//        }
//    }
}
?>