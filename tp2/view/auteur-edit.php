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
        <form action="{{ path }}auteur/update" method="post">
            <input type="hidden" name="id" value="{{ auteur.id }}">
            <label>Nom 
                <input type="text" name="nom_auteur" value="{{ auteur.nom_auteur}}">
            </label>
            <label>Date de naissance
                <input type="text" name="naissance_auteur" value="{{ auteur.naissance_auteur}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
    </main>
    
</body>
</html>