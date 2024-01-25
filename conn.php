<?php 
    require_once "vendor/autoload.php";
    $client     = new MongoDB\Client;
    $dataBase   = $client->selectDatabase('db_berita');
    $collection = $dataBase->selectCollection('berita');
?>