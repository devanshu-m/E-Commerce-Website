<?php
	session_start();
	$value=$_SESSION['name'];
	
	$con=mysql_connect("localhost","root","");

	mysql_select_db("testing");
	mysql_query("DELETE FROM cart where username= '$value'");
?>

<html>
<head>

	<title>DM Shopping</title>

	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	
	
<body background="wallpaqper.jpg">
<div style="width:800px; margin:0 auto;">
<div id="top">
<div class="top-nav">
<ul>
<li><a href="home.html" title="Home">Home</a></li>		  <li><a href="home.html" title="Login">Logout</a></li>


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
<h1>
THANK YOU FOR SHOPPING WITH DM SHOPPING
</h1>
<br/>

<td align="center"><img  align="middle" src="shopping-bag-jpg.jpg" alt="Thank You" /></td>
<br/>
<a href='home.html'>Go Back</a></td>
						

</div>
					
</body>
</html>