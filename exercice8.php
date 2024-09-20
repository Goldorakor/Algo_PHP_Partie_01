<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la forme :<br>
pour la table de 8 :<br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24 ...<br>
Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultats :</h2>


<?php
// méthode 1 avec une fonction: essai avec $resultat en non static
// déclaration des variables
function myTest () {
    $tableDuNombre = 8;
    static $x = 1;
    $resultat = $x * $tableDuNombre;
    echo "$x x $tableDuNombre = $resultat<br>";
    $x++;
}

/* méthode 1bis : essai avec $resultat en static
 déclaration des variables
function monTest () {
    $tableDuNombre = 8;
    static $x = 0;
    static $resultat = $x * $tableDuNombre;
    echo "$x * $tableDuNombre = $resultat<br>";
    $x++;
    $resultat = $resultat + $tableDuNombre;
}*/



// méthode 2 : boucle for
echo "méthode de la boucle for<br>";

for ($x = 1; $x <= 10; $x++) {
    $number = $x * 8;
    echo "$x x 8 = $number<br>";
    }

echo "méthode de la boucle for bis<br>";    
    
for ($x = 1; $x <= 10; $x++) {
    static $number = $x * 8;
    echo "$x x 8 = $number<br>";
    $number = $number + 8;
    }

// méthode 2 : boucle while    
echo "méthode de la boucle while<br>";

$y = 1;
while ($y<11) {
    $nombre = $y * 8;
    echo "$y x 8 = $nombre<br>";
    $y++;
}


// affichage global des résultats des méthodes
echo "méthode avec une fonction :<br>";
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();
myTest();
?>