<?php
session_start();
ob_start();
?>

<?php if(empty($_SESSION['prenom'])){ ?>
C'est la première fois que tu viens ici.
<br>
Comment t'appelles-tu ?
<form action="login.php" method="post">
    <label for="idprenom">Prénom:</label>
    <input id="idprenom" type="text" name="prenom" required>
    <input type="submit">
</form>
<?php } else { ?>
Bonjour <?php echo $_SESSION['prenom']; ?> !
<br>
Si tu veux te déconnecter, clique <a href="logout.php">ici</a>.
<?php } ?>

<?php
$title = "Exercice 4";
$content = ob_get_clean();
include '../template.php';
?>
