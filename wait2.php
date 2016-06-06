<?php
session_start();
$con= mysql_connect("localhost","root","");
mysql_select_db("testing");
$value=$_POST['product'];

	$query = mysql_query("DELETE FROM cart WHERE productname='$value'");
header("location:home_login.php");

?>

