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
<li><a href="home.html" title="Home">Home</a></li>		  <li><a href="home.html" title="Login">Logout</a></li>


<li id="alignright">
<?php
session_start();
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
<h1>Your Final Products List</h1>
<table  width="100%" >
<thead>
<tr>
<th scope="col">Total No. of products</th>
<th scope="col">Total Price</th>
</tr>
</thead>

<tbody>
<tr>
<th scope="col"><?php  $value=$_SESSION['tpro']; echo $value; ?></th>
<th scope="col"><?php  $value=$_SESSION['tprice']; echo $value; ?></th>
								
</tr>
</tbody>
</table>
<br>
						
<div style="width:800px; margin:0 auto;">

<form class="contact_form" action="genbill.php" method="post">
<ul>
<li style="text-align:center;">

<label for="name">Billing Name</label>
<input name="name" type="text"  placeholder="John Doe" required />
</li>
<li style="text-align:center;">
<label for="email">Confirm Email</label>
<input type="email" name="email" placeholder="john_doe@example.com" required />
<br>
<span class="form_hint">Proper format "usernamname@domain.com"</span>
</li>
<li style="text-align:center;">
<label for="credit">Credit Card Number</label>
<input type="text" name="text"/>
</li>
<li style="text-align:center;">
<label for="text">Credit Card Pin</label>
<input type="password" name="password"/>
</li>
<li style="text-align:center;">
<label for="state">Enter state</label>
<input type="text" name="state" placeholder="Example: MD for Maryland" required />
</li>

<li style="text-align:center;">
<label for="state">Street Address</label>
<textarea rows="4" cols="20" name="text" required ></textarea>
</li>

							
<li style="text-align:center;">
<button class="submit" type="submit">Calculate Total Cost</button>
</li>
</ul>
</form>
						
</div>
	
</body>
</html>