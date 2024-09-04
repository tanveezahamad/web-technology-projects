<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$teamName = $_POST['team-name'];
$matchesPlayed = $_POST['matches-played'];
$matchesWon = $_POST['matches-won'];
$matchesLost = $_POST['matches-lost'];
$netStrikeRate = $_POST['net-strike-rate'];
$totalPoints = $_POST['total-points'];

// Generate a unique id (you can use a more robust method if needed)
$id = uniqid();

// Insert data into the database, including the "id" field
$sql = "INSERT INTO ipl VALUES (NULL, '$teamName', $matchesPlayed, $matchesWon, $matchesLost, $netStrikeRate, $totalPoints)";



if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, redirect to a success page
    header("Location: success_page.html");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

