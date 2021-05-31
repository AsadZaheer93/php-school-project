<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Assignment 2 - Calendar</title>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
		<link rel="stylesheet" href="calendar.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?>
	<body>
		<div id='maincontent'>
		<center>
		<h3>OFFICE HOURS SETUP FORM</h3>
		<center>
		<div class="form">
			
		<div>
			<center>
			<div class="column"><p>Day:</p></div>
			<div class="column"><p>Monday</p></div>
			<div class="column"><p>Tuesday</p></div>
			<div class="column"><p>Wednesday</p></div>
			<div class="column"><p>Thursday</p></div>
			<div class="column"><p>Friday</p></div>
			</center>
			
			<form method="post" action="calendar.php">
			
			<div class="time"><h3>TIME:</h3></div>
			
			<div class="time">
			<select size="20" name="Monday[]" multiple="multiple">
				<option value="7:00am">7:00am</option>
				<option value="7:30am">7:30am</option>
				<option value="8:00am">8:00am</option>
				<option value="8:30am">8:30am</option>
				<option value="9:00am">9:00am</option>
				<option value="9:30am">9:30am</option>
				<option value="10:00am">10:00am</option>
				<option value="10:30am">10:30am</option>
				<option value="11:00am">11:00am</option>
				<option value="11:30am">11:30am</option>
				<option value="12:00pm">12:00pm</option>
				<option value="12:30pm">12:30pm</option>
				<option value="1:00pm">1:00pm</option>
				<option value="1:30pm">1:30pm</option>
				<option value="2:00pm">2:00pm</option>
				<option value="2:30pm">2:30pm</option>
				<option value="3:00pm">3:00pm</option>
				<option value="3:30pm">3:30pm</option>
				<option value="4:00pm">4:00pm</option>
				<option value="4:30pm">4:30pm</option>
				<option value="5:00pm">5:00pm</option>
				<option value="5:30pm">5:30pm</option>
				<option value="6:00pm">6:00pm</option>
				<option value="6:30pm">6:30pm</option>
				<option value="7:00pm">7:00pm</option>
				<option value="7:30pm">7:30pm</option>
				<option value="8:00pm">8:00pm</option>
				<option value="8:30pm">8:30pm</option>
				<option value="9:00pm">9:00pm</option>
				<option value="9:30pm">9:30pm</option>
				<option value="10:00pm">10:00pm</option>
			</select>
			</div>
			
			<div class="time">
			<select size="20" name="Tuesday[]" multiple="multiple">
				<option value="7:00am">7:00am</option>
				<option value="7:30am">7:30am</option>
				<option value="8:00am">8:00am</option>
				<option value="8:30am">8:30am</option>
				<option value="9:00am">9:00am</option>
				<option value="9:30am">9:30am</option>
				<option value="10:00am">10:00am</option>
				<option value="10:30am">10:30am</option>
				<option value="11:00am">11:00am</option>
				<option value="11:30am">11:30am</option>
				<option value="12:00pm">12:00pm</option>
				<option value="12:30pm">12:30pm</option>
				<option value="1:00pm">1:00pm</option>
				<option value="1:30pm">1:30pm</option>
				<option value="2:00pm">2:00pm</option>
				<option value="2:30pm">2:30pm</option>
				<option value="3:00pm">3:00pm</option>
				<option value="3:30pm">3:30pm</option>
				<option value="4:00pm">4:00pm</option>
				<option value="4:30pm">4:30pm</option>
				<option value="5:00pm">5:00pm</option>
				<option value="5:30pm">5:30pm</option>
				<option value="6:00pm">6:00pm</option>
				<option value="6:30pm">6:30pm</option>
				<option value="7:00pm">7:00pm</option>
				<option value="7:30pm">7:30pm</option>
				<option value="8:00pm">8:00pm</option>
				<option value="8:30pm">8:30pm</option>
				<option value="9:00pm">9:00pm</option>
				<option value="9:30pm">9:30pm</option>
				<option value="10:00pm">10:00pm</option>
			</select>
			</div>
			
			<div class="time">
			<select size="20" name="Wednesday[]" multiple="multiple">
				<option value="7:00am">7:00am</option>
				<option value="7:30am">7:30am</option>
				<option value="8:00am">8:00am</option>
				<option value="8:30am">8:30am</option>
				<option value="9:00am">9:00am</option>
				<option value="9:30am">9:30am</option>
				<option value="10:00am">10:00am</option>
				<option value="10:30am">10:30am</option>
				<option value="11:00am">11:00am</option>
				<option value="11:30am">11:30am</option>
				<option value="12:00pm">12:00pm</option>
				<option value="12:30pm">12:30pm</option>
				<option value="1:00pm">1:00pm</option>
				<option value="1:30pm">1:30pm</option>
				<option value="2:00pm">2:00pm</option>
				<option value="2:30pm">2:30pm</option>
				<option value="3:00pm">3:00pm</option>
				<option value="3:30pm">3:30pm</option>
				<option value="4:00pm">4:00pm</option>
				<option value="4:30pm">4:30pm</option>
				<option value="5:00pm">5:00pm</option>
				<option value="5:30pm">5:30pm</option>
				<option value="6:00pm">6:00pm</option>
				<option value="6:30pm">6:30pm</option>
				<option value="7:00pm">7:00pm</option>
				<option value="7:30pm">7:30pm</option>
				<option value="8:00pm">8:00pm</option>
				<option value="8:30pm">8:30pm</option>
				<option value="9:00pm">9:00pm</option>
				<option value="9:30pm">9:30pm</option>
				<option value="10:00pm">10:00pm</option>
			</select>
			</div>
			
			<div class="time">
			<select size="20" name="Thursday[]" multiple="multiple">
				<option value="7:00am">7:00am</option>
				<option value="7:30am">7:30am</option>
				<option value="8:00am">8:00am</option>
				<option value="8:30am">8:30am</option>
				<option value="9:00am">9:00am</option>
				<option value="9:30am">9:30am</option>
				<option value="10:00am">10:00am</option>
				<option value="10:30am">10:30am</option>
				<option value="11:00am">11:00am</option>
				<option value="11:30am">11:30am</option>
				<option value="12:00pm">12:00pm</option>
				<option value="12:30pm">12:30pm</option>
				<option value="1:00pm">1:00pm</option>
				<option value="1:30pm">1:30pm</option>
				<option value="2:00pm">2:00pm</option>
				<option value="2:30pm">2:30pm</option>
				<option value="3:00pm">3:00pm</option>
				<option value="3:30pm">3:30pm</option>
				<option value="4:00pm">4:00pm</option>
				<option value="4:30pm">4:30pm</option>
				<option value="5:00pm">5:00pm</option>
				<option value="5:30pm">5:30pm</option>
				<option value="6:00pm">6:00pm</option>
				<option value="6:30pm">6:30pm</option>
				<option value="7:00pm">7:00pm</option>
				<option value="7:30pm">7:30pm</option>
				<option value="8:00pm">8:00pm</option>
				<option value="8:30pm">8:30pm</option>
				<option value="9:00pm">9:00pm</option>
				<option value="9:30pm">9:30pm</option>
				<option value="10:00pm">10:00pm</option>
			</select>
			</div>
			
			<div class="time">
			<select size="20" name="Friday[]" multiple="multiple">
				<option value="7:00am">7:00am</option>
				<option value="7:30am">7:30am</option>
				<option value="8:00am">8:00am</option>
				<option value="8:30am">8:30am</option>
				<option value="9:00am">9:00am</option>
				<option value="9:30am">9:30am</option>
				<option value="10:00am">10:00am</option>
				<option value="10:30am">10:30am</option>
				<option value="11:00am">11:00am</option>
				<option value="11:30am">11:30am</option>
				<option value="12:00pm">12:00pm</option>
				<option value="12:30pm">12:30pm</option>
				<option value="1:00pm">1:00pm</option>
				<option value="1:30pm">1:30pm</option>
				<option value="2:00pm">2:00pm</option>
				<option value="2:30pm">2:30pm</option>
				<option value="3:00pm">3:00pm</option>
				<option value="3:30pm">3:30pm</option>
				<option value="4:00pm">4:00pm</option>
				<option value="4:30pm">4:30pm</option>
				<option value="5:00pm">5:00pm</option>
				<option value="5:30pm">5:30pm</option>
				<option value="6:00pm">6:00pm</option>
				<option value="6:30pm">6:30pm</option>
				<option value="7:00pm">7:00pm</option>
				<option value="7:30pm">7:30pm</option>
				<option value="8:00pm">8:00pm</option>
				<option value="8:30pm">8:30pm</option>
				<option value="9:00pm">9:00pm</option>
				<option value="9:30pm">9:30pm</option>
				<option value="10:00pm">10:00pm</option>
			</select>
			</div>
			
			<div>
			<center>
				<input type="reset" value="Clear" />
				<input type="submit" value="Submit" />
			</center>
			</div>
			</form>
	</body>
</html>