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
echo 'La valeur à l\'indice 0 est : '. $tabNotes[0].'<br>';
echo 'La valeur à l\'indice 1 est : '. $tabNotes[1].'<br>';
echo 'La valeur à l\'indice 2 est : '. $tabNotes[2].'<br>';



// Creer un tableau associatif rempli
$tabAssoNotes = ['matiere' => 'm1202',
                 'note1' => 12,
                 'note2' => 7,
                 'note3' => 11.5];

// Afficher les valeurs
echo '<p>'. $tabAssoNotes['matiere'].' : '.
   $tabAssoNotes['note1']. ', '.
   $tabAssoNotes['note2']. ', '.
   $tabAssoNotes['note3']. ' </p>'; // le point virgule est ici, tout sera affiché sur une seule ligne.



   echo '<p>';
   // Afficher les valeurs
   
   foreach ( $tabAssoNotes as $cle => $valeur )
   {
        echo $cle .': '. $valeur .'<br />';
   }
   echo '</p>';


?>