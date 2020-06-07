<?php


function connexion(){
    
    try{
    
        $pdo= new PDO('mysql:host=localhost;dbname=soutenance;charset=utf8','root','');
        return $pdo;
    
    }
    catch(Exception $e )
    {
        die('Erreur de la connexion a la base de donne' . $e->getMessage());
        echo '1111';
        
    }
    
}


?>