<?php
// chemin pour le fichier database

$pdo = new PDO ('sqlite:test.db');

// pour appeler les donnés de la table de programme
$query = $pdo -> query ('SELECT * FROM client');

$data = $query->fetchALL(PDO::FETCH_ASSOC);
echo "$data"
?>