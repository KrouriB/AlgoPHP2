<h1>Exercice 2</h1>

<p>Soit le tableau suivant:
<br>$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
<br>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.<br>
<br>Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<h2>Résultat</h2>

<?php

$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
function afficherTableHTML($tableau){
    ksort($tableau);
    echo "<table border='1' style='border-collapse:collapse;'>",
    '<thead>',
    '<tr>',
    '<th>Pays</th>',
    '<th>Capitale</th>',
    '</tr>',
    '</thead>',
    '<tbody>';
    foreach ($tableau as $element1 => $element2){
        strtoupper($element1);
        echo '<tr>',
        '<td>'.$element1.'</td>',
        '<td>'.$element2.'</td>';
    }
    echo '</tbody>',
    '</table>';
}
afficherTableHTML($capitales);

?>