
<?php
$hn = 'localhost';
$db = 'shop';
$un = 'root';
$pw = 'root';

// Create connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nom, categorie, description, prix, image FROM shopy WHERE categorie = Pulls or categorie = Jupes or categorie = Robes";
// $sql = "SELECT * from shopy"; // fonctionne
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Nom: ". $row["nom"]. " - Categorie: ". $row["categorie"]. " " . $row["description"] . "Prix:" . $row["prix"] . $row["image"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

