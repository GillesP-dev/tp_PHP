<?php 
include('./connect.php');

if (isset($_POST['name_user']) && isset($_POST['form_password'])) {
    $select = $db->prepare("SELECT * FROM users WHERE name_user=:name_user AND pass_user=:user_password;");
        $select->bindParam(":name_user", $_POST["name_user"]);
        $select->bindParam(":user_password", $_POST["form_password"]);
        $select->execute();

        if($select->rowCount() === 1) {
            
            $_SESSION['user'] = $select->fetch(PDO::FETCH_ASSOC);
           
            header("Location: index.php");
        } else {
           
            unset($_SESSION['user']);
        }
    
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>connexion.PHP</h1>
    <form method="post">
        <input type="hidden" name="form_connexion" value="1">
        <label for="form_email">nom</label>
        <input type="text" name="name_user" id="form_email" placeholder="Ex: picolino">
        <label for="form_password">Mot de passe:</label>
        <input type="password" name="form_password" id="form_password" placeholder="1234">
        <input type="submit" value="Se connecter">
    </form>
    <form name="inscription" action="inscription.php" method="post">
        <input type="submit" value="Inscription">
    </form>
</body>