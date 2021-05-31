<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Assignment 4</title>
		<link rel="stylesheet" href="blog.css" type="text/css"/>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?> 
	<body> 
        <div id="maincontent">
        <div class="blogBack">
        <form action="addComments.php" method="post">
        	<h1>Huh?</h1>
        	<p>
        		Krischner and Karpinksi report that: <br/>
        		Studens who used social networking sites while studying scored 20% lower on tests and students who used social media had an average<br/>
        		GPA of 3.06 versus non-users who had an average GPA of 3.82.<br/>
        		Source: Paul A. Krischner and Aryn C. Karpinski, "Facebook and Academic Performance," Computers in Human Behavior, Nov. 2010<br/>
        	</p>
        	<h1>Add Comments</h1>
        	<hr/>
        	<br/>
        	<div>
				<label for="name">Name: </label> 
				<input type="text" id="name" name="name" placeholder="Name" />
			</div>
			<br/>
			<div>
				<label for="email">E-mail: </label> 
				<input type="text" id="email" name="email" placeholder="example@abc.com" />
			</div>
			<br/>
			<div>
				<label for="comments">Comments: </label> 
				<input type="text" id="comments" name="comments" placeholder="Please put your comments here" />
			</div>
			<br/>
			<div>
				<input type="submit" value="Sign" />
				<input type="reset" value="Reset Form" />
			</div>
			<hr/>
			<div class="register">
				<div><a href="http://helios.ite.gmu.edu/~azaheer/IT207/Assignment4/viewPostingComments.php">View Posting Comments</a></div>
			</div>
		</form>
        </div>
        </div>
    </body>
</html>