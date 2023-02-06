<?php
session_start();
ob_start();
?>

<?php if(!empty($_SESSION['login'])) { ?>
    Bienvenue <?php echo $_SESSION['login']; ?> !
    <br>
    Voici le sous-menu de l'application :
<?php } ?>

<nav class="nav flex-column">
<?php if(empty($_SESSION['login'])) { ?>
  <a class="nav-link" href="login.php">Se connecter</a>
<?php } else { ?>
  <a class="nav-link" href="logout.php">Se déconnecter</a>
  <a class="nav-link" href="admin.php">Panneau d'administration</a>
<?php } ?>
</nav>

<?php
$title = "Exercice 5";
$content = ob_get_clean();
include '../template.php';
?>
