<?php 
session_start();
date_default_timezone_set('Asia/Manila');
$connection = mysqli_connect("localhost", "root", "vertrigo", "tam_db");


if (isset($_SESSION["orders"])) {
	# code...
}
else
{
	$_SESSION["orders"] = array();
}





?>