<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="{{ path }}css\style.css">
</head>
<body>
    <main>
        <h2>Saisir éditeur</h2>
        <form action="{{ path }}editeur/store" method="post">
            <label>Nom 
                <input type="text" name="nom_editeur">
            </label>
            <label>Téléphone
                <input type="text" name="tel_editeur">
            </label>
            <label>Adresse
                <input type="text" name="adresse_editeur">
            </label>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>