{{ include('header.php', {title: 'Client', pageHeader: 'Liste de client'})}}
    <main>
        <section>
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