    <div class="content">
        <div class="posts-header">
            <div class="left-section">
                <select id="sortPosts">
                    <option value="" disabled selected>Trier par :</option>
                    <option value="newest">+ récent</option>
                    <option value="oldest">- récent</option>
                </select>
            </div>

            <h2>Derniers posts</h2>

        <div class="right-section">
                <form action="search.php" method="GET" class="search-form">
                    <input type="text" id="searchInput" name="query" placeholder="Rechercher..." class="search-input">
                    <button type="submit" class="search-button">🔍</button>
                </form>
            </div>
        </div>

        <?php include_once './postsFeed.php'; ?>

        <a href=<?php echo $link ?> id="createPostBtn">Créer un post</a>
</div>