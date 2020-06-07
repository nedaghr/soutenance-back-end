
<?php

require 'function.php';
require 'header.php';
session_start();
$pdo = connexion();

//update premium =>  1


$id=$_SESSION['id'] ;

$sql = 'UPDATE test SET premium = :premium WHERE id = :id';
$requete = $pdo->prepare($sql);
$resultat = $requete->execute(array(
    'id' => $id,
    'premium' => 1
));


if ($resultat)
{
  echo 'votre annonces sera en avant pour 7 jours' ; 
}
else
{
    echo 'Une erreur survenue lors de changemant de condition de l\'annonce';
}

?>






