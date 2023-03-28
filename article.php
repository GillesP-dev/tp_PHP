<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
<form action="article.php" method="POST" >
            <p>rentrer le nom de l'article</p>
            <input type="txt" name="nom_article" >
            <br>
            <p>rentrer le contenu de l'article</p>
            <input type="txt" name="contenu_article" >
            <br>
            <input type="submit" value="Ajouter" >
        </form>
</body>
</html>
<?php
if(isset($_POST['nom_article']) && isset($_POST['contenu_article'])){
    $name = $_POST['nom_article'];
    $content = $_POST['contenu_article'];
}
$DB_NAME = "articles";
$DB_USER = "root";
$DB_PASS = "adrar";

$bdd = new PDO('mysql:host=localhost;dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$bdd->query("insert into article(nom_article,contenu_article) values('".$name."','".$content."')");

$reponse = $bdd->query('SELECT * FROM article');
while ($donnees = $reponse->fetch()) {
  
  echo '<p>' . $donnees['nom_article'] . ": ". $donnees['contenu_article'] . '</p>';
}



?>