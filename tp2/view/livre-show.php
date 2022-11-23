<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">
</head>
<body>
    <main>
        <p><strong>Nom du livre : </strong>{{livre.nom_livres}}</p>
        <p><strong>Description : </strong>{{livre.description_livres}}</p>
        <p><strong>Prix :</strong>{{ livre.prix_livres }}$</p>
        <p><strong>Édition : </strong>{{ livre.edition_livres }}</p>
        <p><strong>Éditieur : </strong>{{ editeur.nom_editeur }}</p>
        <p><strong>Auteur : </strong>{{ auteur.nom_auteur }}</p>
        <p><a href="{{ path }}livre/edit/{{livre.id}}">Modifier</a></p>
    </main>
</body>
</html>

