<?php
$connection = mysqli_connect('localhost', 'easysts6_root2', 'rawalpindi114477');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'easysts6_flogin');
if(!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}
?>