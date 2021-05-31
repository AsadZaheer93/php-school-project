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
				$serverName = "helios.ite.gmu.edu";
				$username = "azaheer";
				$password = "geelee";
				$connection = @mysqli_connect($serverName, $username, $password, $username);
				if(!$connection){
					die("ERROR! Connection Failed: (" .mysql_error().")");
				}
				$count = 0;
				$queryResult = mysqli_query($connection, "select * from comments");
				$rowNum = mysqli_num_rows($queryResult);
				
				$row = mysqli_fetch_row($queryResult);
				while($row){
					echo 
						$count . ". ". "&nbsp&nbsp&nbsp
						Name: &nbsp <a href='mailto:$row[1]'>$row[0]</a>
						<br/>
						&nbsp&nbsp&nbsp&nbsp&nbsp
						Comments: &nbsp $row[2] 
						<br/>
						<hr/>
					";
					$row = mysqli_fetch_row($queryResult);
					$count++;
				}
				mysqli_close($connection);
			?>
			<div class="register">
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexD.php">Add New Comment</a></div>
			</div> 
			<div class="register">
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/sortAscendingD.php">Sort Comments A-Z(by name)</a></div>
			</div>    
			<div class="register">
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/sortDescendingD.php">Sort Comments Z-A(by name)</a></div>
			</div> 
			<form action="deletedCommentD.php" method="post">
				Delete Comment Number:
			<input type="text" name="delete"> <button type="submit" value="Delete">Delete</button>
			</form>  
        </div>
        </div>
    </body>
</html>