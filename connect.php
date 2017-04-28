<!--  easysts6_root2   is databe username and   rawalpindi114477  database password   -->

<!-- easysts6_flogin  is Database Name -->

<?php
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}

$select_db = mysqli_select_db($connection, 'fastfitness');
if(!$select_db){
	die("Database Selection Failed" . mysqli_error($connection));
}
?>