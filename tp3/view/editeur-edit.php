{{ include('header.php', {title: 'Editeur', pageHeader: 'Modifier Éditeur'})}}
<main>
    <form action="{{ path }}editeur/update" method="post">
        <input type="hidden" name="id" value="{{ editeur.id }}">
        <label>Nom 
            <input type="text" name="nom_editeur" value="{{ editeur.nom_editeur}}">
        </label>
        <label>Téléphone
            <input type="text" name="tel_editeur" value="{{ editeur.tel_editeur}}">
        </label>
        <label>Adresse
            <input type="text" name="adresse_editeur" value="{{ editeur.adresse_editeur}}">
        </label>
        <input type="submit" value="Modifier">
    </form>
</main>
    
</body>
</html>