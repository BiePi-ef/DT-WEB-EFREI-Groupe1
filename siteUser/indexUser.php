<?php
include("headerUser.php");

include('../backend/controller/postsController.php');

$postsController = new PostsController();
$recentPosts = $postsController->getRecentPosts();
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
        <?php foreach ($recentPosts as $post): ?>
            <div class="post">
                <h3><?php echo htmlspecialchars($post['title']); ?></h3>
                <p><?php echo htmlspecialchars(substr($post['content'], 0, 200)) . '...'; ?></p>
                <img src="<?php echo htmlspecialchars($post['image_link']); ?>" alt="Image du post">
                <p>Date: <?php echo $post['date_create']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <button id="createPostBtn">Créer un post</button>
</div>

<?php
include("footerUser.php");
?>
