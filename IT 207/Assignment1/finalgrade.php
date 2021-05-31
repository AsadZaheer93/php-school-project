<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>IT 207 Grade Determiner</title>
		<link rel="stylesheet" href="../stylesheet.css" type="text/css"/>
	</head>
	<?php
		include '../menu.inc';
	?>
	<body>  
		<div id="maincontent">
		<center>
        	<?php
        		define("MAX", 100);
        		
				$ePart = $_POST['earnedParticipation'];
				$mPart = $_POST['maxParticipation'];
				$wPart = $_POST['weightParticipation'];
				
				$eQuiz = $_POST['earnedQuiz'];
				$mQuiz = $_POST['maxQuiz'];
				$wQuiz =$_POST['weightQuiz'];
				
				$eLab = $_POST['earnedLab'];
				$mLab = $_POST['maxLab'];
				$wLab =$_POST['weightLab'];
				
				$ePrac = $_POST['earnedPracticum'];
				$mPrac = $_POST['maxPracticum'];
				$wPrac =$_POST['weightPracticum'];
				
				
				$participationGrade = calculateGrade($ePart, $mPart);
				$weightedParticipationGrade = weightedGrade($participationGrade, $wPart);
				
				$quizGrade = calculateGrade($eQuiz, $mQuiz);
				$weightedQuizGrade = weightedGrade($quizGrade, $wQuiz);
				
				$labGrade = calculateGrade($eLab, $mLab);
				$weightedLabGrade = weightedGrade($labGrade, $wLab);
				
				$pracGrade = calculateGrade($ePrac, $mPrac);
				$weightedPracGrade = weightedGrade($pracGrade, $wPrac);
				
				$total = $weightedParticipationGrade + $weightedQuizGrade + $weightedLabGrade + $weightedPracGrade;
				
				$grade = "";
        		$total >= 97 ? $grade = "A+" : "";
				$total >= 93 && $total < 97 ? $grade = "A" : "";
				$total >= 90 && $total < 93 ? $grade = "A-" : "";
				$total >= 87 && $total < 90 ? $grade = "B+" : "";
				$total >= 83 && $total < 87 ? $grade = "B" : "";
				$total >= 80 && $total < 83 ? $grade = "B-" : "";
				$total >= 77 && $total < 80 ? $grade = "C+" : "";
				$total >= 73 && $total < 77 ? $grade = "C" : "";
				$total >= 70 && $total < 73 ? $grade = "C-" : "";
				$total >= 60 && $total < 70 ? $grade = "D" : "";
				$total < 60 ? $grade = "F" : "";
				
				function calculateGrade($earned, $max) {
					$max == 0 ? $res = 0 : $res = ($earned / $max) * MAX;
					return $res;
				}
				
				function weightedGrade($calcGrade, $weight) {
					$res = ($calcGrade * $weight) / MAX;
					return $res;
				}
				
				echo "<p>You earned a $participationGrade% for Participation, with a weighted value of $weightedParticipationGrade%</p>";
        		echo "<p>You earned a $quizGrade% for the Quizzes, with a weighted value of $weightedQuizGrade%</p>";
        		echo "<p>You earned a $labGrade% for the Lab Assignments, with a weighted value of $weightedLabGrade%</p>";
				echo "<p>You earned a $pracGrade% for the Practica, with a weighted value of $weightedPracGrade%</p>";
				echo "<p><strong>Your Final Grade is a $total%, which is a $grade.</strong></p>";
        	?>
    	</center>
        </div>
    </body>
</html>

