<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efreddit</title>
    <link rel="stylesheet" href="styles/main.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <header>
        <div class="banner">
            <button id="accueil"><a href="?page=accueilUser"><h1>Efreddit</h1></a></button>
            <?php if (isset($_SESSION['user'])) { ?>
                <p><?php echo htmlspecialchars($_SESSION['user']['user_name']); ?></p>
                <a href="?page=yourPosts"><button id="yourPosts">Vos Posts</button></a>
                <a href="?page=logoutuser"><button id="logout">Déconnexion</button></a>
            <?php } else { ?>
                <a href="?page=loginUser">
                    <button id="loginBtn">Connexion</button>
                </a>
            <?php } ?>
        </div>
    </header>
    <main>
