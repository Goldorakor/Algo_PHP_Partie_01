<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d'en afficher le contenu (une marque de voiture par ligne).
Il est également demandé d'afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultats :</h2>


<?php
// déclaration de variables
$voitures = [ "Volvo" , "Audi" , "Fiat" , "Peugeot" , "Toyota" , "Honda" ];
$nbDeMarques = count($voitures);

// boucle pour afficher toutes les marques de voiture du tableau
for ($i = 0; $i < $nbDeMarques; $i++) {
    echo "Voici une marque de voiture du tableau : $voitures[$i]<br>";
    }

// affichage du nombre de marques de voitures
echo "Notre tableau comporte $nbDeMarques marques de voitures différentes.";
?>