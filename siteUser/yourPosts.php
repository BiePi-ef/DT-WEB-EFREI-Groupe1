<link rel="stylesheet" href="styles/yourPosts.css">

        <h2>Vos Posts</h2>

        <?php if (empty($posts)): ?>
            <p>Aucun post trouvé.</p>
        <?php else: ?>
            <div id="postsFeed">
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                        <p><?php echo htmlspecialchars(substr($post['content'], 0, 200)) . '...'; ?></p>
                        <p>Date: <?php echo htmlspecialchars($post['date_create']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>

