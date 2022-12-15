{{ include('header.php', {title: 'Auteur', pageHeader: 'Liste Auteur'})}}
<main>
    <section>
        <a href="{{ path }}auteur/create">Ajouter</a>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date de naissance</th> 
                    <th>Edit</th>
                </tr> 
            </thead>
            <tbody>
                {% for auteur in auteurs %}
                <tr>
                    <td>{{ auteur.nom_auteur }}</td>
                    <td>{{ auteur.naissance_auteur }}</td>
                    <td><a href="{{ path }}auteur/show/{{ auteur.id}}">Vue</a></td>
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