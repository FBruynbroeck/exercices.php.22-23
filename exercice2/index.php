<?php
/* $title = 'Exercice 2'; */
/* $content = 'Les variables'; */
/* include '../template.php'; */

// Double slash pour faire un commentaire sur une ligne
// Préfixer une variable par $ pour la déclarer
$prenom = "Luc"; 
$nom = 'Dupont';
// echo permet d'afficher le contenu d'une variable
echo $prenom;
echo " ";
echo $nom;
echo "<br>";
echo $prenom." ".$nom;
$age = 25;
$taille = 1.81;
echo "<br>";
echo "Age: ".$age;
echo "<br>";
echo "Taille: ".$taille;
$adulte = true;
$adultetrad = array ( true => "Oui",
                      false => "Non");
echo "<br>";
echo "Adulte: ".$adultetrad[true];
$variable = NULL;
echo "<br>";
echo "NULL: ".$variable;
$liste = array("pomme", "poire", "peche");
echo "<br>";
echo $liste; // Va générer un warning car on ne peut pas afficher un tableau.
echo "<br>";
print_r($liste);
echo "<br>";
echo $liste[0];
$liste[3] = "fraise";
echo "<br>";
echo print_r($liste);
//Et depuis php5.4, vous pouvez également utiliser la syntaxe courte, qui remplace array() par [].
$liste2 = ["pomme", "poire", "peche"];
echo "<br>";
// print_r permet de représenter un objet sous forme de chaîne de caractères
print_r($liste2);
unset($liste2[0]);
echo "<br>";
echo print_r($liste2);
// https://www.php.net/manual/fr/function.array-splice.php
array_splice($liste2, 1);
echo "<br>";
echo print_r($liste2);

// Il existe également les variables superglobales, qui sont des variables prédéfinies dans PHP.
// https://www.php.net/manual/fr/language.variables.superglobals.php
// https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/variable-superglobale/
// Exemple: $_SERVER['DOCUMENT_ROOT'] qui contient le chemin du répertoire racine du serveur web.
?>
