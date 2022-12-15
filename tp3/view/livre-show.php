{{ include('header.php', {title: 'Livres', pageHeader: 'Profile Livre'})}}
    <main>
        <p><strong>Nom du livre : </strong>{{livre.nom_livres}}</p>
        <p><strong>Description : </strong>{{livre.description_livres}}</p>
        <p><strong>Prix :</strong>{{ livre.prix_livres }}$</p>
        <p><strong>Édition : </strong>{{ livre.edition_livres }}</p>
        <p><a href="{{ path }}livre/edit/{{livre.id}}">Modifier</a></p>
    </main>
</body>
</html>

