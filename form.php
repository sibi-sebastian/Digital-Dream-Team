<?php
// Retrieve form data
$strength = $_POST['strength'];
$goals = $_POST['goals'];
$habits = $_POST['habits'];
$challenges = $_POST['challenges'];
$studyTime = $_POST['studyTime'];

// Create a database connection
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the database
$sql = "INSERT INTO survey_results (strength, goals, habits, challenges, Time)
        VALUES ('$strength', '$goals', '$habits', '$challenges', '$studyTime')";

if ($conn->query($sql) === true) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>