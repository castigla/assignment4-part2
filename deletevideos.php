<?php
$servername = "oniddb.cws.oregonstate.edu";
$username = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "delete from videos";
$result = $conn->query($sql);

$conn->close();
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/assignment4part2/assignment4part2html.php');
?>