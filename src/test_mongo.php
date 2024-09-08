<?php
require 'vendor/autoload.php'; // Assure-toi d'avoir installé la bibliothèque MongoDB via composer

$client = new MongoDB\Client("mongodb://mongodb:27017");

try {
    $dbs = $client->listDatabases();
    echo "Connexion réussie à MongoDB!";
} catch (Exception $e) {
    echo "Échec de la connexion à MongoDB : " . $e->getMessage();
}
?>
