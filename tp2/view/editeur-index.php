<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
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
        Liste d'éditeurs
    </header>
    <main>
        <section>
            <h2>{{ editeur_list }}</h2>
            <a href="{{ path }}auteur/create">Ajouter</a>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Téléphone</th> 
                        <th>Adresse</th> 
                        <th>Edit</th>
                    </tr> 
                </thead>
                <tbody>
                    {% for auteur in auteurs %}
                    <tr>
                        <td>{{ editeur.nom_editeur }}</td>
                        <td>{{ editeur.tel_editeur }}</td>
                        <td>{{ editeur.adresse_editeur }}</td>
                        <td><a href="{{ path }}editeur/show/{{ editeur.id}}">Vue</a></td>
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