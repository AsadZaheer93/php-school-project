<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Practicum 1</title>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
		<link rel="stylesheet" href="calories.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?>
	<body>  
        <div id="maincontent">
		<div class="head">Midway Coupon Distributor</div>
		<form action="redeem.php" method="post">
			<div class="middle">
				<br/>
				<label for="coupon">Coupons:</label> 
				<input type="text" id="coupon" name="coupon" placeholder="number of coupons" />
				won<br/>
			</div>
			<div class="bottomR" align="right">
				<input type="submit" value="Calculate" />
			</div>
			<div>
				Proceed to <div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Practicum1/index.php">Part 1</a></div>
			</div>
		</form>	
        </div>
    </body>
</html>