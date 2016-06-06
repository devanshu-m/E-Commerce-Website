<?php
$con=mysql_connect('localhost',"root","");

$db=mysql_select_db("testing");

$result=mysql_query("INSERT INTO custreg (Name, Email, Password, Contact, Address)VALUES('$_REQUEST[name]','$_REQUEST[email]','$_REQUEST[password]','$_REQUEST[text]','$_REQUEST[address]')");

$_SESSION["username"] = $_REQUEST[name];

header( 'Location: home.html' ) ;


?> 	

