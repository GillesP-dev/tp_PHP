 <?php
 /*
if(isset($_POST['nombre1']) && isset($_POST['nombre2'])){
    $totale = $_POST['nombre1'] + $_POST['nombre2'];
    echo "la somme est à :".$totale;
}*/
/*if (isset($_FILES['file'])) {
   var_dump(($_FILES['file']));
    if (filesize($_FILES['file']['tmp_name']) > 3145728) {
          echo "La taille du fichier dépasse les 3Mo";  
        } else {
        $file_name = basename($_FILES['file']['name']);
        $accents = '/&([A-Za-z]{1,2})(grave|acute|circ|cedil|uml|lig);/';
        $string_encoded = htmlentities($file_name, ENT_NOQUOTES, 'UTF-8');
        $file_name = preg_replace($accents,'$1',$string_encoded);
          move_uploaded_file($_FILES['file']['tmp_name'], "./imgs/" . $file_name);
    }
}*/

$DB_NAME = "Lartiste";
$DB_USER = "root";
$DB_PASS = "adrar";

$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$reponse = $bdd->query('SELECT * FROM Utilisateurs');
while ($donnees = $reponse->fetch()) {
  
  echo '<p>' . $donnees['login_utilisateur'] . ": ". $donnees['mdp_utilisateur'] . '</p>';
}



?>


