<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "class/Crud.php";
    $Crud = new Crud;
    $client = $Crud->selectId('wa_client', $id);
    extract($client);
}else{
    header('Location: client-index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
<main>
    <h2>Modifier</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label>Nom 
                <input type="text" name="nom" value="<?php echo $nom;?>">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="<?php echo $adresse;?>">
            </label>
            <label>Postal Code
                <input type="text" name="postal_code" value="<?php echo $postal_code;?>">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="<?php echo $courriel;?>">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="client-delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>