{{ include('header.php', {title: 'Connection', pageHeader: 'Se Connecter'})}}
<main>
<span class="error">{{ errors|raw }}</span>
<form action="{{ path }}user/auth" method="post">
    <label>Username 
        <input type="email" name="username_user" value="{{ user.username }}">
    </label>
    <label>Password 
        <input type="password" name="password_user">
    </label>
    <input type="submit" value="Connecter">
</form>
</main>
</body>
</html>