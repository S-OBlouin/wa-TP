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
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <a href="../index.php">Index</a>
    </nav>
    <main>
        <p><strong>Nom :</strong><?php echo $nom_client; ?></p>
        <p><strong>Adresse :</strong><?php echo $adresse_client; ?></p>
        <p><strong>Téléphone :</strong><?php echo $tel_client; ?></p>
        <p><strong>Courriel : </strong><?php echo $courriel_client; ?></p>
        <p><a href="client-edit.php?id=<?php echo $id; ?>">Modifier</a></p>
    </main>
</body>
</html>