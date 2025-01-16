<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Efreddit</title>
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>
    <header>
        <div class="banner">
            <h1>Efreddit</h1>
        </div>
    </header>
<main>

<div class="content">
    <h2>Inscription</h2>
    <form action="backend/controllers/signup-verif.php" method="POST">
        <div class="form-group">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" id="registerBtn">S'inscrire</button>
    </form>
    <p>Vous avez déjà un compte ? <a href="loginAdmin.php">Connectez-vous</a></p>
</div>

</main>
    <footer>
        <p>&copy; 2025 Efreddit. Tous droits réservés.</p>
    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>
