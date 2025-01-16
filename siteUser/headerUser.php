<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efreddit</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <header>
        <div class="banner">
            <h1>Efreddit</h1>
            <?php if (isset($_SESSION['user'])) { ?>
                <p><?php echo htmlspecialchars($_SESSION['user']['user_name']); ?></p>
                <a href="?page=yourPosts"><button id="yourPosts">Vos Posts</button></a>
                <a href="?page=logoutuser"><button id="logout">Déconnexion</button></a>
            <?php } else { ?>
                <a href="?page=loginUser">
                    <button id="login">Connexion</button>
                </a>
            <?php } ?>
        </div>
    </header>
    <main>
