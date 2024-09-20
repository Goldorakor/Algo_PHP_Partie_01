<h1>Exercice 3</h1>

<p>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot "aujour'hui" par le mot "demain".<br>
 Afficher l'ancienne et la nouvelle phrase.</p>

<h2>Résultats :</h2>


<?php
// première méthode

// déclaration des variables
$chaineDeCaracteres01 = "Notre formation commence aujourd'hui.";
$chaineDeCaracteres02 = "Notre formation commence demain.<br>";
// affichage des deux phrases
echo "$chaineDeCaracteres01<br>";
echo $chaineDeCaracteres02;

// deuxième méthode
$chaineDeCaracteres03 = "aujourd'hui";
$chaineDeCaracteres04 = "demain";
// affichage des deux phrases
echo "Notre formation commence $chaineDeCaracteres03<br>";
echo "Notre formation commence $chaineDeCaracteres04";
?>