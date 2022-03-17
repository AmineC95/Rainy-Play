<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=rainy','root','');

if (isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO user (pseudo,mdp) VALUES (?, ?)');
        $insertUser->execute(array($pseudo, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM user WHERE pseudo= ? AND mdp= ? ');
        $recupUser->execute(array($pseudo, $mdp));
        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
        echo $_SESSION['id'];
    }else{
        echo "veuillez completer tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>R Play</title>
    <link rel="icon" sizes="144x144" href="/img/RainyPlay_Logo.jpg">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post" action="">
        <input type="text" name="pseudo" autocomplete="off">
        <br/>
        <input type="password" name="mdp" autocomplete="off">
        <br/><br/>
        <input type="submit" name="envoi" >


    </form>    

</body>

</html>