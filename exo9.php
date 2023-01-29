<h1>Exercice 9</h1>

<p>Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").<br>
<br>Exemple:
<br>afficherRadio($nomsRadio);</p>

<h2>Résultat</h2>

<?php

$genre = ["Monsieur","Madame","Autre"];
function afficherRadio(array $tab){
	echo "<fieldset>";
	foreach($tab as $val){
		echo "<div>",
		"<input type='radio' name='genre'>",
		"<label>$val</label>",
		"</div>";
	}
	echo "</fieldset>";
}
afficherRadio ($genre);

?>