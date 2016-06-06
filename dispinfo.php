<?php
	session_start();
	
	$con=mysql_connect('localhost',"root","");

	mysql_select_db("testing");

	$value2=$_SESSION['name'];
	$value=($_POST['value']);
	$totalprice=0;
	$query2= mysql_query("SELECT * FROM product where Name= '$value'");
	
	$r2 = mysql_fetch_array($query2);
	$productname = $r2["Name"];
	$os = $r2["OS"];
	$st = $r2["Storage"];
	$rm = $r2["RAM"];
	$dsp = $r2["Display"];
	$pr = $r2["Price"];
	$link = $r2["link"];
	
$display = "";	

		 $display .= '<tbody>
        <tr>
            <th scope="row">' . $productname . ' </th>
            <th><img src="'.$link.'" alt="Product Image 4" height="42" width="42"/></th>
            <th>'.$os.'</th>
            <th>'.$st.' Gb</th>
			<th>'.$rm.' Gb</th>
            <th>'.$dsp.' Inch</th>
			<th>$'.$pr.'</th>
			<th><button name="product" value="'.$productname.'" class="submit" type="submit">Add to cart</button></th>

		<th><input type="number" width:100px name="quantity" default="0"/></th>
       </tr>
		</tbody>';
	
 	
	
?>

<html>
<head>
	<title>DM Shopping | Info</title>
	
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	
</head>
<body background="wallpaqper.jpg">
<div style="width:800px; margin:0 auto;">
<div id="top">
<div class="top-nav">
<ul>
	<li><a href="home.html" title="Home">Home</a></li>
	<li><a href="home.html" title="Login">Logout</a></li>
</li>

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
</div>
<div style="width:800px; margin:0 auto;">
<div id="header">
<a href="home.html"><img src="logo1.png"  width="300" height="200" align="center"/></a>
					
<div class="cl">&nbsp;</div>

<div id="content">

<div class="case">
<h1>Product Details</h1>
<table width="100%">
<tr>
<td align="center">
<a href='home_login.php'>Back</a>
</td><td></td><td></td>
<td align="left">
					
</td>
</tr>
						
<form method="post" action="addcart2.php" >
<table  width="100%" >

<thead>
<tr>
<th>Name</th>
<th>Product</th>
<th>Operating System</th>
<th>Storage (Gb)</th>
<th>RAM (Gb)</th>
<th>Display (inch)</th>
<th>Price</th>
<th>Action</th>
<th>Quantity</th>
							

</tr>

</thead>

<?php echo $display; ?>
</form>
</div>
</div>
</div>

</body>
</html>