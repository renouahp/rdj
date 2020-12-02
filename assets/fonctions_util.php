<?php
function protect_montexte($param) {

    $param = trim($param);              // enlever les espaces au début et à la fin
    $param = stripslashes($param);      // enlever les backslash 
    $param = htmlspecialchars($param);  // convertir les "<" et les ">" en code html. Marche aussi pour &,",' 
    return $param;

}