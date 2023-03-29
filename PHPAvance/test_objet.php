<?php
require './maison.php';
require './vehicule.php';
$maison = new Maison();
$maison->nom = "chez Janot";
$maison->longueur = 20;
$maison->largeur = 10;
$maison->surface();
$vehicule = new Vehicule();
$vehicule->nomVehicule = "Mercedes";
$vehicule->nbRoues = 4;
$vehicule->vitesse = 150;
$vehicule2 = new Vehicule();
$vehicule2->nomVehicule = "Honda CBR";
$vehicule2->nbRoues = 2;
$vehicule2->vitesse = 280;
$vehicule->detect($vehicule);
$vehicule->plusRapide($vehicule,$vehicule2);
?>