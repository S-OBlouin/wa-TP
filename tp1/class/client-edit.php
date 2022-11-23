<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    require_once "Crud.php";
    $Crud = new Crud;
    $client = $Crud->selectId('wa_client', $id);
    extract($client);
}else{
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
    <nav>
        <a href="../index.php">Index</a>
    </nav>
<main>
    <h2>Modifier</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label>Nom 
                <input type="text" name="nom_client" value="<?php echo $nom_client;?>">
            </label>
            <label>Adresse
                <input type="text" name="adresse_client" value="<?php echo $adresse_client;?>">
            </label>
            <label>Téléphone
                <input type="text" name="tel_client" value="<?php echo $tel_client;?>">
            </label>
            <label>Courriel
                <input type="email" name="courriel_client" value="<?php echo $courriel_client;?>">
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