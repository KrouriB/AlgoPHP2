<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
<br>On admet que l’URL de la page Wikipédia de la capitale adopte la forme:
https://fr.wikipedia.org/wiki/
<br>Le tableau passé en argument sera le suivant:
<br>$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Résultat</h2>

<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
function afficherTableHTML($tableau){
    ksort($tableau);
    echo "<table border='1' style='border-collapse:collapse;'>",
    '<thead>',
    '<tr>',
    '<th>Pays</th>',
    '<th>Capitale</th>',
	'<th>Lien Wiki</th>',
    '</tr>',
    '</thead>',
    '<tbody>';
    foreach ($tableau as $element1 => $element2){
        strtoupper($element1);
        echo '<tr>',
        '<td>'.$element1.'</td>',
        '<td>'.$element2.'</td>',
		'<td><a href=https://fr.wikipedia.org/wiki/'.$element2.' target=_blank>Lien</a></td>';
    }
    echo '</tbody>',
    '</table>';
}
afficherTableHTML($capitales);

?>