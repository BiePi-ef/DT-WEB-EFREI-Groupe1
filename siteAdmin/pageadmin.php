<!-- <link rel="stylesheet" href="styles/yourPosts.css"> -->
<link rel="stylesheet" href="styles/pageadmin.css">
    <h1>Tout les utilisateurs</h1>

    <?php if (empty($users)){ ?>
        <p>Aucun utilisateur trouvé.</p>
    <?php } else{ ?>
        <div id="userfeed">
            <?php foreach ($users as $user){ ?>
                <div class="user">
                <div class="float"> 
                    <h3><?php echo htmlspecialchars($user['user_name'])?></h3>
                    <p>Date: <?php echo htmlspecialchars($user['date_create']); ?></p>
                    <input type="submit" name="deleteuser" id = "boutton" value="Supprimer l'utilisateur">
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</main>