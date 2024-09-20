<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient).
Elle devra être affichée avec 2 décimales.</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$notes = [15, 12, 7, 8, 9, 16, 10, 16];
$nbDeNotes = count($notes);
$totalDeNote = 0;
// $moyenne = 0;    trop tôt pour la déclarer ?   
// $moyenneAffichee = round ($moyenne , 2); trop tôt pour la déclarer ? 

// boucle pour calculer le total des notes
for ($i = 0; $i < $nbDeNotes; $i++) {
    $totalDeNote = $totalDeNote + $notes[$i];
    }

// déclaration de variables pour calculer et afficher la moyenne au bon format 
$moyenne = $totalDeNote / $nbDeNotes;
$moyenneAffichee = round ($moyenne , 2);

// affichage du résultat
echo "L'élève a reçu $nbDeNotes notes ce trimestre et sa moyenne est de $moyenneAffichee/20.";
?>