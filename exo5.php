<h1>Exercice 5</h1>

<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.
<br>Exemple:$nomsInput = array("Nom","Prénom","Ville");afficherInput($nomsInput);</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom","Prénom","Ville"];
function afficherInput($array){
    echo "<form style='background-color:lightgray;width: 200px; padding:10px'>"; // couleur du fond
        foreach ($array as $val){
            echo "<p>".$val."<br><input type='text'/></p>";
        }
    echo "</form>";
}
afficherInput($nomsInput);

?>