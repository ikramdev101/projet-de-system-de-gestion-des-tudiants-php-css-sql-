<?php

$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ofppt';

try{
 // Nouvelle connexion à la base de données
 $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


echo 'connected to db';

}catch(PDOException $e){
    echo 'erreur'.$e->getMessage();
}

?>