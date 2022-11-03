<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>New Client</title>
    <style>
    </style>
</head>
<body>
    <main>
        <h2>Saisir</h2>
        <form action="client-store.php" method="post">
            <label>Username
                <input type="text" name="username_client">
            </label>
            <label>Nom 
                <input type="text" name="nom_client">
            </label>
            <label>Adresse
                <input type="text" name="adresse_client">
            </label>
            <label>Courriel
                <input type="email" name="courriel_client">
            </label>
            <label>Téléphone
                <input type="text" name="tel_client">
            </label>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>