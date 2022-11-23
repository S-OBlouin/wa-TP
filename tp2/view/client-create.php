<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="{{ path }}css\style.css">
</head>
<body>
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