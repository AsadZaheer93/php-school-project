<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>My Web Page</title>
        <link type="text/css" href="stylesheet.css" rel="stylesheet"/>
    </head>
    <?php
    	include 'menu.inc';
    ?>
    <body>
        <div id="left"> 
        		 <center><img src="profile.jpg" alt="Photo" 
        		 style="width:200px;height:200px"></center>
        	</div>
			<div id="bleft">
        		<span class="bold">Summary</span> 
        			<?php
        			echo
        			'<ul>
        				<li>Personal</li> 
        					I am 22 years old living in Sterling Virginia. I am from Pakistan.
        					I have 2 brothers and one sister and I was born in Pakistan and later 
        					when I was ';?>
        					<?php
        					echo strlen("elevenmonth");
        					echo ' months old I came here to the US.';
        			?>
        			<br><br>
        			<?php
        				echo '<li>Academic</li>
        					I am pursing my bachelors in IT with a concentration in security and
        					expected graduation date is Fall 2017. My next step afterwards
        					is to get my masters degree in cyber security over at George 
        					Washington University.
        			</ul>';
        			?>	 
        	</div> 
        	<div id="right">
        		<?php
        		print '<center> <span class="bold">Professional & Personal Details</span><br><br><br><br>
        		I went to NOVA for 2 years studying information technology then transfered 
        		to George Mason in Spring ';
        		echo date(2014);
        		echo ' us the guaranteed admission process.<br><br><br><br> 
        		I have worked at Anybill for 10 months as a junior developer and QA analyst
        		while also working at Cold Stone for a year and a half. But now I currently teach 
        		kids how to build and program robots while also teaching financing, CSI investigations,
        		survival of the fittest and building cars/rockets. 				
          		</center>';
          		?>
        	</div>
    </body>
</html>