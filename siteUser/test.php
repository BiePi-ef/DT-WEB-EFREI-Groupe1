<h1>Test</h1>

<?php

    $_POST['mdp'] = 'test';
    $_POST['email'] = 'test@test.test';
    
    echo $_SESSION['user']['user_name'];
    $a = $_SESSION['user']['user_name'];
    ?>

<p>id : <?php echo $a; ?></p>