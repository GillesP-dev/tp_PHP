<?php
    class Vehicule {
        public $nomVehicule;
        public $nbRoues;
        public $vitesse;
        

        public function detect(){
            if($this->nbRoues == 2){
                echo "<p>c'est une moto</p>";
            }else {
                echo "<p>c'est une voiture</p>";
            }
        }

        public function plusRapide($a,$b){
          if($a->vitesse > $b->vitesse) {
            echo "<p> la ".$a->nomVehicule." est plus rapide que la ".$b->nomVehicule."</p>";  
          }else {
            echo "<p> la ".$b->nomVehicule." est plus rapide que la ".$a->nomVehicule."</p>";
          }  
        }
    }
?>