{{ include('header.php', {title: 'Editeur', pageHeader: 'Liste Éditeur'})}}
<main>
    <section>
        <a href="{{ path }}editeur/create">Ajouter</a>
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
                {% for editeur in editeurs %}
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