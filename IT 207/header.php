<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<title>Header</title>
       	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    </head>
    <body>
        <div id="header">       
        	<div id="headl">
        		<center><span class="bold">IT 207-004, Fall 2016</span><br>
        		Omar Nachawati <br>
        		George Mason University</center>
        	</div>
        	<div id="headr">
        		<center><span class="bold">Asad Zaheer</span><br>
        		<address> <a href="mailto:azaheer@masonlive.gmu.edu">azaheer@masonlive.gmu.edu</a>
        		<br></address> 
        		<?php
          			echo "<b>Last modified: </b>" . date ("H:i F d Y", getlastmod());
          			echo " EST";
          		?>
        		</center>
			</div>
		</div> 
    </body>
</html>