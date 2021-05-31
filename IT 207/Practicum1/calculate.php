<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	$total = 0;
	define(RUNNING, 10);
	define(BBALL, 8);
	define(SLEEP, 1);
	define(CALORIE, 0.0175);
	define(KG, 0.453592);
	define(HOUR, 60);
	$weightC = 0;
	$runC = 0;
	$bballC = 0;
	$sleepC = 0;
	if (isset($_POST["weight"]))
		$weightC = $_POST["weight"];
	if (isset($_POST["run"]))
		$runC = round(($_POST["run"] * KG) * RUNNING * $weightC * CALORIE);
	if (isset($_POST["bball"]))
		$bballC = round(($_POST["bball"] * KG) * BBALL * $weightC * CALORIE);
	if (isset($_POST["sleep"]))
		$sleepC = round(($_POST["sleep"] * KG) * SLEEP * $weightC * CALORIE * HOUR);
	$total = round($runC) + round($bballC) + round($sleepC);
	
?>
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
		<form action="?" method="post">
			<?php
					
				foreach ($_POST as $key => $value) {
					echo "<input type=\"hidden\" name=\"$key\" value=\"$value\" />";
				}

			?>
			<div class="middle">
				For a <?php echo round($weightC); ?> pound person, it is estimated that: <br/><br/>
				<?php echo round($runC); ?> calories were burned running<br/>
				<?php echo round($bballC); ?> calories were burned playing basketball<br/>
				<?php echo round($sleepC); ?> were calories were burned sleeping			
			</div>
			<div class="bottomR" align="right">
				Total calories expended: <?php echo (int)$total; ?>
			</div>
		</form>	
		<div>
			<?php
          			echo "<b>Last modified: </b>" . date ("H:i F d Y", getlastmod());
          			echo " EST";
          		?>
			| <div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/index.php">Return to home page</a></div>
		</div>
        </div>
    </body>
</html>