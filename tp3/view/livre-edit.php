{{ include('header.php', {title: 'Livres', pageHeader: 'Modifier Livre'})}}
<main>
    <form action="{{ path }}livre/update" method="post">
        <input type="hidden" name="id" value="{{ livre.id }}">
        <label>Nom du livre
            <input type="text" name="nom_livres" value="{{ livre.nom_livres}}">
        </label>
        <label>Description
            <input type="text" name="description_livres" value="{{ livre.description_livres}}">
        </label>
        <label>Prix
            <input type="text" name="prix_livres" value="{{ livre.prix_livres}}">
        </label>
        <label>Édition
            <input type="text" name="edition_livres" value="{{ livre.edition_livres}}">
        </label>
        <input type="submit" value="Modifier">
    </form>
    <form action="{{ path }}livre/delete" method="post">
        <input type="hidden" name="id" value="{{ livre.id}}">
        <input type="submit" value="Effacer">
    </form>
</main>
    
</body>
</html>