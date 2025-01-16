<?php
include('../backend/bdd/bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupération des données
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validation des données
    if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $username)) {
        echo ("Nom d'utilisateur invalide.");
    }

    if (!preg_match("/^[a-zA-Z0-9._%+-]{1,50}@[a-zA-Z0-9.-]{1,20}\.[a-zA-Z]{1,3}$/", $email)) {
        echo ("Email invalide.");
    }

    if (strlen($password) < 12) {
        echo ("Le mot de passe doit contenir au moins 12 caractères.");
    }

    // Hachage du mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données
    try {
        $bdd = Bdd::connexion();
        $stmt = $bdd->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword]);
        
        echo "Inscription réussie ! Vous pouvez maintenant vous connecter.";
        
        // Redirection vers la page de connexion ou autre
        header("Location: login.php");
        exit();
        
    } catch (PDOException $e) {
        die("Erreur lors de l'inscription : " . $e->getMessage());
    }
}
?>
