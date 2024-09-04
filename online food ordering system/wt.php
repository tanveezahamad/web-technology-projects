<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kushal3";

// Create a new database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user data and quiz results from POST parameters
$name = isset($_POST['name']) ? $_POST['name'] : '';
//$age = isset($_POST['age']) ? $_POST['age'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$total = isset($_POST['total']) ? $_POST['total'] : 0;

// Use prepared statements to prevent SQL injection
//$stmt = $conn->prepare("INSERT INTO orders1 (name,email) VALUES ("$name","$email")");
//$stmt->bind_param("si", $name, $email);
$stmt = $conn->prepare("INSERT INTO orders1 (name, email,total) VALUES (?, ?,?)");
$stmt->bind_param("sss", $name, $email,$total);

if ($stmt->execute()) {
    echo "Results stored successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>