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

$sql = "SELECT name, category, length, rented FROM videos";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Category</th>
<th>Length</th>
<th>Rented</th>
<th>Rent</th>
<th>Return</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$thename = $row['name'];
echo "<td>" . $thename . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['length'] . "</td>";
echo "<td>" . $row['rented'] . "</td>";

echo " <td><form action= 'checkout.php'  method= 'post'><input type='hidden' name='name' value=$thename /> 
            <input type= 'submit' value= 'Rent'/></form></td>\n"; 
echo " <td><form action= 'return.php'  method= 'post'><input type='hidden' name='name' value=$thename /> 
            <input type= 'submit' value= 'Return'/></form></td>\n"; 
echo "<td><form action= 'deleteone.php'  method= 'post'><input type='hidden' name='name' value=$thename /> 
            <input type= 'submit' value= 'Delete'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>