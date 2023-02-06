<?php
session_start();
/* Vérifier si l'utilisateur a un login dans sa session. Si pas, on le redirige vers la page d'accueil */
if(empty($_SESSION['login'])){
    header('Location: /exercice5');
    exit();
}
$title = 'Panneau d\'administration';
$content = 'Vous êtes sur la page d\'administration';
include('../template.php');
?>
