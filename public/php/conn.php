<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "perpustakaanselly";
$connect = mysqli_connect($host,$user,$password,$database);
if (!$connect) {
	die("Connect failed: ".mysqli_connect_error());
}
?>