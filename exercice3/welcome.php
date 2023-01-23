<?php
if(empty($_POST['prenom']) or empty($_POST['sexe'])){
    header('Location: /exercice3');
    exit();
}
$title = 'Bienvenue';
$sexe = $_POST['sexe'];
$civilite = ['H' => 'Monsieur', 'F' => 'Madame'];
$content = 'Bienvenue '.$civilite[$sexe].' '.$_POST['prenom'];
include '../template.php';
?>
