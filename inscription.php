<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet task</title>
</head>
<?php 
include('./connect.php');

if (isset($_POST['name_user']) && isset($_POST['first_name_user']) && isset($_POST['login_user']) && isset($_POST['pass_user'])) {
    $name_user = $_POST['name_user'];
    $first_name_user = $_POST['first_name_user'];
    $login_user = $_POST['login_user'];
    $user_password = password_hash($_POST['pass_user'], PASSWORD_BCRYPT, array("cost" => 12));
    $id_task = $_POST['id_task'];
    $req = $db->prepare("INSERT INTO users(name_user,first_name_user,login_user,pass_user,id_task) Values(:name_user,:first_name_user,:login_user,:pass_user,:id_task)");
    $req->bindParam(':name_user', $name_user);
    $req->bindParam(':first_name_user', $first_name_user);
    $req->bindParam(':login_user', $login_user);
    $req->bindParam(':pass_user', $user_password);
    $req->bindParam(':id_task', $id_task);
    $req->execute();
}


/*$bdd->query("INSERT INTO users(name_user,first_name_user,login_user,pass_user,id_task) VALUES('".$name_user."','".$first_name_user."','".$login_user."','".$pass_user."','".$id_task."')");*/

$reponse = $db->prepare('SELECT *,name_task FROM users inner join tasks on tasks.id_task = users.id_task');

$task = $db->query('SELECT id_task,name_task FROM tasks');
while ($donnees = $task->fetch()) {
    $id_task = $donnees['id_task'];
    $name_task = $donnees['name_task'];
}
?>

<body>
    <form action="inscription.php" method="POST">
        <p>Rentrer le nom de l'utilisateur</p>
        <input type="txt" name="name_user">
        <br>
        <p>Rentrer le prenom</p>
        <input type="txt" name="first_name_user">
        <br>
        <p>Rentrer le login</p>
        <input type="txt" name="login_user">
        <br>
        <p>Rentre le pass</p>
        <input type="txt" name="pass_user">
        <br>
        <select name="id_task">
            <option value="default">choisir</option>
            <?php $task = $db->query('SELECT id_task,name_task FROM tasks');
            while ($donnees = $task->fetch()) {
                echo '<option value="' . $donnees['id_task'] . '">' . $donnees['id_task'] . '-' . $donnees['name_task'] . '</option>';
            } ?>
        </select>
        <input type="submit" value="Ajouter">
    </form>
    <?php
    $reponse->execute();
    foreach ($donnees = $reponse->fetchAll() as $donnees) {

        echo '<p>' . $donnees['id_user'] . ", " . $donnees['name_user'] . ", " . $donnees['first_name_user'] . ", " . $donnees['login_user'] . ", " . $donnees['pass_user'] . ", " . $donnees['name_task'] . '</p>';
    }
    ?>
</body>
</body>

</html>