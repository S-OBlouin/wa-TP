<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre</title>
    <link rel="stylesheet" href="{{ path }}css/style.css">

</head>
<body>
    <nav>
        <a href="{{ path }}client/index">Client</a>
        <a href="{{ path }}livre/index">Livre</a>
        <a href="{{ path }}auteur/index">Auteur</a>
        <a href="{{ path }}editeur/index">Editeur</a>
    </nav>
    <header>
        Liste de livres
    </header>
    <main>
        <section>
            <h2>{{ livre_list }}</h2>
            <a href="{{ path }}livre/create">Ajouter</a>
            <table>
                <thead>
                    <tr>
                        <th>Nom du livre</th>
                        <th>Description</th> 
                        <th>Prix</th> 
                        <th>Édition</th> 
                        <th>Éditeur</th> 
                        <th>Auteur</th> 
                        <th>Edit</th>
                    </tr> 
                </thead>
                <tbody>
                    {% for livre in livres %}
                    <tr>
                        <td>{{ livre.nom_livres }}</td>
                        <td>{{ livre.description_livres }}</td>
                        <td>{{ livre.prix_livres }}</td>
                        <td>{{ livre.edition_livres }}</td>
                        <td>{{ editeur.nom_editeur }}</td>
                        <td>{{ auteur.nom_auteur }}</td>
                        <td><a href="{{ path }}livre/show/{{ livre.id}}">Vue</a></td>
                    </tr>
                    {% endfor %}
                </tbody>
                
            </table>
        </section>
    </main>
    <footer>
        Tous les droits
    </footer>
</body>
</html>