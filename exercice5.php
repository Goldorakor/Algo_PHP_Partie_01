<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$valeurEnFrancs = 150;
$valeurEnEuros = 150 / 6.15;
$valeurEnEurosAffichee = round ($valeurEnEuros , 2);

// affichage des résultats
echo "$valeurEnFrancs francs valent $valeurEnEurosAffichee euros, avec deux chiffres après la virgule.<br>";
?>