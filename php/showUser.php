<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
$one = new user();  
//    		if(!isset($_POST['status'])){$_POST['status']=' ';}
//        	if(!isset($_POST['name'])){$_POST['name']=' ';}
//        	if(!isset($_POST['surname'])){$_POST['surname']=' ';}
//        	if(!isset($_POST['threename'])){$_POST['threename']=' ';}
//        	if(!isset($_POST['faculty'])){$_POST['faculty']=' ';}
//        	if(!isset($_POST['speciality'])){$_POST['speciality']=' ';}
//        	if(!isset($_POST['group'])){$_POST['group']=' ';}
//        	if(!isset($_POST['gender'])){$_POST['gender']=' ';}

        $show = $one->SelectUser(
        	$_POST['name'],
        	$_POST['surname'],
        	$_POST['threename'],
        	$_POST['faculty'],
        	$_POST['speciality'],
        	$_POST['group'],
        	$_POST['gender'],
        	$_POST['burn']);
echo($show);
//return this data at Ajax in view_select_student.php
    echo '<table id="showTab">';
    echo    '<tr>
            <th>№</th>
            <th>name</th>
            <th>surname</th>
            <th>faculty</th>
            </tr>';
//                    print_r($show);
for ($i=0; ($i<count($show)); $i++){
    echo '<tr><td>'.($i+1).' </td><td> '.$show[$i]['name'].' </td><td> '.$show[$i]['surname'].' </td><td> '.$show[$i]['faculty_name'].' </td></tr> ';
}
    echo '</table>';
?>



















