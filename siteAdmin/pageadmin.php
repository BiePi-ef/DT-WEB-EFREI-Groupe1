<!-- <link rel="stylesheet" href="styles/yourPosts.css"> -->

    <h1>Tout les utilisateurs</h1>

    <?php if (empty($users)): ?>
        <p>Aucun utilisateur trouvé.</p>
    <?php else: ?>
        <div id="userfeed">
            <?php foreach ($users as $user){ ?>
                <div class="user">
                    <h3><?php echo htmlspecialchars($user['user_name'])?></h3>
                    <p>Date: <?php echo htmlspecialchars($user['date_create']); ?></p>
                </div>
            <?php } ?>
        </div>
    <?php endif; ?>
</main>