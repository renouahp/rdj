<?php

require_once "models/users_model.php";
$users_mod = new Users_Model();

$page = $_GET['page'] ?? '';

if($page == ''){
   require_once "views/pages/accueil.php";
}else if($page == 'login'){
    require_once "views/pages/connexion.php";
}else if($page == 'logout'){
    require_once "views/pages/logout.php";
}else if($page == 'signin'){
    require_once "views/pages/signin.php";
}else if($page == 'vetements'){
    require_once "views/pages/vetements.php";
}else if($page == 'livres'){
    require_once "views/pages/livres.php";
}else if($page == 'materiel'){
    require_once "views/pages/materiel.php";
}else {
    require_once "views/pages/404.php";
}

?>