<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
$one = new user();
$show = $one->ShowRating($_POST['id']);
//console.log(print_r($show));
if ($show) {
    foreach ($show as $val) {
        echo '<br>';
        foreach ($val as $key => $value) {
            echo $key . '=' . $value . '<br> ';
        }
    }
}
?>