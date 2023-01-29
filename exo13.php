<h1>Exercice 13</h1>

<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule.<br>
<br>v1 ➔"Peugeot","408",5
<br>v2 ➔"Citroën","C4",3<br>
<br>Coderl’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests  pour  vérifier  la  cohérence  de  la  classe Voiture. Vous  devez  afficher  les  tests  et  les éléments suivants:<br>
<br>Bonus: ajouter une méthode ralentir(vitesse)dans la classe Voiture.</p>

<h2>Résultat</h2>

<?php

class Voiture {
    public $marque;
    public $modele;
    public $nbportes;
    public $vitesseActuelle = 0;
    public $on = false;
    
    public function __construct($marque, $modele, $nbportes){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbportes = $nbportes;
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
    public function getNbportes(){
        return $this->nbportes;
    }
    public function setNbportes($newNbportes){
        $this->nbportes = $newNbportes;
    }
    public function getVitesseActuelle(){
        return $this->vitesseActuelle;
    }
    public function getOn(){
        return $this->on;
    }

    public function demarrer(){
        $this->on = true;
        $display ="";
        $display .= "Le véhicule ";
        $display .= $this->marque;
        $display .= " ";
        $display .= $this->modele;
        $display .= " démarre<br>";
        echo $display;
    }
    public function accelerer($changementVitesse){
        $display ="";
        if ($this->on==true){
            $this->vitesseActuelle += $changementVitesse;
            $display .= "Le véhicule ";
            $display .= $this->marque;
            $display .= " ";
            $display .= $this->modele;
            $display .= " a accélerer de $changementVitesse km / h et est a ";
            $display .= $this->vitesseActuelle;
            $display .= " km / h<br>";
        } else {
            $display .= "Le véhicule ";
            $display .= $this->marque;
            $display .= " ";
            $display .= $this->modele;
            $display .= " n'est pas démarrer<br>";
        }
        echo $display;
    }
    public function stopper(){
        $display ="";
        $this->vitesseActuelle = 0;
        $this->on = false;
        $display .= "Le véhicule ";
        $display .= $this->marque;
        $display .= " ";
        $display .= $this->modele;
        $display .= " stoppé<br>";
        echo $display;
    }
    public function ralentir($changementVitesse){
        $display ="";
        if ($this->on==true AND $changementVitesse <= $this->vitesseActuelle){
            $this->vitesseActuelle -= $changementVitesse;
            $display .= "Le véhicule ";
            $display .= $this->marque;
            $display .= " ";
            $display .= $this->modele;
            $display .= " a ralenti de $changementVitesse km / h et est a ";
            $display .= $this->vitesseActuelle;
            $display .= " km / h<br>";
        } elseif ($this->on==true AND $changementVitesse > $this->vitesseActuelle){
            $display .= "Le véhicule ";
            $display .= $this->marque;
            $display .= " ";
            $display .= $this->modele;
            $display .= " ne vas pas si vite pardi !<br>";
        } else {
            $display .= "Le véhicule ";
            $display .= $this->marque;
            $display .= " ";
            $display .= $this->modele;
            $display .= " est a l'arrêt ...<br>";
        }
        echo $display;
    }
    public function carteGrise(){
        $display ="";
        $display .= "<br>Infos véhicules<br>************************<br>Nom et modèle du véhicule : ";
        $display .= $this->marque;
        $display .= " ";
        $display .= $this->modele;
        $display .= "<br>Nombre de portes : ";
        $display .= $this->nbportes;
        if ($this->on == true) {
            $display .= "<br>Le vehicule ";
            $display .= $this->marque;
            $display .= " est démarré<br>Sa vitesse actuelle est de : ";
            $display .= $this->vitesseActuelle;
            $display .= " km / h<br>";
        } else {
            $display .= "<br>Le vehicule ";
            $display .= $this->marque;
            $display .= " est à l'arret<br>";
        }
        echo $display;
    }

}
$v1 = new Voiture('Peugot','408','5');
$v2 = new Voiture('Citroën','C4','3');
$v1->demarrer();
$v1->accelerer(50);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);
$v2->ralentir(10);
$v1->ralentir(70);
$v1->ralentir(20);
$v1->carteGrise();
$v2->carteGrise();

?>