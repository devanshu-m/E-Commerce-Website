<?php

session_start();

$db = mysql_connect('localhost',"root","");
 
$db_select = mysql_select_db("testing", $db);

$username=$_REQUEST['email'];

$password=$_REQUEST['password'];

$state=$_REQUEST['state'];

$value2=$_SESSION['tprice'];


$login=mysql_query("select * from custreg where Email = '$username' and Password = '$password'");


$tax=mysql_query("select rate from tax where state = '$state' ");


   if(mysql_num_rows($login) === 1) 
{

$tax=mysql_fetch_assoc(mysql_query("SELECT rate FROM tax WHERE state='$state'"));

 foreach ($tax as $key => $valuet) 
{
#echo "$value\n";
}	


$final = $value2 * (1 + $valuet / 100.0);


   }

   else {

      echo "Username and Password does not Match";

   }
   
   

?>

<html>
<head>
	<title>DM Shopping | Checkout</title>
	
	
	<link rel="stylesheet" href="css/style.css" type="text/css"/>


</head>
<body background="wallpaqper.jpg">
<div style="width:800px; margin:0 auto;">
<div id="top">
<div class="top-nav">
<ul>
	<li><a href="home.html" title="Home">Home</a></li>		  	<li><a href="home.html" title="Login">Logout</a></li>


<li id="alignright">
<?php
$Color = "white";
$value=$_SESSION['name'];
$value="Hello, ".$value;
echo '<div style="Color:'.$Color.'">'.$value.'</div>';
?>
</li>
</ul>
</div>
				
<div class="cl">&nbsp;</div>
</div>


<div style="width:800px; margin:0 auto;">
<div id="header">
<a href="home.html"><img src="logo1.png"  width="300" height="200" align="center"/></a>

</div>
<div class="cl">&nbsp;</div>
</div>

<div class="case">
<h1>Total cost</h1>
<table  width="100%" >
<thead>
<li style="text-align:center;">
<h1>Tax Rate for <?php echo $state ?> in percentage = <?php echo $valuet; ?>
</h1>
<br>

<li style="text-align:center;">
<h1>Total Price = <?php  $value=$_SESSION['tprice']; echo $value; ?></h1>

<br>
<li style="text-align:center;">
<h1>Total Price + Taxes = <?php echo $final; ?>
</h1>

</thead>

<form class="contact_form" action="thankyou.php" method="post">
<li style="text-align:center;">
<button class="submit" type="submit">Pay</button>

</body>
</html>
