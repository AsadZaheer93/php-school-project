<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Assignment 4</title>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
		<link rel="stylesheet" href="blog.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?>
	<body>  
        <div id="maincontent">
        <div class="blogBack">
        	<?php
        		$inputsEntered = true;
				if (!empty($_POST["name"])) {
					$name = $_POST["name"];
				}
				else {
					$inputsEntered = false;
				}
				if (!empty($_POST["email"])) {
					$email = $_POST["email"];
				}
				else {
					$inputsEntered = false;
				}
				if (!empty($_POST["comments"])) {
					$comments = $_POST["comments"];
				}
				else {
					$inputsEntered = false;
				}
				if ($inputsEntered == false) {
					echo "ERROR! Please enter valid values";
			?>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexT.php">Someone Else Want To Comment?</a></div>
				</div>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingComments.php">View Posting Comments </a></div>
				</div>   
			<?php 
				}
				else  {
					$info = $name . " | " . $email . " | " . $comments;
					$handle = @fopen("records.txt" , "a+t");
					if($handle != false) {
						if (!flock($handle, LOCK_SH)) {
							die("ERROR! LOCKED");
						}	
						$recordFile = file("records.txt"); 
						if(empty($recordFile)) {
							fwrite($handle, $info."\n");
							echo "<div> Comments Added </div>   
							<div>
								</br/>
								<hr/>
								Name: <a href='mailto:$email'>$name</a>
								<br/>
								Comments: $comments
								<hr/>
							</div>";
			?>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexT.php">Someone Else Want To Comment?</a></div>
				</div>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingComments.php">View Posting Comments </a></div>
				</div>   
			<?php
					}
					else {
						$duplicateComments = false;
						foreach($recordFile as $records) {
							$singleRecord = explode("|", $records);
							$checkName = $singleRecord[0]; 
							if($checkName == $name) {
								$duplicateComments = true;
							}		
						}
						if($duplicateComments == false) {
							fwrite($handle , $info . "\n");
							echo "<div> Comments Added </div>
								<div>
									</br/>
									<hr/>
									Name: <a href='mailto:$email'>$name</a>
									<br/>
									Comments: $comments
									<hr/>
									</div>";
			?>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexT.php">Someone Else Want To Comment?</a></div>
				</div>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingComments.php">View Posting Comments </a></div>
				</div>   
			<?php
						}
						else {
							echo "<div'> Comments Not Added </div>   
								<div>
								</br/>
								<hr/>
								One per person! You have already left comments for this posting. 
								<hr/>
								</div>";
			?>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexT.php">Someone Else Want To Comment?</a></div>
				</div>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingComments.php">View Posting Comments </a></div>
				</div>  
			<?php
						}
					}
					flock($handle, LOCK_UN);
					fclose($handle);	
				}
				else {	
					echo "ERROR! File not found";
			?>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexT.php">Someone Else Want To Comment?</a></div>
				</div>
				<div class="register">
					<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingComments.php">View Posting Comments </a></div>
				</div>   
			<?php
				}	
		}
			?>
        </div>
        </div>
    </body>
</html>