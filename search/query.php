
<?php

$servername = "localhost";
$username = "arzknkmy_id_rsa";
$password = "Jg116162";
$dbname = "arzknkmy_bgcatalog";


$field = $_POST["fields"];
$term = $_POST["term"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//name	medium	year	theme	paint_type	height	width	catalognumber	price
if ($field == "year"){
	$term = $term . "%";
}		
$sql = ($term !== "*"?"SELECT * FROM painting WHERE $field LIKE '$term'":"SELECT * FROM painting");

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$picture = $row['name'] . ".jpg";
        echo "Name: ". $row['name'] . "<br>";
        echo "Medium: " . $row['medium'] . "<br>";
        echo "Year: " . substr($row['year'],0,4) . "<br>";
        echo "Theme: " . $row["theme"] . "<br>";
        echo "Paint: " . $row['paint_type'] . "<br>";
        echo "Height: " . $row['height'] . "<br>";
        echo "Width: " . $row['width'] . "<br>";
        echo "Cat. Code: " . $row['catalognumber'] . "<br>";
        echo "Price: " . $row['price'] . "<br><br>";
		echo "<img src='./bgimages/$picture'>";
		echo "<br><br>";	
//		echo "<img src='./bgimages/kingdavid2.jpg'><br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>
<!-- search again -->
<form action = "search.html" method = "get">
  <button name="search" type="submit" value="search">New Search</button>
</form>
