<h1>Exercice 1</h1>

<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus)</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$chaineDeCaracteres = "Notre formation commence aujourd'hui";
$nbDeCaracteres = strlen($chaineDeCaracteres);

// affichage des résultats
echo "La phrase contient $nbDeCaracteres caractères.<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères.<br>";
echo "Deux méthodes d'affichage possibles." // la fonction entre deux points car il faut concaténer en présence d'une fonction.
?>