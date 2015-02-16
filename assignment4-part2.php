<?php

$servername = "localhost";
$username = "root";
$dbname = "videostore";

// Create connection
$conn = new mysqli($servername, $username, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO videos (name, category, length, rented) VALUES (?, ?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);
$stmt->bind_param($name, $category, $length, false);

// set parameters and execute
$name = "an action movie";
$category = "action";
$length = 122;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>