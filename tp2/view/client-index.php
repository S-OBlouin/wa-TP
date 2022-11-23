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
        Liste de Client
    </header>
    <main>
        <section>
            <h2>{{ client_list }}</h2>
            <a href="{{ path }}client/create">Ajouter</a>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Courriel</th> 
                        <th>Edit</th>
                    </tr> 
                </thead>
                <tbody>
                    {% for client in clients %}
                    <tr>
                        <td>{{ client.nom_client }}</td>
                        <td>{{ client.courriel_client }}</td>
                        <td><a href="{{ path }}client/show/{{ client.id}}">Vue</a></td>
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