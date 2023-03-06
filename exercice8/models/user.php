<?php

function getUsers() {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=cours;charset=utf8', 'root', 'password');
    $reponse = $bdd->query('SELECT * FROM user');
    $users = $reponse->fetchAll();
    $reponse->closeCursor();
    return $users;
}

?>
