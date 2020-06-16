<?php
$host = "localhost";
$dbname= "irea";
$admin="root";
$password="";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $admin, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die(print_r(("erreur dbb:" .$e->getMessage())));
}