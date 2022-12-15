{{ include('header.php', {title: 'Livres', pageHeader: 'Liste de livre'})}}
    <main>
        <section>
        {%  if session.privilege_id == 1 %}
            <a href="{{ path }}livre/create">Ajouter</a>
        {% endif %}
            <table>
                <thead>
                    <tr>
                        <th>Nom du livre</th>
                        <th>Description</th> 
                        <th>Prix</th> 
                        <th>Édition</th> 
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