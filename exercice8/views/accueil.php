<?php
ob_start();
?>
<h2>Accueil</h2>
<a href="contact">Contact</a>
<br>
<a href="users">Listing des utilisateurs</a>
<?php
$title = "Exercice 8";
$content = ob_get_clean();
include '../template.php';
?>
