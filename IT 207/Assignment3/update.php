<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Assignment 3</title>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
		<link rel="stylesheet" href="contacts.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?>
	<body>  
        <div id="maincontent">
        <div class="mainBody">
		<form action="update.php" method="post">
		<?php
			$count = 0;
			$firstName  = checkUserInput($_POST['firstName']);
			$lastName = checkUserInput($_POST['lastName']);
			global $email;
			global $phoneNum;
			global $address;
			global $city;
			global $state;
			global $zip;
			if (isset($_POST['submit'])) {
				$count = 0;
				$firstName  = checkUserInput($_POST['firstName']);
				$lastName = checkUserInput($_POST['lastName']);
				$email = checkUserInput($_POST['email']);
				$phoneNum  = checkUserInput($_POST['phoneNum']);
				$address = checkUserInput($_POST['address']);
				$city = checkUserInput($_POST['city']);
				$state = checkUserInput($_POST['state']);
				$zip = checkUserInput($_POST['zip']);
				
				if ($count < 1) {
					$list = "$firstName, $lastName, $email, $phoneNum, $address, $city, $state, $zip\n";
					$file = fopen("records.txt", "a+");
					if (flock($file, LOCK_EX)){
						if (fwrite($file, $list) > 0) {
							echo "<p>New Contact Added</p>";
						}
						else {
							echo "<p>ERROR! cannot be </p>";
						}
						flock($file, LOCK_UN);
					}
					else {
						echo "<p>ERROR!</p>";
					}
				fclose($file);
				}
			}
			if ($count < 0) {
				echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form.</p>";
			}
			else {
				$lookThrough = file("records.txt");
				for ($i = 0; $i < count($lookThrough); ++$i) {
					$fields = explode(", ", $lookThrough[$i]);
					for ($j = 0; $j < count($fields); $j++) {
						if (strpos($firstName, $fields[0]) !== false && strpos($lastName, $fields[1]) !== false) {
							$firstName = $fields[0];
							$lastName = $fields[1];
							$email = $fields[2];
							$phoneNum = $fields[3];
							$address = $fields[4];
							$city = $fields[5];
							$state = $fields[6];
							$zip = $fields[7];
							$count = 0;
							break;
						}
						else {
							$count = -10;
						}
					}
				} 
				if ($count == -10) {
					echo "<p><p><br />ERROR! Name does not exist.</p>";
				} 
			else {
				//I tried to get all the inputs and display it on the field as a default value
				echo '<h1>CONTACT SEARCH AND UPDATE</h1>';
				echo '<form action="update.php" method="post">
				<br /><br /><br /><hr />
				<p>First Name: <input type="text" name="firstName" value="'.$firstName.'"/>
				Last Name: <input type="text" name="lastName" value="'.$lastName.'"/></p>
				<p>Email Address: <input type="text" name="email" value="'.$email.'"/></p>
				<p>Phone Number: <input type="text" name="phoneNum" value="'.$phoneNum.'"/></p>
				<p>Address: <input type="text" name="address" value="'.$address.'" />
				City: <input type="text" name="city" value="'.$city.'"/></p>
				<p>State: <select name="state">
				<option value="Alabama"'. ($state == 'Alabama' ? 'selected="selected"' : '') .' >Alabama</option>
				<option value="Alaska"'.($state == 'Alaska' ? 'selected="selected"' : '')  .'>Alaska</option>
				<option value="Arizona"'.($state == 'Arizona' ? 'selected="selected"' : '')  .'>Arizona</option>
				<option value="Arkansas"'.($state == 'Arkansas' ? 'selected="selected"' : '')  .'>Arkansas</option>
				<option value="California"'.($state == 'California' ? 'selected="selected"' : '')  .'>California</option>
				<option value="Colorado"'.($state == 'Colorado' ? 'selected="selected"' : '')  .'>Colorado</option>
				<option value="Connecticut"'.($state == 'Connecticut' ? 'selected="selected"' : '')  .'>Connecticut</option>
				<option value="Delaware"'.($state == 'DE' ? 'selected="Delaware"' : '')  .'>Delaware</option>
				<option value="DC"'.($state == 'DC' ? 'selected="selected"' : '')  .'>District of Columbia</option>
				<option value="Florida"'.($state == 'Florida' ? 'selected="selected"' : '')  .'>Florida</option>
				<option value="Georgia"'.($state == 'Georgia' ? 'selected="selected"' : '')  .'>Georgia</option>
				<option value="Hawaii"'.($state == 'Hawaii' ? 'selected="selected"' : '')  .'>Hawaii</option>
				<option value="Idaho"'.($state == 'Idaho' ? 'selected="selected"' : '')  .'>Idaho</option>
				<option value="Illinois"'.($state == 'Illinois' ? 'selected="selected"' : '')  .'>Illinois</option>
				<option value="Indiana"'.($state == 'Indiana' ? 'selected="selected"' : '')  .'>Indiana</option>
				<option value="Iowa"'.($state == 'Iowa' ? 'selected="selected"' : '')  .'>Iowa</option>
				<option value="Kansas"'.($state == 'Kansas' ? 'selected="selected"' : '')  .'>Kansas</option>
				<option value="Kentucky"'.($state == 'Kentucky' ? 'selected="selected"' : '')  .'>Kentucky</option>
				<option value="Louisiana"'.($state == 'Louisiana' ? 'selected="selected"' : '')  .'>Louisiana</option>
				<option value="Maine"'.($state == 'Maine' ? 'selected="selected"' : '')  .'>Maine</option>
				<option value="Maryland"'.($state == 'Maryland' ? 'selected="selected"' : '')  .'>Maryland</option>
				<option value="Massachusetts"'.($state == 'Massachusetts' ? 'selected="selected"' : '')  .'>Massachusetts</option>
				<option value="Michigan"'.($state == 'Michigan' ? 'selected="selected"' : '')  .'>Michigan</option>
				<option value="Minnesota"'.($state == 'Minnesota' ? 'selected="selected"' : '')  .'>Minnesota</option>
				<option value="Mississippi"'.($state == 'Mississippi' ? 'selected="selected"' : '')  .'>Mississippi</option>
				<option value="Missouri"'.($state == 'Missouri' ? 'selected="selected"' : '')  .'>Missouri</option>
				<option value="Montana"'.($state == 'Montana' ? 'selected="selected"' : '')  .'>Montana</option>
				<option value="Nebraska"'.($state == 'Nebraska' ? 'selected="selected"' : '')  .'>Nebraska</option>
				<option value="Nevada"'.($state == 'Nevada' ? 'selected="selected"' : '')  .'>Nevada</option>
				<option value="NewHampshire"'.($state == 'NewHampshire' ? 'selected="selected"' : '')  .'>New Hampshire</option>
				<option value="NewJersey"'.($state == 'NewJersey' ? 'selected="selected"' : '')  .'>New Jersey</option>
				<option value="NewMexico"'.($state == 'NewMexico' ? 'selected="selected"' : '')  .'>New Mexico</option>
				<option value="NewYork"'.($state == 'NewYork' ? 'selected="selected"' : '')  .'>New York</option>
				<option value="NorthCarolina"'.($state == 'NorthCarolina' ? 'selected="selected"' : '')  .'>North Carolina</option>
				<option value="NorthDakota"'.($state == 'NorthDakota' ? 'selected="selected"' : '')  .'>North Dakota</option>
				<option value="Ohio"'.($state == 'Ohio' ? 'selected="selected"' : '')  .'>Ohio</option>
				<option value="Oklahoma"'.($state == 'Oklahoma' ? 'selected="selected"' : '')  .'>Oklahoma</option>
				<option value="Oregon"'.($state == 'Oregon' ? 'selected="selected"' : '')  .'>Oregon</option>
				<option value="Pennsylvania"'.($state == 'Pennsylvania' ? 'selected="selected"' : '')  .'>Pennsylvania</option>
				<option value="RhodeIsland"'.($state == 'RhodeIsland' ? 'selected="selected"' : '')  .'>Rhode Island</option>
				<option value="SouthCarolina"'.($state == 'SouthCarolina' ? 'selected="selected"' : '')  .'>South Carolina</option>
				<option value="SouthDakota"'.($state == 'SouthDakota' ? 'selected="selected"' : '')  .'>South Dakota</option>
				<option value="Tennessee"'.($state == 'Tennessee' ? 'selected="selected"' : '')  .'>Tennessee</option>
				<option value="Texas"'.($state == 'Texas' ? 'selected="selected"' : '')  .'>Texas</option>
				<option value="Utah"'.($state == 'Utah' ? 'selected="selected"' : '')  .'>Utah</option>
				<option value="Vermont"'.($state == 'Vermont' ? 'selected="selected"' : '')  .'>Vermont</option>
				<option value="Virginia"'.($state == 'Virginia' ? 'selected="selected"' : '')  .'>Virginia</option>
				<option value="Washington"'.($state == 'Washington' ? 'selected="selected"' : '')  .'>Washington</option>
				<option value="WestVirginia"'.($state == 'WestVirginia' ? 'selected="selected"' : '')  .'>West Virginia</option>
				<option value="Wisconsin"'.($state == 'Wisconsin' ? 'selected="selected"' : '')  .'>Wisconsin</option>
				<option value="Wyoming"'.($state == 'Wyoming' ? 'selected="selected"' : '')  .'>Wyoming</option>
				</select>
				ZIP: <input type="text" name="zip" value="'.$zip.'"/></p>	
				<p><input type = "submit" name="submit" value = "Update Entry" /></p>
				<hr />
				</form>';
			}
		}
	?>
			<br/>
			
			<br/>
			<div>
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment3/index.php">Return to Directory</a></div>
			</div>
			<?php
				function checkUserInput($data) {
					global $count;
					if (empty($data)) {
						++$count;
						$get = "";
					}
					else {
						$get = trim($data);
						$get = stripslashes($data);
					}
					return ($get);
				}
			?>
		</form>	
		</div>
        </div>
    </body>
</html>