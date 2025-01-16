<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: createPost.php');
} else {
    $_SESSION['redirect_after_login'] = 'createPost.php';
    header('Location: login.php');
}
exit();
?>
