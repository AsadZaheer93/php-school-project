<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$total = 0;
	define(CANDY, 10);
	define(GUMBALL, 3);
	$coupon = 0;
	$candy = 0;
	$candyMod = 0;
	$gumBall = 0;
	$gumBallMod = 0;
	$mod = 0;
	if (isset($_POST["coupon"]))
		$coupon = $_POST["coupon"];
	if ($coupon > CANDY) {
		$candy = $coupon / CANDY;
		$candyMod = $coupon % CANDY; 
		if ($candyMod > GUMBALL) {
			$gumBall = $candyMod / GUMBALL;
			$gumBallMod = $candyMod % GUMBALL;
			if ($gumBallMod < GUMBALL) {
				$mod = $gumBallMod;	
			}
		}
	}
	
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
		<div class="head">Midway Coupon Distributor</div>
		<form action="redeem.php" method="post">
		<?php
					
				foreach ($_POST as $key => $value) {
					echo "<input type=\"hidden\" name=\"$key\" value=\"$value\" />";
				}

			?>
			<div class="middle">
				Your <?php echo $coupon ?> coupons can be redeemed for: </br><br/><br/>
				<?php echo (int)$candy; ?> Candy Bars </br>
				<?php
					for ($i = 0; $i < (int)$candy; $i++) {
						echo "O";
					}
				?>
				<br/><br/>
				<?php echo (int)$gumBall; ?> Gumballs <br/>
				<?php
					for ($x = 0; $x < (int)$gumBall; $x++) {
						echo "0";
					}
				?><br/><br/>
				<?php echo (int)$mod ?> Left over coupons <br/>
				<?php
					for ($y = 0; $y < (int)$mod; $y++) {
						echo "0";
					}
				?><br/><br/>
			</div>
			<div class="bottomR" align="right">
				Legend: Candy Bar = 10 coupons | Gumball = 3 coupons
			</div>
			<div>
				<?php
          			echo "<b>Last modified: </b>" . date ("H:i F d Y", getlastmod());
          			echo " EST";
          		?>
				| <div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/index.php">Return to home page</a></div>
			</div>
		</form>	
        </div>
    </body>
</html>