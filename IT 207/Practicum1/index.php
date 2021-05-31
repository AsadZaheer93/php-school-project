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
		<div class="head">Metabolic Equivalents Energy Expended</div>
		<form action="calculate.php" method="post">
			<div class="middle">
				<br/>
				<label for="weight">Weight:</label> 
				<input type="text" id="weight" name="weight" placeholder="pounds" />
				pounds<br/>
			</div>
			<div class="middle">
				<br/>
				Running (at 6pmh) <br/>
				<label for="run">Duration:</label> 
				<input type="text" id="run" name="run" placeholder="minutes" />
				minutes<br/>
			</div>
			<div class="middle">
				<br/>
				Basketball<br/>
				<label for="bball">Duration:</label> 
				<input type="text" id="bball" name="bball" placeholder="minutes" />
				minutes<br/>
			</div>
			<div class="middle">
				<br/>
				Sleep<br/>
				<label for="sleep">Duration:</label> 
				<input type="text" id="sleep" name="sleep" placeholder="hours" />
				hours<br/>
			</div>
			<div class="bottomR" align="right">
				<input type="submit" value="Calculate" />
			</div>
			<div>
				Proceed to <div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Practicum1/coupon.php">Part 2</a></div>
			</div>
		</form>	
        </div>
    </body>
</html>