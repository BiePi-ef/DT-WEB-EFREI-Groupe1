<?php
include('../backend/bdd/bdd.php');

// Traitement du formulaire lors de la soumission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $image = trim($_POST['image_url']); // Récupère l'URL de l'image

    try {
        $bdd = Bdd::connexion();
        $stmt = $bdd->prepare("INSERT INTO posts (title, content, link_image, user_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $content, $image, $_SESSION['user_id']]);
        echo "Post créé avec succès.";
        header("Location: indexUser.php"); // Redirige vers la page d'accueil après la création
        exit();
    } catch (PDOException $e) {
        die("Erreur lors de l'insertion : " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Poste - Efreddit</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <header>
        <div class="banner">
            <a href="indexUser.php">
                <h1>Efreddit</h1>
            </a>
        </div>
    </header>

    <main>
        <h2>Créer un nouveau post</h2>
        <form action="" method="POST">
            <div>
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="content">Contenu :</label>
                <textarea id="content" name="content" rows="4" required></textarea>
            </div>
            <div>
                <label for="image_url">Ajouter un lien d'image :</label>
                <input type="text" id="image_url" name="image_url" placeholder="lien d'image" required>
            </div>
            <button type="submit">Publier le Post</button>
        </form>

    </main>

    <footer>
        <p>&copy; 2025 Efreddit. Tous droits réservés.</p>
    </footer>

    <script src="scripts/main.js"></script>
</body>
</html>
