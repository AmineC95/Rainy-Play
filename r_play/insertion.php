<?php

$pdo = new PDO('mysql:host=localhost;dbname=rainy','root','');

$pdoStat = $pdo ->prepare('INSERT INTO  user VALUES (NULL, :nom, :prenom, :pseudo, :email, :mdp)');

$pdoStat->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);

$pdoStat->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);

$pdoStat->bindValue(':email',$_POST['mail'], PDO::PARAM_STR);

$pdoStat->bindValue(':pseudo',$_POST['username'], PDO::PARAM_STR);

$pdoStat->bindValue(':mdp',$_POST['password'], PDO::PARAM_STR);
$mdp = sha1($_POST['mdp']);
$insertIsOk = $pdoStat->execute();

if ($insertIsOk){

    $message = 'Le compte à été crée';
}
else{
    $message = 'Un probleme est survenu';
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
    <h1><?php echo $message . header("Refresh:2; url=index.html"); ?></h1>    

</body>

</html>