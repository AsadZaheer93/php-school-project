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
			<h1>
				Online Contacts Directory
			</h1>
			
			<h2>
				Search for a Contact
			</h2>
			
			<div>
				<br/>
				<label for="firstName">First Name</label> 
				<input type="text" id="firstName" name="firstName" placeholder="First Name" />
				<br/>
			</div>
			<div>
				<br/>
				<br/>
				<label for="lastName">Last Name</label> 
				<input type="text" id="lastName" name="lastName" placeholder="Last Name" />
				<br/>
			</div>
			<br/>
			<br/>
			<div>
				<input type="submit" value="Search" />
			</div>
			<hr>
			<div>
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment3/newContact.php">Add New Contact Entry</a></div>
			</div>
		</form>	
		</div>
        </div>
    </body>
</html>