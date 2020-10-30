<?php  

    // chemin pour accèder au fichier de la database
    $pdo = new PDO('sqlite:test.db');
    // Pour appeler les données de la table client
    $qwery = $pdo->qwery('SELECT  * FROM client');

    $data = $qwery->fetchALL(PDO::FETCH_ASSOC);
    


?>