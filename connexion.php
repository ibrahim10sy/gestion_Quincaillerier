<?php 

try {
    $db = new PDO('mysql:host=localhost; dbname=gq_db','root','');
    // echo'Connexion etablie !';
} catch (Exception $e) {
    die($e->getMessage()); 
}

?>