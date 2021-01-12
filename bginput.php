
<?php

$servername = "localhost";
$username = "arzknkmy_id_rsa";
$password = "Jg116162";
$dbname = "arzknkmy_bgcatalog";

// Create connection
$name = $_POST["name"];
$medium = $_POST["medium"];
$year = $_POST["year"];
$theme = $_POST["theme"];
$paint_type = $_POST["paint_type"];
$height = (int)$_POST["height"];
$width = (int)$_POST["width"];
$catalognumber = $_POST["catalognumber"];
$price = (int)$_POST["price"];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (strlen($year) <5){
	$year = $year . "-01-01";
}	

$sql = "INSERT INTO painting(name , medium, year, theme, paint_type, height, width, catalognumber, price)
VALUES ('$name', '$medium', '$year', '$theme', '$paint_type', '$height', '$width', '$catalognumber', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!-- new painting -->
<form action = "bgpaintings.html" method = "get">
  <button name="search" type="submit" value="search">New Painting</button>
</form>
