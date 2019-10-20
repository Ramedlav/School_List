<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
$enter = new user();
$enter->loginUser($_POST['name'],$_POST['password']);
?>