<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cars</title>
</head>
<body>
    <h1>Used Cars</h1>
<?php
require_once "settings.php";

// Step 1: connect
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

if ($dbconn) {
    // Step 2: create query
    $query = "SELECT * FROM cars";

    // Step 3: execute query
    $result = mysqli_query($dbconn, $query);

    // Step 4: check result
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>There are no cars to display.</p>";
        }
        mysqli_free_result($result);
    } else {
        echo "<p>Something is wrong with the query.</p>";
    }

    // Step 5: close connection
    mysqli_close($dbconn);
} else {
    echo "<p>Unable to connect to the db.</p>";
}
?>
</body>
</html>