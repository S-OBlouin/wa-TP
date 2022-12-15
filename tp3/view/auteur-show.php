{{ include('header.php', {title: 'Auteur', pageHeader: 'Profile Auteur'})}}
    <main>
        <p><strong>Nom : </strong>{{auteur.nom_auteur}}</p>
        <p><strong>Date de naissance : </strong>{{auteur.naissance_auteur}}</p>
        <p><a href="{{ path }}client/edit/{{client.id}}">Modifier</a></p>
    </main>
</body>
</html>

