<?php
// Creer un tableau vide
$tabNotes = array();

// Ajouter de nouvelles valeurs a un tableau
$tabNotes[] = 12.5;
$tabNotes[] = 9;

// Afficher les valeurs
echo 'La valeur à l\'indice 0 est : '. $tabNotes[0].'<br>'; // attention avec les apostrophes ! il vaut mieux utiliser "" 
echo "La valeur à l'indice 0 est : $tabNotes[0]<br>"; 

echo 'La valeur à l\'indice 1 est : '. $tabNotes[1].'<br>';
echo "La valeur à l'indice 1 est : $tabNotes[1]<br>";

// Ajouter une autre note
$tabNotes[] = 11;

// Changer une note puis afficher la nouvelle valeur
$tabNotes [1] = 8;
echo 'La valeur à l\'indice 1 est : '. $tabNotes[1];
?>