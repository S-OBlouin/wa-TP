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
    <h2>Modifier</h2>
        <form action="{{ path }}livre/update" method="post">
            <input type="hidden" name="id" value="{{ livre.id }}">
            <label>Nom du livre
                <input type="text" name="nom_livres" value="{{ livre.nom_livres}}">
            </label>
            <label>Description
                <input type="text" name="description_livres" value="{{ livre.description_livres}}">
            </label>
            <label>Prix
                <input type="text" name="prix_livres" value="{{ livre.prix_livres}}">
            </label>
            <label>Édition
                <input type="text" name="edition_livres" value="{{ livre.edition_livres}}">
            </label>
            <label>Éditieur
                <input type="text" name="nom_editeur" value="{{ editeur.nom_editeur}}">
            </label>
            <label>Auteur
                <input type="text" name="nom_auteur" value="{{ auteur.nom_auteur}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="{{ path }}livre/delete" method="post">
            <input type="hidden" name="id" value="{{ livre.id}}">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>