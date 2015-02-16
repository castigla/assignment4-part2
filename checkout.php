<?php
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/assignment4part2/assignment4part2html.php');
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
if (isset($_POST['name'])) {
    echo $_POST['name'];
    $name = $_POST['name'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
}
$sql = "update videos set rented = true where name = '$name'";
$result = $conn->query($sql);

?>