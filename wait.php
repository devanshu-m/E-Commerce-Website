<?php
session_start();
$con= mysql_connect("localhost","root","");
mysql_select_db("testing");
$value=$_SESSION['name'];

	$query = mysql_query("DELETE FROM cart WHERE username='$value'");
header("location:home.html");
?>
