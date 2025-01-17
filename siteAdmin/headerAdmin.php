
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efreddit</title>
    <link rel="stylesheet" href="../siteAdmin/styles/main.css">
</head>
<body>
    <header>
        <div class="banner">
        <button id="accueil"><a href="?page=accueilUser"><h1>Efreddit</h1></a></button>
            
        
        <?php if (!isset($_SESSION['admin'])){ ?>
                <a href="?page=loginAdmin">
                    <button id="login">Connexion</button>
                </a>
        <?php } else {  ?>
            <p><?php echo htmlspecialchars($_SESSION['admin']['admin_name']); ?></p>  
            <?php if (!isset($_SESSION['admin'])){ ?>
                </a>
            <?php } else { $name = $_SESSION['admin']['admin_name'] ?>
                <a href="?page=pageadmin">
                    <button id="loginBtn">Page admin</button></a>
            <?php }?>   
            <a href="?page=logout"><button id="loginBtn">Deconnexion</button></a>
            <?php }?>
                
        </div>
    </header>
</body>