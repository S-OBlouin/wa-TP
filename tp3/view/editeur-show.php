{{ include('header.php', {title: 'Editeur', pageHeader: 'Profile Éditeur'})}}
    <main>
        <p><strong>Nom : </strong>{{editeur.nom_editeur}}</p>
        <p><strong>Téléphone : </strong>{{editeur.tel_editeur}}</p>
        <p><strong>Adresse : </strong>{{editeur.adresse_editeur}}</p>
        <p><a href="{{ path }}client/edit/{{client.id}}">Modifier</a></p>
    </main>
</body>
</html>

