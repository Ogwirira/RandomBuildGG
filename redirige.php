<?php
session_start(); // Démarre la session

if (isset($_SESSION['nom_user'])) {
    // Si la variable de session 'nom_user' est définie
    header("Location: Accueil.php"); // Redirige vers la page d'accueil
    exit(); // Assure que le script s'arrête après la redirection
} else {
    // Si la variable de session 'nom_user' n'est pas définie
    header("Location: Se_connecter.php"); // Redirige vers la page de connexion
    exit(); // Assure que le script s'arrête après la redirection
}
?>