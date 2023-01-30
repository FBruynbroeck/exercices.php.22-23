<?php
if(!empty($_POST['prenom'])){
    session_start();
    $_SESSION['prenom'] = $_POST['prenom'];
}
header('Location: /exercice4');
exit();
?>
