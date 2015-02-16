<?php
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/assignment4part2/assignment4part2html.php');
$servername = "oniddb.cws.oregonstate.edu";
$username = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";

//echo "Test echo ";
$name = "";

if (isset($_POST['name'])) {
    echo $_POST['name'];
    $name = $_POST['name'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
}

if (isset($_POST['category'])) {
    echo $_POST['category'];
    $category = $_POST['category'];
}else{
    // Fallback behaviour goes here
    echo "Provide a category please \n";
}
if (isset($_POST['length'])) {
    echo $_POST['length'];
    $length = $_POST['length'];
}else{
    // Fallback behaviour goes here
    echo "Provide a length please";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection succeeded? ";
//prepare and bind
$stmt = $conn->prepare("INSERT INTO videos (name, category, length, rented) VALUES (?, ?, ?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";

// set parameters and execute

//$category = "action";
//$length = 122;
$rented = false;
$stmt->bind_param("ssii", $name, $category, $length, $rented);

if($stmt->execute() === TRUE) {
	echo "New records created successfully";
}
else {
	echo "Error: " . $conn->error;
}

echo "The end of the program?";
$stmt->close();
$conn->close();


?>