<?php
// require_once("inc_files.php");
// chemin pour le fichier database
$pdo = new PDO('mysql:host=localhost;dbname=base1','root','');
// pour appeler les donnés de la table de programme
$query = $pdo -> query ('SELECT * FROM client');

$data = $query->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLEAU</title>
</head>
<body style="width:100%">

    <H1 style=" background-color: black; color:white; margin:0%; width:25%; text-align:center; margin-left:35%">TABLEAU</H1>
<table style=" width: 100%; table-layout: fixed;">  
        <thead>
            <tr style="background-color: blue; color:white">
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Numéro</th>
                <th>Prénom</th>
            </tr>
        </thead>
</br>

<TBody style="width: ;">
<?php foreach($data as $value): ?>
    <tr style="background-color:teal  ; color:white; width:100% ">
        <td>#<?= $value['ID'] ?></td>
        <td><?= $value['Nom'] ?></td>
        <td><?= $value['Mail'] ?></td>
        <td><?= $value['Téléphone'] ?></td>
        <td><?= $value['Prénom'] ?></td>
    </tr>
<?php endforeach ?>
</TBody>
</table>

</body>
</html>