<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d'un enfant en fonction de son âge :<br>
<ul>
    <li>poussin : entre 6 et 7 ans</li>
    <li>pupille : entre 8 et 9 ans</li>
    <li>minime : entre 10 et 11 ans</li>
    <li>cadet : à partir de 12 ans</li>
    <li>si la catégorie n'est pas gérée, merci de le préciser.</li>
</ul></p>

<h2>Résultats :</h2>


<?php
// déclaration des variables
$age = 8;



/* raisonnement à faire :
faire des conditions imbriquées ou faire des else if si c'est possible !
*/

if ( ($age >= 6) and ($age <= 7) ) {
    echo "catégorie de l'enfant : poussin";
}

elseif ( ($age >= 8) and ($age <= 9) ) {
    echo "catégorie de l'enfant : pupille";
}

elseif ( ($age >= 10) and ($age <= 11) ) {
    echo "catégorie de l'enfant : minime";
}

elseif ( ($age >= 12) ) {
    echo "catégorie de l'enfant : cadet";
}

else {
    echo "La catégorie de l'enfant n'est pas gérée.";
}
?>