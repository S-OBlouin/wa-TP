{{ include('header.php', {title: 'Client', pageHeader: 'Profile'})}}
    <main>
        <p><strong>Nom : </strong>{{client.nom_client}}</p>
        <p><strong>Adresse : </strong>{{client.adresse_client}}</p>
        <p><strong>Téléphone :</strong>{{ client.tel_client }}</p>
        <p><strong>Courriel : </strong>{{ client.courriel_client }}</p>
        <p><a href="{{ path }}client/edit/{{client.id}}">Modifier</a></p>
    </main>
</body>
</html>

