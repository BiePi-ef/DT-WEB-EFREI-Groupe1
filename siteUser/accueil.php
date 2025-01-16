<div class="content">
    <div class="posts-header">
        <h2>Derniers posts</h2>
        <select id="sortPosts">
            <option value="newest">Plus récent</option>
            <option value="oldest">Moins récent</option>
        </select>
    </div>

    <?php include_once './postsFeed.php'; ?>

    <button id="createPostBtn">Créer un post</button>
</div>