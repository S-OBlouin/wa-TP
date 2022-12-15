{{ include('header.php', {title: 'Editeur', pageHeader: 'Nouveau Éditeur'})}}
<main>
    <h2>Saisir éditeur</h2>
    <form action="{{ path }}editeur/store" method="post">
        <label>Nom 
            <input type="text" name="nom_editeur">
        </label>
        <label>Téléphone
            <input type="text" name="tel_editeur">
        </label>
        <label>Adresse
            <input type="text" name="adresse_editeur">
        </label>
        <input type="submit" value="Save">
    </form>
</main>
</body>
</html>