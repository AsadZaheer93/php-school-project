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
			$name = $_POST['name'];
			$email = $_POST['email'];
			$comments = $_POST['comments'];
				
			if($name == "" || $email == "" || $comments == ""){
					echo "ERROR!";
			}
			else{
				$serverName = "helios.ite.gmu.edu";
				$username = "azaheer";
				$password = "geelee";
				$connection = @mysqli_connect($serverName, $username, $password, $username);
				if(!$connection){
				   	die("ERROR! Connection Failed: " . mysqli_connect_error());
				}
				$query = "create table comments(".
					"name varchar(50) NOT NULL,".
					"email varchar(50),". 
					"comments varchar(255),". 
					"primary key (name));";
				mysqli_query($connection, $query); 
						
				$get = "select * from comments where name = '$name'";
				$rows = @mysqli_num_rows(@mysql_query($connection, $get));
				if($rows == 0){
					$add = "insert into comments values('$name', '$email', '$comments')";
					mysqli_query($connection, $add);
					echo "<h1> Comments Added</h1>";
					echo "<hr/>";
					echo "Name: " . "<a href='mailto:$email'>$name</a>"."<br/>";
					echo "Comment: " . $comments;
				}
				else{
					echo "<h1>Comments Not Added/h1>";
					echo "<br/>";
					echo "<hr/>";
					echo "One per person! You have already left comments for this posting.";
					echo "<hr/>";
				}
				mysqli_close($connection);
			}
		?>        	
		<div class="register">
			<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/indexD.php">Someone Else Want To Comment?</a></div>
		</div>
		<div class="register">
			<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingCommentsD.php">View Posting Comments </a></div>
		</div>   
        </div>
        </div>
    </body>
</html>