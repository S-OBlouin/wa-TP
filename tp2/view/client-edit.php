<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
<main>
    <h2>Modifier </h2>
        <form action="{{ path }}client/update" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <label>Nom 
                <input type="text" name="nom_client" value="{{ client.nom_client}}">
            </label>
            <label>Adresse
                <input type="text" name="adresse_client" value="{{ client.adresse_client}}">
            </label>
            <label>Téléphone
                <input type="text" name="tel_client" value="{{ client.tel_client}}">
            </label>
            <label>Courriel
                <input type="email" name="courriel_client" value="{{ client.courriel_client}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="{{ path }}client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id}}">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>