<?php
session_start();
session_unset(); // On détruit les variables de notre session (les données de l'utilisateur)
session_destroy(); // On détruit notre session (le fichier de session)
header("Location: /exercice4");
exit();
?>
