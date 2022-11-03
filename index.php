<?php
require_once "class/Crud.php";

$Crud = new Crud;

$client = $Crud->select("wa_client", "nom_client", "DESC");
$livres = $Crud->select("wa_livres", "nom_livres", "DESC");
$editeur = $Crud->select("wa_editeur", "nom_editeur", "DESC");
$auteur = $Crud->select("wa_auteur", "nom_auteur", "DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Liste de clients, livres, editeurs et auteurs</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($client as $row){
                ?>
                    <tr>
                        <td><?php echo $row['nom_client'] ?></td>
                        <td><?php echo $row['adresse_client'] ?></td>
                        <td><?php echo $row['tel_client'] ?></td>
                        <td><a href="client-show.php?id=<?php echo $row['id'] ?>">Profile</a></td>
                    </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Édition</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($livres as $row){
                ?>
                    <tr>
                        <td><?php echo $row['nom_livres'] ?></td>
                        <td><?php echo $row['description_livres'] ?></td>
                        <td><?php echo $row['prix_livres'] ?></td>
                        <td>#<?php echo $row['edition_livres'] ?></td>
                    </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($editeur as $row){
                ?>
                    <tr>
                        <td><?php echo $row['nom_editeur'] ?></td>
                        <td><?php echo $row['tel_editeur'] ?></td>
                        <td><?php echo $row['adresse_editeur'] ?></td>
                    </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($auteur as $row){
                ?>
                    <tr>
                        <td><?php echo $row['nom_auteur'] ?></td>
                        <td><?php echo $row['naissance_auteur'] ?></td>
                    </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>