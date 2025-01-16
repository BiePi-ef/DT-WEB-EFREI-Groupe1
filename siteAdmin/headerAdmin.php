
<?php require '../backend/bdd/bdd.php' ?>
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
            <?php if (!isset($_SERVER['id_admin'])): ?>
                <a href="loginAdmin.php">
                    <button id="login">Connexion</button>
                </a>
            <?php else : htmlspecialchars($_SESSION['admin_name'])?>
    
                <a href="logout.php">Déconnexion</a> 
            <?php endif ; ?>
                
        </div>
    </header>
</body>