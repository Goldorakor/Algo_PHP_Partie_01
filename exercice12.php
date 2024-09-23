<h1>Exercice 12</h1>

<p>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langues associées (tableau contenant clé et valeur), 
    dire bonjour aux différentes personnes dans leur langue respective (français : salut, anglais : hello, espagnol : hola) en utilisant un switch.<br>
Variante : trier d'abord le tableau par ordre alphabétique du prénom.</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$prenomLangue = [ "Pierre" => "FRA" , "Pauline" => "FRA" , "Pablo" => "ESP" , "Julio " => "ESP" , 
"Richard" => "FRA" , "Esmeralda" => "ESP" , "Jacques" => "FRA" , "John" => "ANG"];

foreach ($prenomLangue as $cle => $valeur) {
    echo " la clé vaut $cle et la valeur vaut $valeur<br>";
}

// méthode avec foreach et des conditions if elseif
echo "<h3>méthode avec foreach et des conditions if elseif</h3><br>";
foreach ($prenomLangue as $cle => $valeur) {
    if ($valeur == "FRA") {
        $bonjour = "Salut";
    }
    else if ($valeur == "ESP") {
        $bonjour = "Hola";
    }
    else if ($valeur == "ANG") {
        $bonjour = "Hello";
    }
    echo "<h3>$bonjour $cle</h3><br>";
    }

// méthode similaire, mais quand on est perdu, on essaie plusieurs choses ! 
echo "<h3>méthode similaire avec foreach et des conditions if elseif</h3><br>";
foreach ($prenomLangue as $cle => $valeur) {
    if ($valeur == "FRA") {
        echo "Salut $cle<br>";
    }
    else if ($valeur == "ESP") {
        echo "Hola $cle<br>";
    }
    else if ($valeur == "ANG") {
        echo "Hello $cle<br>";
    }
    }


// autre méthode qui avait été testée  - sans le foreach problématique
$tableauCle = array_keys($prenomLangue);
$tableauValeur = array_values($prenomLangue);

echo "<h3>test un peu loufoque</h3><br>";
for ($i = 0; $i < count($prenomLangue); $i++) {
    if ($tableauValeur[$i] == "FRA") {
        $bonjour = "Salut";
        echo "$bonjour $tableauCle[$i]<br>";
    }
    else if ($tableauValeur[$i] == "ESP") {
        $bonjour = "Hola";
        echo "$bonjour $tableauCle[$i]<br>";
    }
    else if ($tableauValeur[$i] == "ANG") {
        $bonjour = "Hello";
        echo "$bonjour $tableauCle[$i]<br>";
    }
    else {
        $bonjour = "nationalité inconnue";
        echo "Je ne connais pas votre nationalité !";
    }
    // echo "$bonjour $tableauCle[$i]<br>";
}

// méthode avec foreach et switch comme souhaité dans l'énoncé - ce fut long et difficile !
echo "<h3>méthode avec foreach et switch .... enfin ! </h3><br>";
foreach ($prenomLangue as $cle => $valeur) {
    switch ($valeur) {
        case "FRA" :
            $bonjour = "Salut";
            echo "<h3>$bonjour $cle</h3><br>";
            break; 
            
        case "ESP" : 
            $bonjour = "Hola";
            echo "<h3>$bonjour $cle</h3><br>";
            break;

        case "ANG" : 
            $bonjour = "Hello";
            echo "<h3>$bonjour $cle</h3><br>";
            break;
    }
    }


// méthode avec foreach et switch - je teste un peu une variante
echo "<h3>méthode avec foreach et switch .... une variante.</h3><br>";
foreach ($prenomLangue as $cle => $valeur) {
    switch ($valeur) {
        case "FRA" :
            $bonjour = "Salut";
            break; 
            
        case "ESP" : 
            $bonjour = "Hola";
            break;

        case "ANG" : 
            $bonjour = "Hello";
            break;
    }
    echo "<h3>$bonjour $cle</h3><br>";
    }


// variante demandée dans l'énoncé de l'exercice
echo "<h3>variante demandée dans l'énoncé de l'exercice.</h3><br>";
echo"<h3>tableau normal</h3>";
var_dump($prenomLangue);
ksort($prenomLangue);
echo"<h3>tableau après tri</h3>";
var_dump($prenomLangue);
foreach ($prenomLangue as $cle => $valeur) {
    switch ($valeur) {
        case "FRA" :
            $bonjour = "Salut";
            break; 
            
        case "ESP" : 
            $bonjour = "Hola";
            break;

        case "ANG" : 
            $bonjour = "Hello";
            break;
    }
    echo "<h3>$bonjour $cle</h3><br>";
    }

?>