<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
<br>Exemple:$elements = array("Monsieur","Madame","Mademoiselle");alimenterListeDeroulante($elements);</p>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
function alimenterListeDeroulante($liste){
    echo "<select name='civilité'>";
    foreach ($liste as $civilité) {
        echo "<option value='$civilité'>$civilité</option>";
    }
    echo "</select>";
}
alimenterListeDeroulante($elements);

?>