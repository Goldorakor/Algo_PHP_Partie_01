<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$phrase01 = "Il pleut dehors";
$phrase02 = "La mariée ira mal";
$phrase03 = "Engage le jeu que je le gagne";
$invPhrase01 = strrev($phrase01);
$invPhrase02 = strrev($phrase02);
$invPhrase03 = strrev($phrase03);

// affichage des résultats temporaires
echo "la phrase suivante : <h2>$phrase01.</h2><br> s'affiche à l'envers comme suit :<br> <h2>$invPhrase01.</h2><br>";
echo "la phrase suivante : <h2>$phrase02.</h2><br> s'affiche à l'envers comme suit :<br> <h2>$invPhrase02.</h2><br>"; // problème avec le é ! 
echo "la phrase suivante : <h2>$phrase03.</h2><br> s'affiche à l'envers comme suit :<br> <h2>$invPhrase03.</h2><br>";
echo "Les phrases qui peuvent se lire dans les deux sens sont des phrases palindromes, les autres non."
?>