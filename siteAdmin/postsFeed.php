<div id="postsFeed">
    <?php if (empty($posts)): ?>
        <p class="no-posts-message">Aucun posts disponible.</p>
    <?php else: ?>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo htmlspecialchars(substr($post['content'], 0, 200)) . '...'; ?></p>

                <?php include "./displayImages.php"; ?>
                
                <p>Date: <?php echo htmlspecialchars($post['date_create']); ?></p>

                <form action="" method="post">
                    <input type="hidden" name="id_post" value="<?php echo $post['id_post']; ?>">
                    <input type="hidden" name="post_title" value="<?php echo $post['title']; ?>">
                    <input type="submit" name="deletePost" value="Supprimer le post">
                </form>
            </div>
        <?php endforeach;?>
    <?php endif; ?>
</div>