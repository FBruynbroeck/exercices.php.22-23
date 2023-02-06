<?php
/* On vérifie si on reçoit un login en POST. Si oui, on alimente la session avec le login et on redirige l'utilisateur sur la page d'accueil. Si non, on affiche le formulaire. */
if(!empty($_POST['login'])) {
    session_start();
    $_SESSION['login'] = $_POST['login'];
    header('Location: /exercice5');
    exit();
}
session_start();
ob_start();
?>

<form action="login.php" method="post">
    <label for="idlogin">Nom d'utilisateur:</label>
    <input id="idlogin" type="text" name="login" required>
    <input type="submit">
</form>

<?php
$title = "Se connecter";
$content = ob_get_clean();
include '../template.php';
?>
