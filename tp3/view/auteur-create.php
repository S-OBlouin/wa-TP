{{ include('header.php', {title: 'Auteur', pageHeader: 'Nouveau Auteur'})}}
    <main>
        <h2>Saisir auteur</h2>
        <form action="{{ path }}auteur/store" method="post">
            <label>Nom 
                <input type="text" name="nom_auteur">
            </label>
            <label>Date de Naissance
                <input type="text" name="naissance_auteur">
            </label>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>