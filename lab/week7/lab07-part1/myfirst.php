<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Lab 7 Task 1: PHP variables, arrays and operators">
	<meta name="author" content="Your Name">
	<title>Using PHP Variables, arrays and operators</title>
</head>
<body>
	<h1>PHP Variables, arrays and operators</h1>
<?php
	$marks = array(85, 85, 95);                       // declare and initialise array
	$marks[1] = 90;                                   // modify second element (index 1)
	$ave = ($marks[0] + $marks[1] + $marks[2]) / 3;   // compute average

	if ($ave >= 50)
		$status = "PASSED";
	else
		$status = "FAILED";

	// Double quotes: PHP replaces $ave and $status with their values
	echo "<p>The average score is $ave. You $status.</p>";
?>
</body>
</html>
