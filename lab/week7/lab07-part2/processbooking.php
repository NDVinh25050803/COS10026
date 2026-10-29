<?php
	// Block direct access: if the form was not submitted, send the user back to the form.
	// header() must run BEFORE any HTML output, so this block sits above <!DOCTYPE html>.
	if (!isset($_POST["firstname"])) {
		header("Location: register.html");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Tour booking confirmation">
	<meta name="keywords" content="MiddleEarth, Tours, Rohan, Booking">
	<meta name="author" content="Your Name">
	<title>Booking Confirmation</title>
</head>
<body>
	<h1>Rohirrim Tour Booking Confirmation</h1>
<?php
	// Text fields
	$firstname = $_POST["firstname"];
	$lastname  = isset($_POST["lastname"])  ? $_POST["lastname"]  : "";
	$age       = isset($_POST["age"])       ? $_POST["age"]       : "";
	$food      = isset($_POST["food"])      ? $_POST["food"]      : "none";
	$bookday   = isset($_POST["bookday"])   ? $_POST["bookday"]   : "";
	$partysize = isset($_POST["partysize"]) ? $_POST["partysize"] : "";

	// Radio buttons
	$species = "Unknown";
	if (isset($_POST["species"])) {
		switch ($_POST["species"]) {
			case "M": $species = "Human";  break;
			case "D": $species = "Dwarf";  break;
			case "E": $species = "Elf";    break;
			case "H": $species = "Hobbit"; break;
		}
	}

	// Checkboxes
	$booking = array();
	if (isset($_POST["accom"])) $booking[] = "Accommodation";
	if (isset($_POST["4day"]))  $booking[] = "Four-day tour";
	if (isset($_POST["10day"])) $booking[] = "Ten-day tour";

	if (count($booking) > 0)
		$bookingText = "You are now booked on the " . implode(" and ", $booking);
	else
		$bookingText = "You have not selected any tour or accommodation";

	// Output
	echo "<p>Welcome ", htmlspecialchars($firstname), " ", htmlspecialchars($lastname), "!<br>\n";
	echo htmlspecialchars($bookingText), "<br>\n";
	echo "Species: ", $species, "<br>\n";
	echo "Age: ", htmlspecialchars($age), "<br>\n";
	echo "Meal Preference: ", htmlspecialchars($food), "<br>\n";
	echo "Booking date: ", htmlspecialchars($bookday), "<br>\n";
	echo "Number of travellers: ", htmlspecialchars($partysize), "</p>\n";
?>
	<p><a href="register.html">Back to booking form</a></p>
</body>
</html>
