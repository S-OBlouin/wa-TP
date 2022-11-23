<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Livre</title>
    <link rel="stylesheet" href="{{ path }}css\style.css">
</head>
<body>
    <main>
        <h2>Saisir un livre</h2>
        <form action="{{ path }}client/store" method="post">
            <label>Nom du livre
                <input type="text" name="nom_livres">
            </label>
            <label>Description 
                <input type="text" name="description_livres">
            </label>
            <label>Prix
                <input type="text" name="prix_livres">
            </label>
            <label>Édition
                <input type="text" name="edition_livres">
            </label>
            <label>Éditeur
                <input type="text" name="wa_editeur_id">
            </label>
            <label>Auteur
                <input type="text" name="wa_auteur_id">
            </label>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>