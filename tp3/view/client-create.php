{{ include('header.php', {title: 'Client', pageHeader: 'Nouveau Client'})}}
    <main>
        <h2>Saisir client</h2>
        <form action="{{ path }}client/store" method="post">
            <label>Username
                <input type="email" name="username_client" placeholder="email@email.e">
            </label>
            <label>Nom 
                <input type="text" name="nom_client">
            </label>
            <label>Adresse
                <input type="text" name="adresse_client">
            </label>
            <label>Courriel
                <input type="email" name="courriel_client">
            </label>
            <label>Téléphone
                <input type="text" name="tel_client">
            </label>
            <input type="submit" value="Save">
        </form>
    </main>
</body>
</html>