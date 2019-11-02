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
        $Table_Name = "teachers";
        $select_name = new Select();
        $select = new Select();
        $teacher = $select->SelectItem($Table_Name,$val['id_teacher']);
        $subject= $select->SelectItem($TableName,$val['id_subject']);
        $Arr[$subject][$val['date']][$teacher][]=$val['rating'];
    }
//    print_r($Arr);
    echo '<table>';
    foreach ($Arr as $val=>$sub){
        echo '<tr><th>'.$val.'</th></tr>';
        echo "<tr>";
        foreach ($sub as $key=>$gen){
            echo '<td>'.$key.'</td>';
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($sub as $key=>$gen){
            echo '<td>';
            foreach ($gen as $teach=>$num) {
                foreach ($num as $i=>$rating){
                    echo ' <b class="showName" data-title=" '.$teach.' ">'.$rating.'</b>';
                }
            }
            echo '</td>';
        }
        echo "</tr>";
    }
    echo '</table>';

}
?>