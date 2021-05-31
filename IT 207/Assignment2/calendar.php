<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Assignment 2</title>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
		<link rel="stylesheet" href="calendar.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?>
	<body>      
        <div id="maincontent">
		<center>
		<h3>OFFICE HOURS SETUP FORM</h3>
		</center>
		<center>
		<div class="field">
			<form action="confirmCalendar.php" method="post">
			<label for="name">Student Name:</label>
			<input type="text" id="name" name="name" placeholder=" Student Name" />

			<label for="email">Student Email:</label>
			<input type="text" id="email" name="email" placeholder="Student Email" />
			
			<?php
				$email = isset($_POST['email']) ? $_POST['email'] : "";
				$to = "azaheer@masonlive.gmu.edu"; 
				$subject = "Appointment";
				$txt = "Assignment 2";
				$headers = "From:".$_POST['email'];
				if (mail($to,$subject,$txt,$headers) != null) {
					echo "</br>"."Email successfully sent from ".$_POST['email']; 
				}
				else{
					echo "</br>"."ERROR, Email could not be sent";
				}
			?>
			
			<input type="submit" value="Submit" />
			<input type="reset" value="Clear" />

		</div>
		</center>

		<?php
			$currentDay = getdate();
			if(isset($_GET['mon'])) {
   				if(isset($_GET['year'])){
      				$begin = mktime(0,0,0,$_GET['mon'],1,$_GET['year']);
   				}
   				else{
      				$begin = mktime(0,0,0,$_GET['mon'],1,$currentDayDay['year']);
  				}
			}
			else{
   				$begin = mktime(0,0,0,$currentDay['mon'],1,$currentDay['year']);
			}
			
			$one = getdate($begin);
			$final = mktime(0,0,0,$one['mon']+1,0,$one['year']);
			$end = getdate($final);
			?>
			
        	<div class="bar">
        	<center>
        	<?php
        		echo date ("F Y");
        	?>
        	</center>
        	</div>
        	<div class="row">
        	<?php
        		$days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
        		for ($w = 0; $w < count($days); $w++) {
        	?>
        	<div class="box">
        		<?php
        			echo $days[$w];
        		?>
        	</div>
        	<?php
        		$monTime = null;
				if(!empty($_POST['Monday'])){	
					$monTime = $_POST['Monday']; 
						foreach ($_POST['Monday'] as $value){
			?> 
			<input type="hidden" name="Monday[]" value="<?php echo $value ?> "> 
			<?php
							}
				}
			?>
			<?php	
				$tueTime = null; 
				if(!empty($_POST['Tuesday'])){
					$tueTime = $_POST['Tuesday'];
						foreach($_POST['Tuesday'] as $value){
			?> 
			<input type="hidden" name="Tuesday[]" value="<?php echo $value ?> "> 
			<?php
						}
				}
			?>
			<?php
				$wedTime = null; 
				if(!empty($_POST['Wednesday'])){
					$wedTime = $_POST['Wednesday'];
						foreach($_POST['Wednesday'] as $value){
			?> 
			<input type="hidden" name="Wednesday[]" value="<?php echo $value ?> "> 
			<?php
						}
				}	
				
        	?>
        	<?php
        		$thursTime = null; 
				if(!empty($_POST['Thursday'])){
					$thursTime = $_POST['Thursday'];
						foreach($_POST['Thursday'] as $value){
			?> 
			<input type="hidden" name="Thursday[]" value="<?php echo $value ?> "> 
			<?php
						}
				}
        	?>
        	<?php
        		$friTime = null; 
        		if(!empty($_POST['Friday'])){
        			$friTime = $_POST['Friday'];
        				foreach($_POST['Friday'] as $value){
        	?> 
        	<input type="hidden" name  ="Friday[]" value="<?php echo $value ?> "> 
        	<?php
        				}
        		}
        	?>
        	<?php
        		}
        	?>
        	</div>
        	<?php
        		echo '<form action="confirmCalendar.php" method="post">';
        		for($i = 0; $i < $one['wday']; $i++){
        		
   					echo '  <div class="box"></div>' . "\n";
				}
        		for($i = 1; $i <= $end['mday']; $i++){
   					if($i == $currentDay['mday'] && $one['mon'] == $currentDay['mon'] && $one['year'] == $currentDay['year']){
      					$style = 'today';
   					}
   					else {
      					$style = 'day';
   					}		
  					echo '  <div class="box">'. $i;
   					$date = 1; 
   					if($monTime != null){		
						foreach ($monTime as $monday){	
							if (($i == 3) || ($i == 10) ||($i == 17) ||($i == 24) ||($i == 31)) {
								$dateForRadio = strval($date);?>
								<input type="radio" name = "button" value = "<?php echo "$dateForRadio.$monday" ?>"/> 			
									<?php echo $monday."<br/>"; 																
							}	
						}						
					}			
					else{
						echo " ";
					}
					if($tueTime != null){		
						foreach ($tueTime as $tuesday){	
							if (($i == 4) || ($i == 11) ||($i == 18) ||($i == 25)) {
								$dateForRadio = strval($date);?>
								<input type="radio" name = "button" value = "<?php echo "$dateForRadio.$tuesday" ?>"/> 			
									<?php echo $tuesday."<br/>"; 																
							}
						}									
					}			
					else{
						echo " ";
					}	
					if($wedTime != null){		
						foreach ($wedTime as $wednesday){	
							if (($i == 5) || ($i == 12) ||($i == 19) ||($i == 26)) {
								$dateForRadio = strval($date);?>
								<input type="radio" name = "button" value = "<?php echo "$dateForRadio.$wednesday" ?>"/> 			
									<?php echo $wednesday."<br/>"; 																
							}
						}								
					}			
					else{
						echo " ";
					}
					if($thursTime != null){		
						foreach ($thursTime as $thursday){	
							if (($i == 6) || ($i == 13) ||($i == 20) ||($i == 27)) {
								$dateForRadio = strval($date);?>
								<input type="radio" name = "button" value = "<?php echo "$dateForRadio.$thursday" ?>"/> 			
									<?php echo $thursday."<br/>"; 																
							}
						}								
					}			
					else{
						echo " ";
					}
					if($friTime != null){		
						foreach ($friTime as $friday){	
							if (($i == 7) || ($i == 14) ||($i == 21) ||($i == 28)) {
								$dateForRadio = strval($date);?>
								<input type="radio" name = "button" value = "<?php echo "$dateForRadio.$friday" ?>"/> 			
									<?php echo $friday."<br/>"; 																
							}
						}							
					}			
					else{
						echo " ";
					}
													
   					echo '</div>' . "\n";
				}		
				if($end['wday'] < 6){
   					for($i = $end['wday']; $i < 6; $i++){
      					echo '  <div class="box"></div>' . "\n";
   					}
				}
        	?>
        </form>
		</div>
		</div>
    </body>
</html>