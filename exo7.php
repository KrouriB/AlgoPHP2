<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.<br>
<br>Exemple:genererCheckbox($elements);
<br>//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Résultat</h2>

<?php

$elements = ["Choix 1"=>0,"Choix 2"=>1,"Choix 3"=>0];
function genererCheckbox($choix){
	echo "<fieldset>";
	foreach ($choix as $key => $val){
		if ($val == 0){
			echo "<input type='checkbox' id=$val name='exo'><label for=$val>$key</label>";
		}else {
			echo "<input type='checkbox' id=$val name='exo' checked><label for=$val>$key</label>";
		}
	}
	echo "</fieldset>";
}
genererCheckbox($elements)

?>