<?php 
    // chemin pour le fichier database.
    $pdo = new PDO('mysql:host=localhost;dbname=baseexercice','root','');
    // pour appeler les donnés de la table de programme.
    $query = $pdo -> query ('SELECT * FROM exercice');
    // met le contenus de la table exercice dans ma variable data.
    $data = $query->fetchALL(PDO::FETCH_ASSOC); 
    // texte préformaté
    echo '<pre>';
    // Affiche des informations lisibles pour une variable
    print_r($data);
    echo'</pre>';
?>
   
