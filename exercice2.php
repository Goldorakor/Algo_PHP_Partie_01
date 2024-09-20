<h1>Exercice 2</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$chaineDeCaracteres = "Notre formation commence aujourd'hui";
$nbDeMots = str_word_count($chaineDeCaracteres);

// affichage des résultats
echo "La phrase contient $nbDeMots mots.<br>";
echo "La phrase contient ".str_word_count($chaineDeCaracteres)." mots.<br>";
echo "De nouveau, deux méthodes d'affichage possibles." // la fonction entre deux points car il faut concaténer en présence d'une fonction.
?>