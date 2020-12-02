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

$sql = "SELECT nom, categorie, description, prix, image FROM shopy WHERE categorie='Scientifique' or categorie='Science-Fiction' or categorie='Horreur' or categorie='Aventure'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Nom: ". $row["nom"]. " <br> Categorie: ". $row["categorie"]. " " . "<br>" . $row["description"] . "<br>Prix:" . $row["prix"] ."<br>" . $row["image"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>