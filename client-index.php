<?php
require_once "class/Crud.php";

$Crud = new Crud;

$client = $Crud->select("wa_client", "nom_client", "DESC");

//print_r($client);
//$produit = $Crud->select("produit");
//echo "<h1>Produit</h1>";
//print_r($produit);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>List de client</h1>
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
                        <td><a href="client-show.php?id_client=<?php echo $row['id_client'] ?>">Profile</a></td>
                    </tr>
                <?php       
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>