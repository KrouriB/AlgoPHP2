<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.<br>
<br>Exemple:
<br>formaterDateFr("2018-02-23");</p>

<h2>Résultat</h2>

<?php

$datetest = "2018-02-23";
// l-j-F-o pour vendredi 23 février 2018

function formaterDateFr(string $ladate){
	$unedate = new DateTime($ladate); // transformer la format de la date
	$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE); // variable qui sert a donner le format a afficher
	echo $formatter->format($unedate); //applique le format précedement fait a la date
}
formaterDateFr($datetest);

?>