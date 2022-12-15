{{ include('header.php', {title: 'Home'})}}
<body>
    <h1>{{welcome}}</h1>
    <h2>Recevez l'infolettre</h2>
    <form action="{{path}}home/sendemail" method="POST">
        <label>Email
            <input type="email" name="email" value="">
        </label>
        <button type="submit" name="send">Envoyer</button>
    </form>
</body>
</html>