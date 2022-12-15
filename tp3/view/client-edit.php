{{ include('header.php', {title: 'Client', pageHeader: 'Modifier'})}}
<main>
    <h1>Modifier </h1>
        <form action="{{ path }}client/update" method="post">
            <input type="hidden" name="id" value="{{ client.id }}">
            <label>Nom 
                <input type="text" name="nom_client" value="{{ client.nom_client}}">
            </label>
            <label>Adresse
                <input type="text" name="adresse_client" value="{{ client.adresse_client}}">
            </label>
            <label>Téléphone
                <input type="text" name="tel_client" value="{{ client.tel_client}}">
            </label>
            <label>Courriel
                <input type="email" name="courriel_client" value="{{ client.courriel_client}}">
            </label>
            <input type="submit" value="Modifier">
        </form>
        <form action="{{ path }}client/delete" method="post">
            <input type="hidden" name="id" value="{{ client.id}}">
            <input type="submit" value="Effacer">
        </form>
    </main>
    
</body>
</html>