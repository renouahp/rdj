<?php 
// login.inc.php
$hn = 'localhost';
$db = 'shop';
$un = 'root';
$pw = 'root';

$conn = mysqli_connect($hn, $un, $pw, $db); 
if (mysqli_connect_error()) {
    die("Connexion echouée");
}
