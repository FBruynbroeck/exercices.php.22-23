<?php
ob_start();

//PDO: PHP Data Objects
$bdd = new PDO('mysql:host=127.0.0.1;dbname=cours;charset=utf8', 'root', 'password');

$reponse = $bdd->query('SELECT * FROM user');

//print_r($reponse);
//reponse est un objet PDOStatement (voir doc)

//avec fetch
echo "<h1>Utilisation de fetch</h1>";
while ($user = $reponse->fetch())
{
    echo "ID: ".$user['id'];
    echo '<br>';
    echo "LOGIN: ".$user['login'];
    echo '<br>';
    echo "PASSWORD: ".$user['password'];
    echo '<br>';
}
$reponse->closeCursor(); // Termine le traitement de la requête

//avec fetchAll
echo '<br>';
echo "<h1>Utilisation de fetchAll</h1>";
$reponse = $bdd->query('SELECT * FROM user');
foreach($reponse->fetchAll() as $user){
    echo "ID: ".$user['id'];
    echo '<br>';
    echo "LOGIN: ".$user['login'];
    echo '<br>';
    echo "PASSWORD: ".$user['password'];
}
$reponse->closeCursor(); // Termine le traitement de la requête
echo '<br>';
echo '<br>';

echo "<h1>Select avec concaténation</h1>";
// query => Exécute une query SQL et retourne un jeu de résultats en tant qu'objet PDOStatement
$login = 'admin';
$reponse = $bdd->query('SELECT * FROM user WHERE login = "'.$login.'"');
//$reponse = $bdd->query('SELECT * FROM user WHERE login = "admin"');
echo '<br>';
echo print_r($reponse->fetch());
echo '<br>';
echo '<br>';
echo "<h1>Select avec prepare/execute</h1>";
// prepare => prépare une query SQL et retourne un objet PDOStatement (la query n'est pas exécuter. il faut faire appel à la méthode execute pour cela)
$reponse = $bdd->prepare('SELECT * FROM user WHERE login = :login');
// execute => exécute une query préparée (méthode à exécuter sur un objet PDOStatement)
$reponse->execute(array(':login' => 'admin'));
echo '<br>';
echo print_r($reponse->fetchAll());
echo '<br>';
$reponse->execute(array(':login' => 'toto'));
echo '<br>';
echo print_r($reponse->fetchAll());
echo '<br>';

$userform = 'toto';
$passform = 'tata';
$reponse = $bdd->prepare('UPDATE user SET password = :password WHERE login = :login');
$reponse->execute(array(':password' => $passform, ':login' => $userform));

// exec => Exécute une query SQL et retourne le nombre de lignes affectées (ne pas utiliser pour du select)
//echo $bdd->exec('UPDATE USER SET login = \'admin\' WHERE login = \'test\'');


$title = 'Exercice 6';
$content = ob_get_clean();
include('../template.php');
?>
