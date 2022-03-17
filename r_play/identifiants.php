<?php
  $host = 'localhost';
  $dbname = 'rainy';
  $username = 'root';
  $password = '';
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM user";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
    }
   }
   catch (PDOException $e){
    echo $e->getMessage();
  }
    while ($name = $stmt->fetch())
  {
      echo "Nom : ".$name['nom']."<br/>"."Prénom : ".$name['prenom']. "<br/>"."mdp : ".$name['mdp']."<br/>";
      echo $name['email'];
  } 

  
?>