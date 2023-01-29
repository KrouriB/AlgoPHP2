<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
<br>Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:
<li>Peugeot 408: $v1 = new Voiture("Peugeot","408");
<li>BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);
<br>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:
<br>echo $v1->getInfos().<*br/>;
<br>echo $ve1->getInfos().<*br/>;</p>

<h2>Résultat</h2>

<?php

class Voiture {
    public $marque;
    public $modele;
    
    public function __construct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }
    public function setMarque($newMarque){
        $this->marque = $newMarque;
    }
    public function getModele(){
        return $this->modele;
    }
    public function setModele($newModele){
        $this->modele = $newModele;
    }

    public function getInfos(){
        $display ="";
        $display .="Voici le véhicule ";
        $display .= $this->marque;
        $display .=" ";
        $display .= $this->modele;
        return $display;
    }
}

class VoitureElec extends Voiture {
    public $autonomie;

    public function __construct($marque, $modele, $autonomie){
        $this->autonomie = $autonomie;
        parent::__construct($marque, $modele);
    }

    public function getAutonomie(){
        return $this->autonomie;
    }
    public function setAutonomie($newAutonomie){
        $this->autonomie = $newAutonomie;
    }

    public function getInfos(){
        $display = parent::getInfos();
        $display .=" ayant une autonomie ";
        $display .= $this->autonomie;
        return $display;
    }
}
$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

?>