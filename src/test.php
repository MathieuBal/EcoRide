<?php
$dsn = 'pgsql:host=postgres;port=5432;dbname=symfony;';
$username = 'symfony';
$password = 'symfony';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à PostgreSQL via PDO!";
} catch (PDOException $e) {
    echo 'Échec de la connexion : ' . $e->getMessage();
}
?>
