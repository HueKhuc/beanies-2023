<?php 
$dsn = 'mysql:dbname=exo_beanies;port=3306;host=localhost';
$user = 'root'; 
$password = '';
try {
   $connection = new PDO($dsn, $user, $password, [
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    exit('Connexion échouée : ' . $e->getMessage());
}
?>