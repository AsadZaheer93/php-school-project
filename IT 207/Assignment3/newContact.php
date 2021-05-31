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
		<form action="newContact.php" method="post">
			<h1>
				New Contact Entry
			</h1>
			<div>
				<label for="firstName">First Name</label> 
				<input type="text" id="firstName" name="firstName" placeholder="First Name" />
				<label for="lastName">Last Name</label> 
				<input type="text" id="lastName" name="lastName" placeholder="Last Name" />
			</div>
			<br/>
			<div>
				<label for="email">Email Address</label> 
				<input type="text" id="email" name="email" placeholder="123@abc.com" />
			<div/>
			<br/>
			<div>
				<label for="phoneNum">Phone Number</label> 
				<input type="text" id="phoneNum" name="phoneNum" placeholder="phoneNum" />
			<div/>
			<br/>
			<div>
				<label for="address">Address</label> 
				<input type="text" id="address" name="address" placeholder="address" />
				<label for="city">City</label> 
				<input type="text" id="city" name="city" placeholder="city" />
			</div>
			<br/>
			<div>
				<label for="state">State</label>
				<select name="state"> 
					<option value="Alabama">Alabama</option>
					<option value="Alaska">Alaska</option>
					<option value="Arizona">Arizona</option>
					<option value="Arkansas">Arkansas</option>
					<option value="California">California</option>
					<option value="Colorado">Colorado</option>
					<option value="Connecticut">Connecticut</option>
					<option value="Delaware">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="Florida">Florida</option>
					<option value="Georgia">Georgia</option>
					<option value="Hawaii">Hawaii</option>
					<option value="Idaho">Idaho</option>
					<option value="Illinois">Illinois</option>
					<option value="Indiana">Indiana</option>
					<option value="Iowa">Iowa</option>
					<option value="Kansas">Kansas</option>
					<option value="Kentucky">Kentucky</option>
					<option value="Louisiana">Louisiana</option>
					<option value="Maine">Maine</option>
					<option value="Maryland">Maryland</option>
					<option value="Massachusetts">Massachusetts</option>
					<option value="Michigan">Michigan</option>
					<option value="Minnesota">Minnesota</option>
					<option value="Mississippi">Mississippi</option>
					<option value="Missouri">Missouri</option>
					<option value="Montana">Montana</option>
					<option value="Nebraska">Nebraska</option>
					<option value="Nevada">Nevada</option>
					<option value="NewHampshire">New Hampshire</option>
					<option value="NewJersey">New Jersey</option>
					<option value="NewMexico">New Mexico</option>
					<option value="NewYork">New York</option>
					<option value="NorthCarolina">North Carolina</option>
					<option value="NorthDakota">North Dakota</option>
					<option value="Ohio">Ohio</option>
					<option value="Oklahoma">Oklahoma</option>
					<option value="Oregon">Oregon</option>
					<option value="Pennsylvania">Pennsylvania</option>
					<option value="RhodeIsland">Rhode Island</option>
					<option value="SouthCarolina">South Carolina</option>
					<option value="SouthDakota">South Dakota</option>
					<option value="Tennessee">Tennessee</option>
					<option value="Texas">Texas</option>
					<option value="Utah">Utah</option>
					<option value="Vermont">Vermont</option>
					<option value="Virginia">Virginia</option>
					<option value="Washington">Washington</option>
					<option value="WestVirginia">West Virginia</option>
					<option value="Wisconsin">Wisconsin</option>
					<option value="Wyoming">Wyoming</option>
				<select/>
				<label for="zip">Zip</label> 
				<input type="text" id="zip" name="zip" placeholder="zip" />
			</div>
			<br/>
			<div>
				<input type="submit" name="submit" value="Add Entry" />
			</div>
			<br/>
			<div>
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment3/index.php">Return to Directory</a></div>
			</div>
			<?php
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
		
				if ($count >= 1) {
					echo "<p>You must enter a value in each field. Click your browser's Back button to return to the form.</p>";
				}
				else {
					$list = "$firstName, $lastName, $email, $phoneNum, $address, $city, $state, $zip\n";
					$file = fopen("records.txt", "a+");
					if (flock($file, LOCK_EX)){
						if (fwrite($file, $list) > 0) {
							echo "<p>New Contact Added</p>";
						}
						else {
							echo "<p>ERROR! cannot be Added</p>";
						}
						flock($file, LOCK_UN);
					}
					else {
						echo "<p>ERROR!</p>";
					}
				fclose($file);
				}
			}
			
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