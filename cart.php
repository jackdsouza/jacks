<!DOCTYPE html>
<html>
	<head>
		<title>THE NOODLE BAR | CART</title>
		<meta charset="utf-8">
		<link href="css/cartstyle.css" rel="stylesheet">
	</head>
	<body>		
		<img style="top:0px;left:0px;z-index:-1;position:fixed" src="images/noodle_cart.jpg">
		<div class="main">
			<nav>
				<ul>
					<li><a href="http://localhost/WELCOME_TO_OUR_SITE/catalogue.php">&nbsp;Catalogue&nbsp;</a></li>
					<li><a href="http://localhost/WELCOME_TO_OUR_SITE/cart.php">&nbsp;Cart&nbsp;</a></li>
					<li><a href="http://localhost/WELCOME_TO_OUR_SITE/menu.php">&nbsp;Menu&nbsp;</a></li>
					<li><a href="http://localhost/WELCOME_TO_OUR_SITE/home.php">&nbsp;Home&nbsp;</a></li>
					<img src="a.png" width="60px"height="60px" alt="not available">
				</ul>
			</nav>
			
			<header class="head" >
			<h1 style="font-family:courier new;font-size:100px">THE NOODLE BAR</h1>
			<h6>EAT. SLEEP. REPEAT.</h6>
			</header>
			
			<section class="sec">
			
			
<?php
	include("connect.php");
	$query="select * from cart";
	$rs=mysqli_query($con,$query);
	if(mysqli_num_rows($rs)==0) echo"<h1 style='font-size:100px;text-align:center'>Cart is empty!!</h1>";
	else{
	echo "<table style='width:100%;text-align:center;font-family:comic sans;font-size:30px' border='0px' cellpadding='10px' cellspacing='0px'>";
	echo "<tr style=' text-decoration:underline double'><th>ID</th><th>ITEM</th><th>COST</th><th>QUANTITY</th></tr>";
	while($row=mysqli_fetch_array($rs))
	{
		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
		
	}
	echo "</table>";
	

	}
?>
	<br><br><br>
	<form class="form" method='post' action'#'><p style="font-size:20px;text-align:right">
	*please finalize quantities by 
	<input 
	class="upd"
	type='submit' name='upd' value='clicking here'>
	before checking out<br><br><br></p>
	<center><input
	class="chk"
	type='submit' name='btn' value='CHECKOUT'>
	</form>	
	<?php
	if(isset($_POST["btn"]))
		header("location:checkout.php");
	?>
			
			</section>
			
			<footer  class="foot">
				<pre>
					<b>contact us</b>
					1234567890
					
					<b>about us</b>
					hjshbkchas sjkbsdrkjrfs skjckfwjbske srkjfkwjhrf 
					sebfkjekrf wsjbfkwjh wkjfkhwr webfkjhw
					joiasejdqha ajnlofjqjb
					
					copyright &copy; 2018
				
				</pre>
			</footer>
		</div>
	</body>
<html>