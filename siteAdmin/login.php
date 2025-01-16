<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Efreddit</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <header>
        <div class="banner">
            <h1>Efreddit</h1>
        </div>
    </header>
    <main>
        <div class="content">
            <h2>Connexion</h2>
            <form action="backend/model/login-verif.php" method="POST">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" id="loginBtn">Se connecter</button>
            </form>
            <p>Vous n'avez pas encore de compte ? <a href="signup.php">Inscrivez-vous</a></p>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Efreddit. Tous droits réservés.</p>
    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>
