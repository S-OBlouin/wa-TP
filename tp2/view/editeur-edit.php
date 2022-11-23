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
    <h2>Modifier</h2>
        <form action="{{ path }}editeur/update" method="post">
            <input type="hidden" name="id" value="{{ editeur.id }}">
            <label>Nom 
                <input type="text" name="nom_editeur" value="{{ editeur.nom_editeur}}">
            </label>
            <label>Téléphone
                <input type="text" name="tel_editeur" value="{{ editeur.tel_editeur}}">
            </label>
            <label>Adresse
                <input type="text" name="adresse_editeur" value="{{ editeur.adresse_editeur}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
    </main>
    
</body>
</html>