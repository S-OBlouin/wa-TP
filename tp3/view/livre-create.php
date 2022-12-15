{{ include('header.php', {title: 'Livres', pageHeader: 'Nouveau Livre'})}}
<main>
    <form action="{{ path }}livre/store" method="post">
        <label>Nom du livre
            <input type="text" name="nom_livres">
        </label>
        <label>Description 
            <input type="text" name="description_livres">
        </label>
        <label>Prix
            <input type="text" name="prix_livres">
        </label>
        <label>Édition
            <input type="text" name="edition_livres">
        </label>
        <input type="submit" value="Save">
    </form>
</main>
</body>
</html>