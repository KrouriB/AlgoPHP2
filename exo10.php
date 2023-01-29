<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  champs  de  texteavec  nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», «Intégrateur» ou «Chef de projet».<br>
<br>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>

<h2>Résultat</h2>

<?php

$infos = ["Nom","Prénom","Adresse e-mail","Ville"];
$genre = ["homme","femme"];
$liste = ["Développeur Logiciel","Designer web","Intégrateur","Chef de projet"];
echo "<div>",
"<form>";
foreach ($infos as $val){
	echo "<p>".$val."<br><input type='text'/></p>";
}
echo "</form>",
"<fieldset>";
foreach($genre as $val){
	echo "<div>",
	"<input type='radio' name='genre' value=$val>",
	"<label>$val</label>",
	"</div>";
}
echo "</fieldset>",
"<select name='formation'>";
foreach ($liste as $formation) {
	echo "<option value='$formation'>$formation</option>";
}
echo "</select>",
"<input type='submit'/>",
"</div>";

?>