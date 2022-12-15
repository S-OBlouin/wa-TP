{{ include('header.php', {title: 'Auteur', pageHeader: 'Modifier Auteur'})}}
<main>
    <h2>Modifier </h2>
        <form action="{{ path }}auteur/update" method="post">
            <input type="hidden" name="id" value="{{ auteur.id }}">
            <label>Nom 
                <input type="text" name="nom_auteur" value="{{ auteur.nom_auteur}}">
            </label>
            <label>Date de naissance
                <input type="text" name="naissance_auteur" value="{{ auteur.naissance_auteur}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
    </main>
    
</body>
</html>