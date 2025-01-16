<?php
    session_start();

include("headerUser.php");

// include('../backend/Model/postsModel.php');

$postsModel = new PostsModel();
$recentPosts = $postsModel->getRecentPosts();
?>

<div class="content">
    <div class="posts-header">
        <h2>Derniers posts</h2>
        <select id="sortPosts">
            <option value="newest">Plus récent</option>
            <option value="oldest">Moins récent</option>
        </select>
    </div>

    <div id="postsFeed">
        <?php if (empty($recentPosts)): ?>
            <p class="no-posts-message">Aucun poste disponible.</p>
        <?php else: ?>
            <?php foreach ($recentPosts as $post): ?>
                <div class="post">
                    <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                    <p><?php echo htmlspecialchars(substr($post['content'], 0, 200)) . '...'; ?></p>
                    <img src="<?php echo htmlspecialchars($post['link_image']); ?>" alt="Image du post">
                    <p>Date: <?php echo htmlspecialchars($post['date_create']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <button id="createPostBtn">Créer un post</button>
</div>

<?php
include("footerUser.php");
?>