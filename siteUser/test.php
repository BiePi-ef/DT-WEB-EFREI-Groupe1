<h1>Test</h1>

<?php
    include_once '../backend/bdd/bdd.php';

    $bdd = Bdd::connexion();

    $test = $bdd->query("SELECT * FROM users;")->fetchAll(PDO::FETCH_ASSOC);

    echo var_dump($test);
?>

<p><?php $test["id_user"] ?></p>