<?php
include('../backend/bdd/bdd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email invalide.");
    }

    try {
        $bdd = Bdd::connexion();
        $stmt = $bdd->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header("Location: indexUser.php");
            exit();
        } else {
            die("Email ou mot de passe incorrect.");
        }
        
    } catch (PDOException $e) {
        die("Erreur lors de la connexion : " . $e->getMessage());
    }
}
?>
