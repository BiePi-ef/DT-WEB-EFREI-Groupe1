<link rel="stylesheet" href="styles/login.css">

<div class="content">
    <h2>Connexion</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe :</label>
            <input type="password" id="mdp" name="mdp" required>
        </div>
        <button type="submit" id="loginBtn">Se connecter</button>
    </form>
    <p>Vous n'avez pas encore de compte ? <a href="?page=signupUser">Inscrivez-vous</a></p>
</div>