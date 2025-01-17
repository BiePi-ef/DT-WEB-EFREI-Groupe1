
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
        <button id="login"><a href="?page=accueiluser"><h1>Efreddit</h1></button>
            <?php if (!isset($_SESSION['admin'])){ ?>
                <a href="?page=loginAdmin">
                    <button id="login">Connexion</button>
                </a>
            <?php } else { $name = $_SESSION['admin']['admin_name'] ?>
                <p> <?php echo $name ?> </p>
                <a href="?page=logout"><button id="logout">Deconnexion</button></a>
            <?php }?>
                
        </div>
    </header>
</body>