<!--Script van W3Scools-->

<!DOCTYPE html>
<html>
<body>

<?php
$servername = "mysql01.service.rug.nl";
$username = "s2174634"; 
$password = "ierah3tei3";
$dbname = "s2174634";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT fname, lname FROM congres_aanmeldingen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Voornaam: " . $row["fname"]. " Achternaam " . $row["lname"]. " ". "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>