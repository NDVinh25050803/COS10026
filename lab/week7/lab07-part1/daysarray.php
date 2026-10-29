<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Lab 7 Task 2: experimenting with PHP arrays">
	<meta name="author" content="Your Name">
	<title>PHP Variables, Arrays and Operators</title>
</head>
<body>
	<h1>PHP Variables, Arrays and Operators</h1>
<?php
	// Step 1: array of days in English
	$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	echo "<p>The days of the week in English are:<br>\n";
	echo implode(", ", $days), ".</p>\n";      // join elements with ", "

	// Step 3: update the same array with French values
	$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
	echo "<p>The days of the week in French are:<br>\n";
	echo implode(", ", $days), ".</p>\n";
?>
</body>
</html>
