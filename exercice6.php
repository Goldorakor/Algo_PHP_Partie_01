<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de
la quantité d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20% = 0.2).</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$prixPantalonHT = 80;
$prixRobeHT = 95;
$nbPantalons = 4;
$nbRobes = 7;
$tauxTVA = 0.2;
$montantFacture = (($prixPantalonHT * $nbPantalons) + ($prixRobeHT * $nbRobes)) * (1 + $tauxTVA); // formule du calcul
$tauxAfficheTVA = $tauxTVA * 100; // pour afficher la TVA en % dans le texte

// affichage du résultat 
echo "L'achat de $nbPantalons pantalons au prix hors taxe de $prixPantalonHT euros et de $nbRobes robes au prix hors taxe de $prixRobeHT euros coûtera $montantFacture euros, en tenant compte de la TVA à $tauxAfficheTVA %.";
?>