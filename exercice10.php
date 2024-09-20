<h1>Exercice 10</h1>

<p>A partir d'un montant à payer et d'une somme versée pour régler un achat,
écrire l'algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables de bases
$facture = 83;
$sommeVersee = 200;
$SommeRendue = $sommeVersee - $facture;

// calcul du rendu de monnaie et déclaration des variables pour le calcul
$nbBillets10 = intdiv ( $SommeRendue , 10 );
$nbBillets05 = intdiv ( $SommeRendue % 10 , 5);
$nbPieces02 = intdiv ((($SommeRendue % 10) %5), 2);
$nbPieces01 = ((($SommeRendue % 10) %5)% 2);

// affichage du résultat
echo"Vous avez acheté pour $facture euros de marchandises et vous avez donné à notre vendeuse $sommeVersee euros pour régler vos achats. Nous avons le plaisir de vous rendre votre monnaie, à hauteur de $SommeRendue euros, de la façon suivante :<br>$nbBillets10 billet(s) de 10 euros, $nbBillets05 billet(s) de 5 euros, $nbPieces02 pièce(s) de 2 euros et $nbPieces01 pièce(s) de 1 euro.";
?>