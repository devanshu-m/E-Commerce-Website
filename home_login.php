

<html>
<head>
<title>DM Shopping | Home</title>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

</head>

<body background="wallpaqper.jpg">
<div style="width:800px; margin:0 auto;">
<div id="top">
<div class="top-nav">
<ul>
	<li><a href="home.html" title="Home">Home</a></li>
	<li><a href="register.html" title="Register">Register</a>
	<li><a href="home.html" title="Login">Logout</a></li>
</li>


<li id="alignright">

<?php
$db = mysql_connect('localhost',"root","");
 
$db_select = mysql_select_db("testing", $db);

session_start();
$Color = "white";
$value=$_SESSION['name'];
$value="Hello, ".$value;
echo '<div style="Color:'.$Color.'">'.$value.'</div>';
						 
?>


</li>
</ul>
</div>
</div>
<div style="width:800px; margin:0 auto;">
<div id="header">
<a href="home.html"><img src="logo1.png"  width="300" height="200" align="center"/></a>
	
</ul>
</div>

<div id="content">
<div class="case">
<br>
<h1>Click on picture for details of product</h1>

<div class="row">
<ul>

<li>
<form method="post" action="dispinfo.php">
<a href="dispinfo.php" class="product" value="Galaxy S 2" title="Galaxy S 2">
<input type="image" src="css/galaxy-s2.jpg"  name="value" value="Galaxy S 2" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">Galaxy S 2</span>
<span class="order model">catalog number: <span class="number">1925</span></span>
<span class="order model"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>700</span></span>
</a></form>
</li>

<li>


<form method="post" action="dispinfo.php">

<a href="#" class="product" title="iPhone 6">
<input type="image" src="css/iphone6.jpg"  name="value" value="iPhone 6" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">iPhone 6</span>
<span class="order model">catalog number: <span class="number">1357</span></span>
<span class="order model"><span class="buy-text">Buy Now</span><span class="price"><span class="dollar">$</span>1200</span></span>
</a>	</form>
</li>

<li>


<form method="post" action="dispinfo.php">
<a href="#" class="product" title="Canvas Nitro">
<input type="image" src="css/canvasnitro.jpg"  name="value" value="Canvas Nitro" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">Canvas Nitro</span>
<span class="order model">catalog number: <span class="number">1264</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>200</span></span>
</a>	</form>
</li>

<li>

<form method="post" action="dispinfo.php">
<a href="#" class="product" title="Moto e">
<input type="image" src="css/motoe.png"  name="value" value="Moto e" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">Moto e</span>
<span class="order model">catalog number: <span class="number">1111</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>150</span></span></span>
</a>	</form>
</li>
</ul>
<div>&nbsp;</div>
</div>

<div class="row">
<ul>

<li>
<form method="post" action="dispinfo.php">
<a href="#" class="product" title="iPhone 4">
<input type="image" src="css/iphone4.jpg"  name="value" value="iPhone 4" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">iPhone 4</span>
<span class="order model">catalog number: <span class="number">1925</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>400</span></span>
</a></form>
</li>

<li>


<form method="post" action="dispinfo.php">
<a href="#" class="product" title="Galaxy Grand 2">
<input type="image" src="css/galaxygrand2.jpg"  name="value" value="Galaxy Grand 2" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">Galaxy Grand 2</span>
<span class="order model">catalog number: <span class="number">1357</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>500</span></span>
</a>	
</li>

<li>
<form method="post" action="dispinfo.php">
<a href="#" class="product" title="Microsoft Lumia 525">
<input type="image" src="css/lumia525.jpg"  name="value" value="Microsoft Lumia 525" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">Microsoft Lumia 525</span>
<span class="order model">catalog number: <span class="number">1264</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>350</span></span></span>
</a>	
</li>

<li>

<form method="post" action="dispinfo.php">
<a href="#" class="product" title="iPhone 4 S">
<input type="image" src="css/iphone4s.png"  name="value" value="iPhone 4 S" class="submit" type="submit" width="150" height="150" align="center">
										
<span class="order model">iPhone 4 S</span>
<span class="order model">catalog number: <span class="number">1111</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>600</span></span></span>
</a>	
</li>
</ul>

<div class="cl">&nbsp;</div>
</div>

<div class="row">
<ul>
<li>
<form method="post" action="dispinfo.php">
<a href="#" class="product" title="iPhone 6s">
<input type="image" src="css/iphone6s.jpg"  name="value" value="iPhone 6s" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">iPhone 6s</span>
<span class="order model">catalog number: <span class="number">1357</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>1500</span></span>
</a>	</form>
</li>

<li>

<form method="post" action="dispinfo.php">
<a href="#" class="product" title="Moto g">
<input type="image" src="css/motog.jpg"  name="value" value="Moto g" class="submit" type="submit" width="150" height="150" align="center">
<span class="order model">Moto g</span>
<span class="order model">catalog number: <span class="number">1111</span></span>
<span class="order model">Buy Now</span><span class="price"><span class="dollar">$</span>150</span></span></span>
</a>	</form>
</li>

	
</body>
</html>