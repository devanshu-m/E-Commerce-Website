<?php

session_start();

$db = mysql_connect('localhost',"root","");
 
$db_select = mysql_select_db("testing", $db);

$username=$_REQUEST['email'];

$password=$_REQUEST['password'];


$login=mysql_query("select * from custreg where Email = '$username' and Password = '$password'");

   if(mysql_num_rows($login) === 1) 
{

$name=mysql_fetch_assoc(mysql_query("SELECT Name FROM custreg WHERE Email ='$username'"));
	 
 foreach ($name as $key => $value) 
{
echo "$value\n";
}	

$_SESSION['name']=$value;

header("location:home_login.php");
   }

   else {

      echo "Username and Password does not Match";

   }
   
   

?>