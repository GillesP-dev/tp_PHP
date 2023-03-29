<?php
    class Maison {
        public $nom;
        public $longueur;
        public $largeur;
        public $nbEtages = 2;

        public function surface(){
            echo "<p>La surface de ".$this->nom.": ".$this->longueur*$this->largeur*$this->nbEtages." m²" ;
        }
    }
?>