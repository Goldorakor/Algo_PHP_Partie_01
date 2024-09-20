<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
Si la persone est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est une homme de plus de 20 ans,
alors celle-ci est imposable (sinon ce n'est pas le cas, "non imposable").</p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$femme = false;
$age = 45;

// mise en place des conditions
if ( ($femme) and ($age >= 18) and ($age <= 35) ) {
    echo "Madame, vous êtes imposable !";
}

elseif ( ($femme) and (($age < 18) or ($age > 35)) ) {
    echo "Madame, vous n'êtes pas imposable !";
}

elseif ( (!$femme) and ($age > 20) ) {
    echo "Monsieur, vous êtes imposable !";
}

else {
    echo "Monsieur, vous n'êtes pas imposable !";
}
?>