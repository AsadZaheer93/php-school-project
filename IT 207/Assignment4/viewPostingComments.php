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
        	<h1>Huh?</h1>
        	<p>
        		Krischner and Karpinksi report that: <br/>
        		Studens who used social networking sites while studying scored 20% lower on tests and students who used social media had an average<br/>
        		GPA of 3.06 versus non-users who had an average GPA of 3.82.<br/>
        		Source: Paul A. Krischner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010<br/>
        	</p>
        	<h1>Comments</h1>
        	<?php
				$handle = @fopen("records.txt","a+t");
				if($handle != false) {
					if (!flock($handle, LOCK_SH)) {
						die("ERROR! LOCKED");
					}
					$recordFile = file("records.txt");
						echo "<hr/>";
						foreach ($recordFile as $key => $records) {
							$singleRecord = explode("|", $records);
							echo " $key. &nbsp&nbsp
								Name: <a href='mailto:$singleRecord[1]'>$singleRecord[0]</a>                      
								<br/>
								&nbsp&nbsp
								Comments: $singleRecord[2]
								<hr/>";
						}
			?>	
					<div class="register">
						<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexT.php">Add New Comment</a></div>
					</div> 
					<div class="register">
						<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/sortAscending.php">Sort Comments A-Z(by name)</a></div>
					</div>    
					<div class="register">
						<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/sortDescending.php">Sort Comments Z-A(by name)</a></div>
					</div> 
					<form action="deletedComment.php" method="post">
						Delete Comment Number:
						<input type="text" name="delete"> <button type="submit" value="Delete">Delete</button>
					</form>
			<?php 
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
			?>
        </div>
        </div>
    </body>
</html>