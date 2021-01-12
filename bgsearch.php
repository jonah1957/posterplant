
<?php

$servername = "localhost";
$username = "arzknkmy_id_rsa";
$password = "Jg116162";
$dbname = "arzknkmy_bgcatalog";


$name = $_POST["name"];
$medium = $_POST["medium"];
$year = $_POST["year"];
$theme = $_POST["theme"];
$paint_type = $_POST["paint_type"];
$height = (int)$_POST["height"];
$width = (int)$_POST["width"];
$catalognumber = $_POST["catalognumber"];
$price = (int)$_POST["price"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from painting INTO painting WHERE $field LIKE $field";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
