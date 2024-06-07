<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/CSS/CSS_projet_perso.css">
    <title>Acceuil - Random Build</title>
    <link rel="icon" href="asset/img/Logo_projet_perso.ico" type="image/x-icon">
</head>
<body id="body" class="body_acceuil">
<header >
    <nav class="header_aceeuil">
        <ul class="navbar_acceuil">
            <li class="logo">
                <img class="images" src="asset/img/Logo_projet_perso.png" alt="Logo_projet_perso">
            </li>
            <li class="liens"><a href="Règles.php"> Règles</a></li>
            <li class="liens"><a href="Accueil.php"><h1  class="title">Random<br> build</h1> </a></li>
            <?php if(!isset($_SESSION["nom_user"])) : ?>
            <li class="liens"><a href="Se_Connecter.php"> Se connecter </a></li>
            <li class="liens"><a href="S'inscrire.php"> S'inscrire </a></li>
            <?php else : ?>
            <li class="liens"><a href=""> <?php echo $_SESSION['nom_user'] ?></a></li>
            <li class="liens"><a href="deconnexion.php"> Se Déconnecter </a></li>
            <?php endif ;?>
    </ul>
    </nav>
</header>