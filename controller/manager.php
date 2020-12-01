<?php

//require_once "model/model_stag.php"; // model.php
//$mod = new Model_Stag();

$page = $_GET['page'] ?? '';

if($page == ''){
   require_once "views/pages/accueil.php";
}else {
    require_once "views/pages/404.php";
}

?>