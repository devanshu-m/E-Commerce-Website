<?php
	session_start();
	
	$con=mysql_connect("localhost","root","");

	mysql_select_db("testing");

	$value2=$_SESSION['name'];
	$value=($_POST['product']);
	$quantity=$_REQUEST['quantity'];

	$totalprice=0;
	$query2= mysql_query("SELECT * FROM product where Name= '$value'");
	
	$r2 = mysql_fetch_array($query2);
	$description2 = $r2["Description"];
	$price2 = $r2["Price"];
	$link2 = $r2["link"];

	
	$result=mysql_query("INSERT INTO cart (Username, Productname, Description, Price, Link, quantity)VALUES('$value2','$value','$description2','$price2','$link2','$quantity')");
	
	$query = mysql_query("SELECT * FROM cart where username='$value2'");
	$nop = mysql_num_rows($query);
	$display = "";
if ($nop > 0) 
{
	while($r = mysql_fetch_array($query)){ 
             $productname = $r["productname"];
			 $description = $r["Description"];
			 $price = $r["Price"];
			 $link = $r["link"];
			 $quantity = $r["quantity"];
			 
			 $price2= $price * $quantity;
			 $totalprice+=$price2;
			 $display .= ' <tbody>
        <tr>
		

            <th scope="row">' . $productname . ' </th>
            <th><img src="'.$link.'" alt="Product Image 4" height="42" width="42"/></th>
            <th>'.$description.'</th>
            <th>$'.$price2.'</th>
		<th><button name="product" value="'.$productname.'">Remove</button></th>
			
        </tr>
		</tbody>';
    }
} 

$_SESSION['tpro']=$nop;
$_SESSION['tprice']=$totalprice;

?>

<head>
	<title>DM Shopping | Cart</title>
	
	
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	
</head>
<body background="wallpaqper.jpg">
<div style="width:800px; margin:0 auto;">
<div id="top">
<div class="top-nav">
<ul>
<li><a href="wait.php" title="Home">Home</a></li> 
<li><a href="wait.php" title="Login">Logout</a></li>

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
<div class="shell">
<div style="width:800px; margin:0 auto;">
<div id="header">
<a href="wait.php"><img src="logo1.png"  width="300" height="200" align="center"/></a>
					
<div class="cl">&nbsp;</div>

 <form method="post" action="wait2.php">

<div class="case">
<h1>Following products are in your cart</h1>
<table width="100%">
<tr>
<td align="center">
<a href='home_login.php'>Alter Products</a>
</td>
<td align="right">
<a href='checkout.php'>Proceed To Checkout</a>
</td>
</tr>

<table  width="100%" >
<thead>
<tr>
<th scope="col">Name</th>
<th scope="col">Product</th>
<th scope="col">Description</th>
<th scope="col">Price</th>

								
</tr>
</thead>
<tfoot>
<tr>
<td colspan="4" align="right">Total Price: $<?php echo $totalprice; ?>
</td>
</tr>
</tfoot> 
<?php echo $display; ?>
</form>

	
</body>
</html>

