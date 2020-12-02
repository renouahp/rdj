<?php $page = $_GET['page'] ?? ''; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Renaud & Dieuvielle"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Mega Drop Web</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-12 navbar navbar-expand-lg navbar-light fixed-top bg-light">
                <a class="navbar-brand" href="index.php">Mega Drop Web</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link <?php if($page == 'accueil' || $page == '') echo 'active' ?>" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?page=vetements">Vêtements</a>
                            <a class="dropdown-item" href="#">Livres</a>
                            <a class="dropdown-item" href="#"> Matériel informatique</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page == 'login') echo 'active' ?>" href="index.php?page=login">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">S'enregistrer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Panier</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2 d-inline w-auto" type="search" placeholder="Pulls, livres, Pc..">
                        <button class="btn btn-outline-success my-2 my-sm-0 position-relative ff" type="submit">Chercher</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>