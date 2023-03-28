<?php
$DB_NAME = "articles";
$DB_USER = "root";
$DB_PASS = "adrar";

$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd->query('SELECT * FROM article');

while ($donnees = $reponse->fetch()) {
  
    echo 
        '<p>numéro de l’article :' .$donnees['id_article'].'</p>
         
        <p>nom de l’article : '.$donnees['nom_article'].'</p>
        
        <p>contenu de l’article : '.$donnees['contenu_article'].'</p>
        ';}

?>